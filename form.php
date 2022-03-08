<?php


if($_SERVER["REQUEST_METHOD"] =="POST"){


    $nama = $_POST['nama'];
    $tanggalLahir = new DateTime($_POST['tanggal']);
    $today = new DateTime('Today');

    $y =$today->diff($tanggalLahir)->y;
    $m = $today->diff($tanggalLahir)->m;
    $d = $today->diff($tanggalLahir)->d;

 
    $tanggal  = $tanggalLahir->format('d');
    $blnzodiak  = $tanggalLahir->format('F');
    $zodiak = "";

    
    if (($tanggal>=20 && $blnzodiak=="March")||($tanggal<=19 && $blnzodiak=="April")){
        $zodiak= "Aries";
    }else if(($tanggal>20 && $blnzodiak=="April" )||($tanggal<20 && $blnzodiak=="May")){
        $zodiak = "Taurus";
    }else if(($tanggal>21 && $blnzodiak=="May" )||($tanggal<20 && $blnzodiak=="June")){
        $zodiak = "Gemini";
    }else if(($tanggal>21 && $blnzodiak=="June" )||($tanggal<22 && $blnzodiak=="July")){
        $zodiak = "Cancer";
    }else if(($tanggal>23 && $blnzodiak=="July")||($tanggal<23 && $blnzodiak=="August")){
        $zodiak = "Leo";
    }else if(($tanggal>23 && $blnzodiak=="August")||($tanggal<22 && $blnzodiak=="September")){
        $zodiak = "Virgo";
    }else if(($tanggal>23 && $blnzodiak=="September")||($tanggal<22 && $blnzodiak=="October")){
        $zodiak = "Libra";
    }else if(($tanggal>23 && $blnzodiak=="October")||($tanggal<21 && $blnzodiak=="November")){
        $zodiak = "Scorpio";
    }else if(($tanggal>22 && $blnzodiak=="November")||($tanggal<21 && $blnzodiak=="December")){
        $zodiak = "Sagitarius";
    }else if(($tanggal>22 && $blnzodiak=="December")||($tanggal<19 && $blnzodiak=="January")){
        $zodiak = "Capricorns";
    }else if(($tanggal>20 && $blnzodiak=="January")||($tanggal<18 && $blnzodiak=="February")){
        $zodiak = "Aquarius";
    }else if(($tanggal>19 && $blnzodiak=="February")||($tanggal<19 && $blnzodiak=="March")){
        $zodiak = "Pisces";
    }
    

    
    echo "Usia ".$nama. " ". $y." TAHUN ".$m." BULAN ". $d." DAY DENGAN ZODIAC ". $zodiak ;
    
}


?>