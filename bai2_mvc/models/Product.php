<?php
require_once "models/db.php";
class Product
{
// xây dựng hàm truy vấn lấy danh sách product
   public function getProduct()
    {
        $db = new db();
        $sql = "select * from product";
        return $db->getData($sql); // không truyền giá trị false vào thì sẽ mặc định lấy true
    }

    public function deleteProduct()
    {
        $id = $_GET['id'];
        $sql = "delete from product where id = $id";
        getData($sql, false);
    }
}
// bài tập lấy điểm lab 1 + 2
// tạo 1 bảng customer gồm id,name,phone,age
// thực hiện làm chức năng thêm/sửa/xóa/danh sách bằng mô hình mvc đã được học
// thời gian chấm chấm cùng asm