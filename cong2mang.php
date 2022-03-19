<?php
$array1 = array(344,224,223,7737,9922,-828);
$array2 = array(-344,-324,123,773,-9922,828);
function cong2mang($array1,$array2){
    if(count($array1)==count($array2)){
        echo "2 mảng bằng nhau nên ta được tổng 2 mảng là:";
        $array = array_merge($array1,$array2);
        return array_sum($array);
    }
    else echo "2 mảng không bằng nhau";
}
echo cong2mang($array1,$array2);
?>