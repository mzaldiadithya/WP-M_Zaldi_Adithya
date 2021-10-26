<?php

class M_pertemuan03 extends CI_Model
{
  public $nilai1, $nilai2, $hasil;

  public function jumlah()
  {
    $this->nilai1 = 2;
    $this->nilai2 = 3;
    $this->hasil = $this->nilai1 + $this->nilai2;

    return $this->hasil;
  }
}