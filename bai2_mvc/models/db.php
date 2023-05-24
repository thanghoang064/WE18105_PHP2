<?php
// tạo kết nối từ project php sang mysql
require_once "env.php";
class db
{
   public function getConnect()
    {
        $connect = new PDO("mysql:host=" . DBHOST
            . ";dbname=" . DBNAME
            . ";charset=" . DBCHARSET,
            DBUSER,
            DBPASS
        );
        return $connect;
    }
// nếu getALL là true thì sẽ thực hiện truy vấn lấy  dữ liệu
// nếu getAll là false thì sẽ thực hiện truy vấn Thêm ,sửa ,xóa dữ liệu
   public function getData($query, $getAll = true)
    {
        $conn = $this->getConnect();

        $stmt = $conn->prepare($query);
        $stmt->execute();
        if ($getAll) {
            return $stmt->fetchAll();
        }

        return $stmt->fetch();
    }
}
?>