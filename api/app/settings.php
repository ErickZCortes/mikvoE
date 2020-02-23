<?php
    //configuracion de la base de datos
    $db = require $contexto_app . '/app/database/config.php';
    
    //configuración de la app
    $settings = array(
        'displayErrorDetails' => true,
        'determineRouteBeforeAppMiddleware' => true,
        'db' => $db
    );

    // se agrega el contexto de la app
    $settings['contexto'] = $contexto_app;
    //var_dump($settings);
    //die();
    return $settings;
?>