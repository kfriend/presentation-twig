<?php

class Article
{
	public $title = 'Accessors in twig!';

	public function getDate()
	{
		return '3/6/2014';
	}
}

return [
	'title' => 'Example Twig Templates!!!',
	'menu' => [
		'home' => [
			'title' => 'Home',
			'url' => '/',
		],
		'about' => [
			'title' => 'About & Other Cool Stuff',
			'url' => '/about',
		],
	],
	'article' => new Article(),
];