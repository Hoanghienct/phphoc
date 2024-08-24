<?php
class Pheptinh{
    public $kq;
    public function cong($a,$b){
        $this->kq=$a+$b;
        return $this-> kq;
    }
    public function tru($a,$b){
        $this->kq=$a-$b;
        return $this-> kq;
    }
    public function nhan($a,$b){
        $this->kq=$a*$b;
        return $this-> kq;
    }
    public function chia($a,$b){
        $this->kq=$a/$b;
        return $this-> kq;
    }
    public function getkq(){
        echo $this->kq;
    }
}
?>