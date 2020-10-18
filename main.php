<?php

function getRandomNum()
    {
        $bytes = random_bytes(2);
        $rNum = hexdec(bin2hex($bytes));
        return $rNum;
    }


    $len = $_POST['length'];

    $arr = [];

    for($i = 0; $i < $len; $i++) {
        $rNum = getRandomNum();
        array_push($arr, $rNum);
    }

    $i = 0;

    while($i < $len) {
        echo $arr[$i]."<br>";
        $i++;
    }


?>