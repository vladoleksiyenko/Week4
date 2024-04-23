<?php

    // 328/Week4/index.php

    // Turn on error reporting
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    // Require the autoload file
    require_once ('vendor/autoload.php');

    // Instantiate the F3 Base class
    $f3 = Base::instance();

    // Define a default route
    // https://voleksiyenko.greenriverdev.com/328/week4/
    $f3->route('GET /', function($f3) {

        // Add data to the Fat-Free "hive"
        $f3->set('name', 'Vlad');
        $f3->set('lastinitial', 'O');
        $f3->set('age', 20);

        $fruits = array('apple', 'banana', 'orange');
        $f3->set('fruitList', $fruits);

        $cars = array('ford', 'bmw', 'toyota');
        $f3->set('carList', $cars);

        $students = array('101'=>'Mason', '102'=>'Tilak', '103'=>'Sage');
        $f3->set('studentList', $students);


        // Render a view page
        $view = new Template();
        echo $view->render('views/info.html');
    });

    $f3->run();
?>