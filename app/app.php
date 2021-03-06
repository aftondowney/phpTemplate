<?php

		require_once __DIR__."/../vendor/autoload.php";
		require_once __DIR__."/../src/Author.php";
	 	require_once __DIR__."/../src/Book.php";

		$app = new Silex/Application();

		$server = 'mysql:host=localhost;dbname=library';
    $username = 'root';
    $password = 'root';
    $DB = new PDO($server, $username, $password);

    use Symfony\Component\HttpFoundation\Request;
  	Request::enableHttpMethodParameterOverride();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

		$app->get("/", function() {
			return "home";
		});

		return $app;

?>
