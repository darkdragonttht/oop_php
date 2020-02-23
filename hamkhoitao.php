|<?php
class SinhVien
{
    function SinhVien() {
        echo 'Lớp Sinh Viên vừa được khởi tạo</br>';
    }
}

// khởi tạo lớp SinhVien
$sinhvien = new SinhVien();

class SinhVien2
{
    function __construct() {
        echo 'Lớp Sinh Viên vừa được khởi tạo</br>';
    }
}

// khởi tạo lớp SinhVien
$sinhvien2 = new SinhVien2();

//khởi tạo trong kế thừa
class A {

    function __construct() {
        echo 'Lớp A được khởi tạo</br>';
    }
}

class B extends A {

//    function __construct() {
//        echo 'Lớp B được khởi tạo</br>';
//    }
}

$a = new B(); // Kết quả là Lớp B được khởi tạo

/*
 * Hủy khởi tạo
 */

// Lớp A
class C {

    function __construct() {
        echo 'Lớp C được khởi tạo <br/>';
    }

    function show()
    {
        echo 'Lớp D đang được sử dụng <br/>';
    }

    function __destruct() {
        echo 'Lớp C bị hủy  <br/>';
    }
}

// Chương trình
$a = new C();
$a->show();
?>