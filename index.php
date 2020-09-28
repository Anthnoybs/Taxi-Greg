<?php

  $request = $_SERVER['REQUEST_URI'];

  switch($request)
  {
    case '/':
        require __DIR__ .'/src/accueil.php'; break;

    case '/Accueil';
        require __DIR__ .'/src/accueil.php'; break;
 
    default:
        header('HTTP/1.0 404 not found');
        require  __DIR__ .'/src/error404.php';
        break;
  }

