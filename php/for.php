<?php

 $items = array(
    'for',
    'foreach',
    'while',
    'do-while'
 );

 echo 'PHP Supports ' . count($items) . ' types of loops.';

 $li = '';

 for($i=0; $i<count($items); $i++){
    $li .= "<li>{$items[$i]}</li>";
 }

 echo "<ul>{$li}</ul>";