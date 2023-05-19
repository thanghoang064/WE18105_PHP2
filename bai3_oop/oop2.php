<?php
class ConNguoi{
    public $chan;
    public $tay;
    public $mat;
    public $mui;
    public function setChan($chan) {
        $this->chan = $chan;
    }
    public function setTay($tay) {
        $this->tay = $tay;
    }
    public function an() {
        echo "ăn bằng mồm";
    }
}
class NguoiLon extends ConNguoi {

    public $longNach;

    public function di() {
        echo "đi bằng". $this->chan."Chân";
    }

    public function noi() {

    }
}
class TreCon extends ConNguoi {


    public function bo() {
        echo "Trẻ con bò bằng".$this->tay." ".$this->chan;
    }

}
// khởi tạo đối tượng
$nl = new NguoiLon();
$nl->setChan(2);
$nl->di();
$nl->an();
$tc = new TreCon();
$tc->setTay(2);
$tc->setChan(2);
$tc->bo();
// tạo ra hàm bò hiển thị trẻ con bò bằng 2 tay và 2 chân
//tạo 1 class ConNguoi gồm các thuộc tính :hoten,diachi,namsinh,email,sdt
// tạo phương thức set cho các thuộc tính trên
// tạo phương thức tinhtuoi = năm hiện tại - năm sinh (có trả về)
// tạo phương thức hiển thị thông tin :hoten,diachi,tuoi,email,sdt
//tạo 1 class HocSinh từ class ConNguoi gồm các thuộc tính :diemToan,diemLy,diemHoa
// tạo phương thức set cho các thuộc tính trên
//tạo phương thức tính điểm tb = (Toán + lý+ hóa)/3
//tạo phương thức hiển thị thông tin sinh viên hiển thị ra các thông tin
// hoten,diachi,tuoi,email,sdt,điểm TB
//tạo 1 class GiangVien kế thừa từ class ConNguoi gồm các thuộc tính:luongCB,soGioDay
//// tạo phương thức set cho các thuộc tính trên
/// tạo phương thức tính tổng lương = luongCB *soGioDay
/// //tạo phương thức hiển thị thông tin giảng viên hiển thị ra các thông tin
//// hoten,diachi,tuoi,email,sdt,tổng lương
///


?>