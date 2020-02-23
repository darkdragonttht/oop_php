<?php
// Lớp Xe
class Xe
{
    private $loaixe;

    function getLoaixe()
    {
        return $this->loaixe;
    }

    function setLoaixe($tenxe)
    {
        $this->loaixe = $tenxe;
    }
}

// Khởi tạo một lớp đối tượng xe
$xe = new Xe();

// Gán giá trị cho thuộc tính loại xe
$xe->setLoaixe('Wave S');

// Lấy giá trị thuộc tính loại xe
echo $xe->getLoaixe();  // kết quả xuất ra Wave S

// Lớp Xe
class Xes
{
    private $loaixe;

    var $tenxe;

    function getLoaixe()
    {
        return $this->loaixe;
    }

    function setLoaixe($loaixe)
    {
        $this->loaixe = $loaixe;
    }

    private function xoaLoaixe()
    {
        echo 'Hàm xóa loại xe';
    }
}

// Kế thừa từ lớp xe
class XeHonda extends Xes
{
    function hienThiThongTin()
    {
        // lệnh này đúng
        echo $this->tenxe;

        // lệnh này sai vì thuộc tính loaixe là
        // private trong lớp cha
        echo $this->loaixe;

        // lệnh này đúng
        $this->setLoaixe('Wave S');

        // lệnh này đúng
        echo $this->getLoaixe();

        /// Lệnh này sai vì hàm xoaLoaixe là
        // private trong lớp cha
        $this->xoaLoaixe();
    }
}

// -------------------
// Chương trình chính//
// -------------------

// Khởi Tạo mới lớp xe hon da
$xehonda = new XeHonda();

// Gọi hàm hienThiThongTin trong lớp XeHonda
// Các bạn kiểm tra trong hàm này để xem các
// lỗi mà tôi đã ghi chú
$xehonda->hienThiThongTin();

// Lệnh này đúng vì lớp XeHonda kế thừa lớp Xe nên
// nó được kế thừa các thuộc tính và hàm của lớp cha
$xehonda->setLoaixe('Suzuki');
echo $xehonda->getLoaixe();

// Lệnh này sai vì hàm xoaLoaixe trong lớp Xe là
// private nên lớp XeHonda không được kế thừa
$xehonda->xoaLoaixe();
?>