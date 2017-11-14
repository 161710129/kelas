<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/kantin/{a}/{b}/{c}', function ($a,$b,$c) {
	return '<h1>Pesanan</h1>'
	.'saya makan :'. $a .'<br>'
	.'saya minum :'. $b .'<br>'
	.'cemilannya :'  $c;

});

route::get('user/{nama>}'. function ($name ='podol') {
	return 'Nama saya' .$name;
});

Route::get('/kantin/{a}', function ($a) {
	return '<h1>Pesanan</h1>'
	.'saya makan :'. $a;

});


Route::get('/kantin/{a}/{b}', function ($a,$b) {
	return '<h1>Pesanan</h1>'
	.'saya makan :'. $a;
	.'saya minum :'. $b;

});

Route::get('/kantin/{a}/{b}/{c}', function ($a,$b,$c) {
	return '<h1>Pesanan</h1>'
	.'saya makan :'. $a;
	.'saya minum :'. $b;
	.'cemilannya :'. $c;

});