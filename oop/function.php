<?php

//helper function here

function implode_with_key($assoc, $inglue = '>', $outglue = ',') {
    $return = '';
 
    foreach ($assoc as $tk => $tv) {
        $return .= $outglue . $tk . $inglue . $tv;
    }
 
    return substr($return, strlen($outglue));
}

?>