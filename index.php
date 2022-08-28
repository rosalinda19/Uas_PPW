<?php
class Mobil
{
    private $pemilik;
    var $merk;
    var $warna;
    var $jenis;

    function nyalakan_mobil(){
        return "mobil dinyalakan";
    }

    function jalankan_mobil(){
        return "mobil dijalankan";
    }

}
?>

<?php
//include 'Mobil.php';

$mobil= new Mobil();
$mobil->pemilik= "budi";
$mobilr->warna= "kuning";

echo "pemilik : ". $mobil->pemilik."<br>";
echo "warna : ". $mobilr->warna."<br>"
?>