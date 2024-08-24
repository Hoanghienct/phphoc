<?php
class Student {
    private $name, $diemtoan, $diemhoa, $diemly;

    // Constructor (khởi tạo)
    function __construct($name, $diemtoan, $diemhoa, $diemly) {
        $this->name = $name;
        $this->diemtoan = $diemtoan;
        $this->diemly = $diemly;
        $this->diemhoa = $diemhoa;
    }

    // Hàm tính tổng điểm
    function Tongdiem() {
        return $this->diemtoan + $this->diemly + $this->diemhoa;
    }
}
