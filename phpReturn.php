<?php
/**
 * Created by PhpStorm.
 * User: sampathkumar
 * Date: 6/10/20
 * Time: 6:12 PM
 */
function add($numA, $numB){
    $C = $numA + $numB;
    return $C;
}
$myNumber = 0;
echo "Before the function, myNumber = ". $myNumber ."<br />";
$myNumber = add(3, 2);
echo "After the function, myNumber = " . $myNumber ."<br />";
