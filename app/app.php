<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Weekday.php";

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('index.html.twig', array(
            'form' => true
        ));
    });

    $app->get("/day", function() use ($app) {
        $my_Day = new Weekday;
        $result = $my_Day->findDay($_GET['month'], $_GET['day'], $_GET['year']);
        var_dump('Result is: ' . $result);
        return $app['twig']->render('index.html.twig', array(
            'form' => true,
            'message' => array(
                'type' => 'info',
                'text' => 'That was a ' . $result
            )
        ));
    });

    return $app;
 ?>
