<?php
 require_once  './vendor/autoload.php';
 $loader = new \Twig\Loader\FilesystemLoader('./public/template/');
       $twig = new \Twig\Environment($loader, [
           'debug' => false,
           'cache' => false,
       ]);
       $twig->addExtension(new \Twig\Extension\DebugExtension());
