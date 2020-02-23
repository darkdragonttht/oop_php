<?php
class dongVat
{
    var $mat = '';
    var $mui = '';
    var $mieng = '';
    var $chan = '';
    var $gioitinh = '';

    function an(){

    }

    function ngu(){

    }

    function chay(){

    }

    function lahet(){
        
    }
}

// Lớp Con
class conTrau extends dongVat {

    // Tất cả các thuộc tính khác đều kế thừa từ cha
    // nên không cần viết lại
    // chỉ riêng thuộc tính này là cha ko có nên ta phải khai báo
    var $sung = '';

    // Tất cả các hàm, phương thức đều kế thừa từ cha
    // nên không cần viết lại
}
?>