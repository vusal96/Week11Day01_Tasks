<?php
class Telebe {
 
  public $ad;
  public $soyad;
 
  public function qarsila()
  {
      
    echo "Salam, " . $this->ad . " " . $this->soyad . "!";
    return $this;
  }
 

  public function qeydiyyataAl()
  {

    echo "Sizin müracietiniz qeyde alındı ";
    return $this;

  }
 

  public function melumatlandir()
  {
    
    echo "ve size email gönderildi.Teşekkürler!";
    return $this;
  }
}
 
$telebe01 = new Telebe();
$telebe01->ad = "Memmed";
$telebe01->soyad = "Hesenov";
 

$telebe01->qarsila()->qeydiyyataAl()->melumatlandir();
/* 

 verilen Telebe class struktrunu ele qurmaq lazımdır ki,

$telebe01 -> qeydiyyataAl() -> melumatlandir();

 komandasını işe saldıgınız zaman ekrana 
   "Salam Memmed Hesenov!.Sizin müracietiniz qeyde alındı ve size email gönderildi.Teşekkürler" 
 ifadesi cıxsın

 */
?>