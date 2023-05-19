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


?>