<?php
/**
 * Created by PhpStorm.
 * User: jonathan
 * Date: 2018/7/14
 * Time: 下午11:43
 */

    echo "<p>git test</p>";

    $t = trim(__DIR__.'/');
    echo  "</br>";
    echo "<p>$t</p>";
    echo  "</br>";
    $root = $_SERVER['SCRIPT_NAME'];
    $request = $_SERVER['REQUEST_URI'];
    echo "<p>$root</p>";
    echo  "</br>";
    echo "<p>$request</p>";

?>