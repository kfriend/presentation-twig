<?php

// Parse request URI
$route = parse_url(substr($_SERVER['REQUEST_URI'], 1))['path'];

// Check if a corresponding twig file exists
if (is_file(__DIR__."/templates/{$route}.twig"))
{
	// Load in Twig bootstrapper
	require __DIR__.'/bootstrap.php';

	// Get template context, if present
	$context = is_file(__DIR__."/context/{$route}.php")
		? include __DIR__."/context/{$route}.php"
		: [];

	// Parse template and return
	echo $twig->render($route.'.twig', $context);
	exit;
}

echo '404 dude!';
exit;