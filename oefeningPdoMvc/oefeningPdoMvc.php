<?php
      include(dirname(dirname(__DIR__)).'/vendor/autoload.php');
      $appState = new \ModernWays\Dialog\Model\NoticeBoard();
      $request = new \ModernWays\Mvc\Request('/home/index');
      $route = new \ModernWays\Mvc\Route($appState,$request->uc());
      $routeConfig = new \ModernWays\Mvc\RouteConfig('\Programmeren4\Article',$route,$appState);
      $view = $routeConfig->invokeActionMethod();
      
?>
<!doctype html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <title>Home</title>
</head>
<body>
      <?php $view();?>
</body>
</html>