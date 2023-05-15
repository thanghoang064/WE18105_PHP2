<?php
require_once "models/Product.php";
function listProduct() {
    // gọi models
    $products = getProduct(); // trả về 1 mảng dữ liệu từ trên cơ sở dữ liệu
    include_once "views/product/listproduct.php";
//    return "Đây là danh sách sản phẩm";
}
function addProduct() {
    return "Đây là trang thêm sản phẩm";
}
function removeProduct() {
    deleteProduct();
    header("location: ?url=/");
}
?>