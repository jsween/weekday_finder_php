<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Scrabble.php";

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('index.html.twig', array(
            'form' => true
        ));
    });

    $app->get("/score", function() use ($app) {
        $my_Scrabble = new Scrabble;
        $result = $my_Scrabble->calcScore($_GET['word']);
        var_dump($result);
        return $app['twig']->render('index.html.twig', array(
            'form' => true,
            'message' => array(
                'type' => 'info',
                'text' => $_GET['word'] . " is worth " . $result . " points."
            )
        ));
    });

    return $app;
 ?>
