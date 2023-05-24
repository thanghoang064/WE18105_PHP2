<?php
interface DiChuyen {
    function di();
    //không cần phải ghi abstract ở đằng trước nhưng auto là phương  thức trìu tượng
}
class ConCho implements DiChuyen {
        public function di()
        {
           echo "Con chó sẽ đi bằng 4 chân";
        }
}
class ConNguoi implements DiChuyen {
    public function di()
    {
        echo "Con nguoi đi bằng 2 chân";
    }
}
//Sự khác nhau giữa abstract và interface
// abstract là 1 class còn interface ko phải là class
// interface chỉ có duy nhất phương thức trìu tượng và không có thuộc tính và
// phương thức bình thường
//interface và abstract đều là bản thiết kế chung cho hệ thống phần mềm
// nhưng interface là bản thiết kế cho các class có chung hành động
// abtract là bản thiết kế cho các class có cùng bản chất
?>