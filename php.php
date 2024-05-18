<?php
$d_kullanici_adi = 'g201210590@sakarya.edu.tr';
$d_sifre = 'g201210590';
if (isset($_POST['kullanici_adi']) && isset($_POST['sifre'])) {
    $kullanici_adi = $_POST['kullanici_adi'];
    $sifre = $_POST['sifre'];
    if ($kullanici_adi == $d_kullanici_adi && $sifre == $d_sifre) {
        echo "Hoşgeldiniz b1812100001";
    } else {
        echo "<script>alert('E-posta adresi veya şifre yanlış')</script>";
        header("Location: giris.html");
        exit; 
    }
} else {
    echo "<script>alert('E-posta adresi veya şifre bulunmamaktadır')</script>";
    header("Location: giris.html");
}
?>
