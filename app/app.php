<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Swap.php";

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('index.html.twig', array(
            'form' => true
        ));
    });

    $app->get("/action", function() use ($app) {
        $my_Swap = new Swap;
        if($_GET['button'] == 'whole') {
            $message_text = $my_Swap->replaceWords($_GET['phrase'] , $_GET['word-to-replace'] , $_GET['replacement']);
        } else {
            $message_text = $my_Swap->replaceAnyMatch($_GET['phrase'] , $_GET['word-to-replace'] , $_GET['replacement']);
        }

        return $app['twig']->render('index.html.twig', array(
            'form' => true,
            'message' => array(
                'text' => $message_text,
                'type' => 'info'
            )
        ));
    });

    return $app;
 ?>
