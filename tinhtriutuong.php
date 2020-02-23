<?php
    /*
     * Final trong php
     */
// Lớp Filnal
final class Person
{
    protected $ten;
    protected $cmnd;
    protected $namsinh;
    public function showInfo()
    {
        echo 'freetuts.net</br>';
    }
}

// Hàm này sẽ bị báo lỗi vì lớp SinhVien
// đã kế thừa một lớp Final, điều này là không thể
//class SinhVien extends Person { //không thể kế thừa lớp Person
//}

// Đoạn code này đúng vì lớp Final được
// sử dụng bình thường như các lớp khác
// chỉ có điều là không được kế thừa
$person = new Person;
$person->showInfo();

class Person2
{
    protected $ten;
    protected $cmnd;
    protected $namsinh;
    final public function showInfo()
    {
        echo 'freetuts.net2</br>';
    }
}

// Lớp này đúng vì lớp Person không phải
// là một lớp final
class SinhVien extends Person2 {

    // Hàm này sai vì hàm showInfo
    // là hàm final trong lớp Person
    // nên không thể Override lại
//    public function showInfo(){ //không thẻ dùng tính đa hình trong trường hợp này
//
//    }

    public function Go()
    {
        // Đoạn code này đúng vì hàm final được
        // sử dụng bình thường
        $this->showInfo();
    }
}

$person2 = new SinhVien;
$person2->showInfo();
?>