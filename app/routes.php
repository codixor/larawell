<?php

Route::get('/', function()
{
	//$tweets = Twitter::getUserTimeline(array('screen_name' => 'thujohn', 'count' => 20, 'format' => 'json'));
	if(Cache::has('hello')){
		$hello = Cache::get('hello');
	}else{
		$hello = View::make('hello', compact($tweets))->render();
		Cache::put('hello', $hello, 60);
	}
	echo $hello;
	//echo Form::captcha();
});

Route::get('/utils/env', function()
{
	echo View::make('utils.env');
});

Route::get('/utils/apc', function()
{
	echo View::make('utils.apc');
});

Route::get('/utils/memcache', function()
{
	echo View::make('utils.memcache');
});


Route::get('elfinder', 'Barryvdh\Elfinder\ElfinderController@showIndex');
Route::any('elfinder/connector', 'Barryvdh\Elfinder\ElfinderController@showConnector');
Route::get('elfinder/tinymce', 'Barryvdh\Elfinder\ElfinderController@showTinyMCE4');

