<?php

class Article
{
	public $title = 'Accessors in twig!';

	public function getDate()
	{
		return '3/6/2014';
	}

	public function body()
	{
		return 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod';
	}
}

return [
	'title' => 'Example Page',
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