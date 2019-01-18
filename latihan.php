<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form method="post">
    Tinggi badan : <input type="text" name="tinggi" placeholder="Cm"><br>
    Berat badan : <input type="text" name="berat" placeholder="Kg"><br>
    jenis kelamin : <br>
    <input type="radio" name="jk" value="Perempuan">Perempuan<br>
    <input type="radio" name="jk" value="Laki-laki">Laki-laki<br>
    <input type="submit" name="submit" value="submit">
    </form>
</body>
</html>

<?php

if(isset($_POST['submit'])){
    $ti = $_POST['tinggi'];
    $be = $_POST['berat'];
    $jk = $_POST['jk'];
}
    class input{
        public $ting ,$ber , $kelamin;
            public function tampil_info($ting ,$ber ,$kelamin){
                echo "Tinggi : ".$ting."<br>";
                echo "Berat : ".$ber."<br>";
                echo "Jenis Kelamin : ".$kelamin."<br>";
            }
    public function BBI($ting, $ber, $kelamin){
        echo "Berdasarkan kategori";
        
        $gi = $ting/100;
        $hasil = $ber/($gi*$gi);

        if($kelamin=="Perempuan"){
            if($hasil<18){
                echo "under weight/kurus";
            }else 
            if($hasil >= 18 && $hasil < 25){
                echo "normal weight/normal";
            }else 
            if($hasil >= 25 && $hasil <27){
                echo "over weight/kegemukan";
            }else 
            if($hasil >= 27){
                echo "obesitas";
            }
        }
        if($kelamin=="Laki-laki"){
            if($hasil<17){
                echo "under weight/kurus";
            }else 
            if($hasil >= 17 && $hasil < 23){
                echo "normal weight/normal";
            }else 
            if($hasil >= 23 && $hasil < 27){
                echo "over weight/kegemukan";
            }else 
            if($hasil >= 27){
                echo "obesitas";
            }
        }
    }
}

    $d1 = new input;
    $d1->tampil_info($ti, $be, $jk);
    $d1->BBI($ti, $be, $jk);
?>