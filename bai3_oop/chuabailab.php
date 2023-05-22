<?php
class ConNguoi {
    public $hoTen;
    public $diaChi;
    public $namSinh;
    public $email;
    public $sdt;
    // đây là contruc  ở bên phía thằng cha
    public function __construct($hoTen,$diaChi,$namSinh,$email,$sdt) {
        $this->hoTen = $hoTen;
        $this->diaChi = $diaChi;
        $this->namSinh = $namSinh;
        $this->email = $email;
        $this->sdt = $sdt;
    }
    public function setHoTen($hoTen) {
        $this->hoTen = $hoTen;
    }
    public function setDiaChi($diaChi) {
        $this->diaChi = $diaChi;
    }
    public function setNamSinh($namSinh) {
        $this->namSinh = $namSinh;
    }
    public function tinhTuoi() {
        return date('Y') - $this->namSinh;
    }
    public function hienThiThongTin() {
        echo $this->hoTen."-".$this->namSinh."-".$this->tinhTuoi()."-".$this->email."-".$this->sdt;
    }
 }
class HocSinh extends ConNguoi {
    public $diemToan;
    public $diemLy;
    public $diemHoa;
    //khởi tạo ở tk con
    public function __construct($hoTen,$diaChi,$namSinh,$email,$sdt,$diemToan,$diemLy,$diemHoa) {
        // gọi hàm khởi tạo của cha
        parent::__construct($hoTen,$diaChi,$namSinh,$email,$sdt);
        $this->diemToan = $diemToan;
        $this->diemLy = $diemLy;
        $this->diemHoa = $diemHoa;
    }

    public function setToan($diemToan) {
        $this->diemToan = $diemToan;

    }
    public function setLy($diemLy) {
        $this->diemLy = $diemLy;

    }
    public function setHoa($diemHoa) {
        $this->diemHoa = $diemHoa;
    }
    public function tinhTB() {
        return ($this->diemToan + $this->diemLy + $this->diemHoa)/3;
    }
    public function hienThongTinSV() {
        $this->hienThiThongTin();
        echo "-".$this->tinhTB();
    }
}
$hs = new HocSinh("aaa","bbb",2003,"thanghhoangabc","0291922",7,8,9);
//$hs->setHoTen("Nguyen van a");
//$hs->setNamSinh(1998);
//$hs->setDiaChi("12321");
//$hs->setToan(8);
//$hs->setLy(9);
//$hs->setHoa(10);
$hs->hienThongTinSV();
//sử dụng parent contruct để thực hiện với giảng  viên
?>
