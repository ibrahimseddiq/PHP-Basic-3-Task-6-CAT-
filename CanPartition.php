<?php
function canPartition($arr) {
    for($i = 0; $i < count($arr); $i++) {
        if(array_product($arr) / $arr[$i] == $arr[$i])
            return true;
    }
    return false;
}

var_dump(canPartition([2, 8, 4, 1]));
var_dump(canPartition([-1, -10, 1, -2, 20]));
var_dump(canPartition([-1, -20, 5, -1, -2, 2]));