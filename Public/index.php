<?php 

require "../Core/Router.php";

$router = new Router();
// echo "<br>".get_class($router);

// echo "Hello world !!!" . "\n";

$url = $_SERVER["QUERY_STRING"];


$router->add("admin/users", ["controller"=> "Users", "action" =>"index"]);
$router->add("{controller}/{action}");
$router->add("admin/{controller}/{action}");
$router->add("{controller}/{id:\d+}/{action}");



echo "<pre>";
// var_dump ($router->getRoutes());
// var_dump ($router->match($url));


var_dump ($router->dispatch($url));



echo "</pre>";









?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h2 style="font-size: 20px;">Bonjour et bienvenu !
    </h2>
</body>
</html>