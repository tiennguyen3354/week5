<?php
/*
 * Tien Nguyen
 * January 2024
 * https://tiennguyen3354.greenriverdev.com/328/diner/
 * This is my CONTROLLER for the week 5 application
 */

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Require the autoload file
require_once ('vendor/autoload.php');

//Instantiate Fat Free Framework - F3
// Just like in JAVA you instantiate a class.
//Base is a class from the Fat Free Framework
$f3 = Base::instance(); //Object

// Define a default route
// route is a method of the Base class
$f3->route('GET /', function ($f3) {
    //add key-pair value
    //creating an array inside the function for the page.
    $f3->set('username', 'tnguyen');
    $f3->set('password', sha1('password001'));
    $f3->set('title', 'Working with Templates');
    $f3->set('temp', 67 );
    $f3->set('color', 'Purple');
    $f3->set("vegetables", array("carrot", "eggplant", "brocolli", "potato", "bellpepper"));



    //Display a views page
    $view = new Template();
    echo $view->render('views/info.html');
});

// Run Fat-Free
    $f3 ->run(); //Java will use "."
// example f3.run();