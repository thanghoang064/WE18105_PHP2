<?php
//hàm là gì ?
// hàm là function
//
$n = 5;
if ($n % 2 == 0) {
    echo "Đây là số chẵn";
} else {
    echo "Đây là số lẻ ";
}
$b = 8;
$c = 9;
// hàm được dùng để gom code mà có tính tái sử dụng cao
//  hàm có 2 loại  :
// - có trả về //có return là hàm có trả về
// - không trả về // khum có return
//demo hàm không trả về
function ktraSoChan($a) { // tất cả những biến trong khe ngoặc là tham số
    if ($a % 2 == 0) {
        echo "Đây là số chẵn";
    } else {
        echo "Đây là số lẻ";
    }
}
ktraSoChan($b);
ktraSoChan($c);
function ktraSoChanCoTraVe($a) {
    if ($a % 2 == 0) {
        return 1;//trả là 1 là số chẵn
    } else {
        return  0; // Trả về 0 là số lẻ
    }
}
echo ktraSoChanCoTraVe($b);
//xây dựng 1 hàm thông tin sinh viên gồm những tham số truyền vào :
//$hoten,$namsinh,$gioitinh,$email,$diachi
// hiển thị ra thông tin sinh viên đầy đủ theo tham số truyền vào
//Ông  Nguyên Văn A  năm nay 27 tuổi có email là ... và địa chỉ là ...
// xây dựng hàm có trả về hoặc không trả về
// tính tuổi = năm hiện tại - năm sinh (date('Y'))
?>