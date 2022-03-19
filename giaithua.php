<?php
function giaithua(int $n) {
	if($n == 1) return 1;
	else return $n*giaithua($n-1);
}
echo "<u>Định nghĩa: </u>Trong toán học, giai thừa là một toán 
tử một ngôi trên tập hợp các số tự nhiên. 
Cho n là một số tự nhiên dương, n giai thừa(ký hiệu n!) là tích 
của n số tự nhiên dương đầu tiên.<br>Giai thua cua 10 la: ".giaithua(10);
?>