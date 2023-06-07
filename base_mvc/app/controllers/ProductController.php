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
    public function addProduct() {
        return $this->render('product.add');
    }
    public function postProduct() {
//        echo 123;
        // khi người dùng kích vào nút
        if(isset($_POST['nut'])) {
            //validate
            //tạo ra 1 mảng lỗi error
            $errors = [];
            // nếu như bỏ trống tên SP
            if (empty($_POST['ten_sp'])) {
                $errors[] = "Bạn không được để trống tên sản phẩm";
            }
            // nếu như bỏ trống đơn giá
            if (empty($_POST['don_gia'])) {
                $errors[] = "Bạn không được bỏ trống đơn giá";
            }
            if (count($errors) > 0 ) { // có lỗi
                //push mảng lỗi này vào trong session
//                $_SESSION['errors'] = $errors;
//                // nhảy về trang add-product
//                header('location:'.BASE_URL.'add-product');die;
                redirect('errors',$errors,'add-product');
            } else {
                $result = $this->product->addProduct(NULL,$_POST['ten_sp'],$_POST['don_gia']);
                if ($result)  {
//                    $_SESSION['success'] = "Thêm sản phẩm thành công";
//                    header('location:'.BASE_URL.'add-product');die;
                 redirect('success',"Thêm sản phẩm thành công",'add-product');
                }
            }
        }
    }
}