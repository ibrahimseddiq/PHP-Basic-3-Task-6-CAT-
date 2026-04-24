<?php
function consecutive_combo($arr1, $arr2) {
    $merged_arrays = array_merge($arr1, $arr2); // Supposed that ther is no Duplicated Numbers..
    sort($merged_arrays);
    for($i = 0; $i < count($merged_arrays) - 1; $i++) {
        if($merged_arrays[$i] + 1 != $merged_arrays[$i + 1])
            return false;
    }
    return true;
}
var_dump(consecutive_combo([7, 4, 5, 1], [2, 3, 6]));
var_dump(consecutive_combo([1, 4, 6, 5], [2, 7, 8, 9]));
var_dump(consecutive_combo([1, 4, 5, 6], [2, 3, 7, 8, 10]));
var_dump(consecutive_combo([44, 46], [45]));