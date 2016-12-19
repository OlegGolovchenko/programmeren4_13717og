<?php
      include(dirname(dirname(__DIR__)).'/vendor/autoload.php');
      $appState = new \ModernWays\Dialog\Model\NoticeBoard();
      $request = new \ModernWays\Mvc\Request('/home/index');
      $route = new \ModernWays\Mvc\Route($appState,$request->uc());
      $routeConfig = new \ModernWays\Mvc\RouteConfig('\Programmeren4\Les9',$route,$appState);
      $view = $routeConfig->invokeActionMethod();
?>