<?php
namespace App\Controllers;
use App\Models\Product;
class ProductController extends BaseController {
    public $product; // tạo thuộc tính $product
    public function __construct() {
        $this->product = new Product();
    }
    public function index() {
        $products = $this->product->getProduct(); // đón giá trị từ model trả về
        return $this->render('product.index',compact('products'));
    }
    public function detail($id,$hihi) {
        echo $id."-".$hihi;
        die;
    }
}