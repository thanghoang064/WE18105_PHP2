<?php
//xây dựng 1 class hay gọi là 1 khuôn mẫu cho nhiều đối tượng SinhVien
class SinhVien {
  // khai báo thuộc tính tức là khai báo biến
    public $maSV;
    public $tenSV;
    public $namSinh;
    //tạo ra 1 phương thức set Giá trị
    // hàm khởi tạo (1 dạng magic function)
    public function __construct($maSV,$tenSV,$namSinh) {
        $this->maSV = $maSV;
        $this->tenSV = $tenSV;
        $this->namSinh = $namSinh;
    }
    public function setMaSV($maSV) {
        $this->maSV = $maSV;
    }
    public function setTenSV($tenSV) {
        $this->tenSV = $tenSV;
    }
    public function setNamSinh($namSinh) {
        $this->namSinh = $namSinh;
    }
    public function tinhTuoi() {
        return date('Y') - $this->namSinh;
    }
    //khai báo phương thức tức là khai hàm
    public function hienThiThongTinSV() {
        echo $this->maSV."-".$this->tenSV."-".$this->namSinh."-".$this->tinhTuoi();
    }
}
//Khởi tạo đối tượng tức là tạo ra 1 ông sinh viên (Cứ khởi tạo là phải có new)
$sv1 = new SinhVien("PH1111","NVA",2003);
$sv1->setMaSV("PH12345");
$sv1->hienThiThongTinSV();
//tạo 1 hàm tính tuổi có trả về = năm hiện tại - năm sinh sau đấy hiển thị thông tin tuổi sinh viên
?>