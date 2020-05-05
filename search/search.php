<?php

$client = new http\Client;
$request = new http\Client\Request;

$request->setRequestUrl('https://spoonacular-recipe-food-nutrition-v1.p.rapidapi.com/recipes/search');
$request->setRequestMethod('GET');
$request->setQuery(new http\QueryString(array(
	'diet' => 'vegetarian',
)));

$request->setHeaders(array(
	'x-rapidapi-host' => 'spoonacular-recipe-food-nutrition-v1.p.rapidapi.com',
	'x-rapidapi-key' => 'a3de1c264fmshd99c7367a8f3d93p1972fcjsnd9ffe7b4a89b'
));

$client->enqueue($request)->send();
$response = $client->getResponse();

echo $response->getBody();
echo "hi"?>