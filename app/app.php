<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Game.php";

    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('index.html.twig', array(
            'form' => true
        ));
    });

    $app->get("/game", function() use ($app) {
        $my_game = new Game;
        $winner = $my_game->playGame($_GET['player-one']);
        if ($winner == 'Player 1') {
            $message_type = 'success';
            $message_text = 'You win this time...';
        } elseif ($winner == 'Player 2') {
            $message_type = 'danger';
            $message_text = 'You are a Loser!';
        } else {
            $message_type = 'warning';
            $message_text = 'Draw... I dare you to play one more time.';
        }

        return $app['twig']->render('index.html.twig', array(
            'form' => true,
            'message' => array(
                'type' => $message_type,
                'text' => $message_text
            )
        ));
    });

    return $app;
 ?>
