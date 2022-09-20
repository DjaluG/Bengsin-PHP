<?php
class Shell {
  protected $ppn;
  private  $Super,
           $Vpower,
           $Vdiesel,
           $Vnitro;

  public $jumlah;
  public $jenis;

   public function __constructor() {
        $this->ppn = 0.1;
    }


    public function setHarga($tipe1, $tipe2, $tipe3, $tipe4){
        $this->Super = $tipe1;
        $this->Vpower = $tipe2;
        $this->Vdiesel = $tipe3;
        $this->Vnitro = $tipe4;
    }

    public function getHarga(){
        $data["Super"] = $this->Super;
        $data["Vpower"] = $this->Vpower;
        $data["Vdiesel"] = $this->Vdiesel;
        $data["Vnitro"] = $this->Vnitro;
        return $data;
    }
}

class Beli extends Shell{
    public function hargaBeli() {
        $dataHarga = $this->getHarga();
        $hargaBeli = $this->jumlah * $dataHarga[$this->jenis];
        $hargaPPN = $hargaBeli * $this->ppn;
        $hargaBayar = $hargaBeli + $hargaPPN;
        return $hargaBayar;
    }

    public function cetakPembelian() {
        echo "<center>";
        echo "================================= </br>";
        echo "Anda Membeli Bengsin Tipe " . $this->jenis . "</br>";
        echo "Dengan Jumlah : " . $this->jumlah . " Liter </br>";
        echo "Total Rp. " . $this->hargaBeli() . "</br>";
        echo "================================= </br>";
        echo "</center>";
    }
}
?>