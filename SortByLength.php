<?php

function sortByLength($arr) {
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = $i + 1; $j < count($arr); $j++) {

            if (strlen($arr[$i]) > strlen($arr[$j])) {
                $temp = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $temp;
            }
        }
    }

    return $arr;
}

print_r(sortByLength(["Google", "Apple", "Microsoft"]));
print_r(sortByLength(["Leonardo", "Michelangelo", "Raphael", "Donatello"]));
print_r(sortByLength(["Google", "Apple", "Microsoft"]));
print_r(sortByLength(["Turing", "Einstein", "Jung"]));