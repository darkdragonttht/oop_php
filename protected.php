<?php
// Lớp Xe
class Xe
{
    protected $loaixe;
}

// Kế thừa từ lớp xe
class XeHonda extends Xe
{
    function hienThiThongTin()
    {
        // Lệnh này đúng vì loaixe đang ở
        // mức protected nên nó được kế thừa
        $this->loaixe = 'Wave S';
    }
    protected function suaChuaXe()
    {
        $this->loaixe = 'Wave S';
    }
}

// ------------------//
// Chuong Trình Chính//
// ------------------//

$honda = new XeHonda();

// Lệnh này sai vì loaixe đang
// ở mức protected nên ở bên ngoài lớp
// không được truy xuất vào
$honda->loaixe = 'Wave Tàu';

// Lệnh này đúng
$honda->hienThiThongTin();

// Lệnh này sai vì: function suaChuaXe đang
// ở mức protected nên ko thể truy xuất
// từ ngoài lớp XeHonDa
$honda->suaChuaXe();
?>