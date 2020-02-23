<?php
/*
 * lớp, thuộc tính, phương thức của đối tượng
 */
/*
 * khai báo lớp trong hướng đối tượng
 */
class sinhVien
{
    /*
     * thuộc tính cho lớp
     */
    var $sinhvien;

    /*
     * phương thức của lớp
     */
    function tenPhuongThuc()
    {

    }

    function khoaHoc($tenkhoahoc)
    {

    }
}

/*
 * Khởi tạo lớp sinh viên mới
 */
$khoa = new sinhVien();
$lop = new sinhVien();

/*
 * truy xuất đến các thuộc tính của các đối tượng
 */

//gán giá trị cho các thuộc tính
$khoa->mon = 'Toán';
//truy xuất ra màn hình
echo $khoa->mon.'</br>';

/*
 * gọi các phương thức của đối tượng
 */

class choiCo
{
    //các phương thức
    function coTuong($quanCo)
    {
        echo 'đây là quân '.$quanCo.'</br>';
    }
}

//khởi tạo lớp phương thức mới
$quan = new choiCo();
//gọi tên hàm
$quan->coTuong('tướng');

/*
 * hàm trong đối tượng gọi đến các thuộc tính của chính mình bằng $this->tenthuoctinh
 */

class nghiLe
{
    var $le = 'hôm nay được nghỉ nhân ngày 2/9';
    function ngayLe()
    {
        echo $this->le.'</br>';
    }
}

// Khởi tạo lớp động vật mới
$result = new nghiLe();

// Gọi đến hàm ăn
$result->ngayLe();

?>