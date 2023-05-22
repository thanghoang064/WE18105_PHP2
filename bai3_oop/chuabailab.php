<?php
class ConNguoi {
    public $hoTen;
    public $diaChi;
    public $namSinh;
    public $email;
    public $sdt;
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
$hs = new HocSinh();
$hs->setHoTen("Nguyen van a");
$hs->setNamSinh(1998);
$hs->setDiaChi("12321");
$hs->setToan(8);
$hs->setLy(9);
$hs->setHoa(10);
$hs->hienThongTinSV();
?>
