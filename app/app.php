<?php
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/PingPongGenerator.php';

    $app = new Silex\Application();
    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('ping-pong-form.html.twig');
    });

    $app->get("/view_ping_pong", function() use ($app) {
        $new_generator = new PingPongGenerator;
        $ping_pong_array = $new_generator->generatePingPongArray($_GET['number']);
        return $app['twig']->render('ping-pong-result.html.twig', array('results' => $ping_pong_array));
    });

    return $app;


?>
