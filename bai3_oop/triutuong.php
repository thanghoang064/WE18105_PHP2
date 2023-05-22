<?php
//khai báo 1 class trìu tượng DongVat
abstract class DongVat {
    // khai báo phương thức trìu tượng
    abstract function di();
}
class ConCho extends DongVat {
    public function di()
    {
        echo "con chó đi bằng 4 chân";
    }
}
class ConNguoi extends DongVat {
    public function di()
    {
       echo "con người đi bằng 2 chân";
    }
}

$cc = new ConCho();
$cc->di();