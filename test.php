<?php 

$a = array ('test' => 1, 'hello' => NULL, 'pie' => array('a' => 'apple'));

var_dump($a['pie']['a']);      //string(5) "apple"
var_dump(isset($a['pie']['a']));     // TRUE

?>