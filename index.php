<?php


ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once('vendor/autoload.php');

//F3 class
$f3 = Base::instance();

//Route
$f3->route('GET /', function ($f3) {
    //echo "<h1>Week 5</h1>";

    //create variables in the f3 hive
    $f3->set('username','root');
    $f3->set('password', sha1('Password01'));
    $f3->set('title', 'working with templates');
    $f3->set('tmp',67);
    $f3->set('color','purple');
    $f3->set('redius',10);

    //define an array of fruits
    $f3->set('fruits', array('apple','orange','banana'));
    $f3 ->set('bookmarks', array('https://github.com/ ',
        'https://www.youtube.com/',
        'https://www.greenriver.edu/'));

    $f3->set('deserts',array('chocolate'=>"chocolate Moose",'vanilla'=>"Vanilla custard",'strawberry'=>"Strawberry Shortcake ",));

    $view = new Template();
    echo $view->render("views/info.html");
});


$f3->run();