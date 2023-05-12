<?php
// file index sẽ điều hướng người dùng vào controller tương ứng
//echo $_GET['url']; // $GET sẽ lấy từ trên thanh url
//die;
$url = isset($_GET['url']) == true ? $_GET['url'] :"/" ;
// sử dụng switch case để điều hướng url
// case = add-produdct điều hướng về hàm addProduct
switch ($url) {
    case '/':
        //điều hướng về controller sản phẩm
        require_once 'controllers/ProductController.php';
        echo listProduct(); // gọi hàm trong controller Product
    case 'add-product':
        //điều hướng về controller thêm sản phẩm
        require_once 'controllers/ProductController.php';
        echo addProduct();
    break;
}
