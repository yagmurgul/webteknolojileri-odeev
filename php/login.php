<?php

error_reporting(0);

if(isset($_POST['login'])){
    $kulAd="b211210555";
    $sifre="12345";
    $kullaniciAdi=$_POST["kullaniciAdi"];
    $parola=$_POST["parola"];
    if($kullaniciAdi!="" && $parola!=""){
        if($kullaniciAdi==$kulAd && $parola==$sifre){
            echo "Hoşgeldiniz s221210288 <br><hr>";
           
        }
        else{
            header("Location:../html/login.html");
        }
    }
    else{
        header("Location:../html/login.html");
    }
}
else {
    header("Location:../html/login.html");
}
?>
