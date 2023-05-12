<?php
$a = 4; // a là số nguyên
$b = 5.5; //b là số thực
$c = "Hello";// c là chuỗi
$d = true; //d là boolean
//echo $c."---".$a;
//mảng Array
//mảng tuần tự
$mang =  array(5,6,7,8); // cách 1 khai báo được trên mọi phiên bản
$mang1 = [7,8,9,10]; // cách 2 //chạy được những phiên bản  PHP > 7.0
// duyệt mảng hiển thị ra những phần tử là số chẵn
// sử dụng 2 cách (Dùng for , dùng foreach )
//for($i = 0; $i < count($mang1) ; $i++){
//    if($mang1[$i] % 2 == 0) {
//        echo $mang[$i];
//
//    }
//}
//foreach ($mang as $m){
//    if($m % 2 == 0){
//        echo $m;
//    }
//}
//mảng liên hợp
$manglh = ["A"=>1,"B"=>2,"C"=>3,"D"=>4];
//echo $manglh["C"];
//echo $manglh["A"];
$sum = 0;
foreach ($manglh as $key=>$value) {
    echo $key."=>".$value."</br>"; // lấy được ra key của manglh
    $sum+= $value;
}
echo "Tổng là ".$sum;
$mangInfo = ["ten"=>"Nguyễn Văn A","tuoi"=>19,"email"=>"nguyenvana@gmail.com"];
// hiển thị thông tin mangInfo dưới dạng như sau :
$mangColor = ["red"=>"Màu đỏ","blue"=>"Xanh nước biển","green"=>"Xanh lá"];

?>
<table border="1">
    <?php foreach ($mangInfo as $key=>$value) { ?>
    <tr>
       <td>Tên</td>
       <td>Nguyễn Văn A</td>
    </tr>
    <?php } ?>

</table>
Màu sắc
<table border="1">
    <?php foreach ($mangColor as $key=>$value) { ?>
    <tr bgcolor="<?php echo $key; ?>">
        <td><?php echo $key; ?></td>
        <td><?php echo $value; ?></td>
    </tr>
    <?php }?>
</table>
