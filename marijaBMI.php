<!dogtype html>
<head>
<title> BMI calculator</title>
</head>

<body style="background:#80BFFF">
<h1><span style="color:#A80000 ">Izracunajte </span></h1>
<div id="main">
<form  type="submit" method="post">

<b>Pol : </br> </b>
<input type="radio" name="pol" value="1" checked="yes" /> Muški   
<input type="radio" name="pol" value="2" /> Ženski  </br></br>
Godina starosti <br/><br/><input type="text" name="godine"class="forma" id="godine"> </br></br>
Cm <i>(visina)</i> <br/><br/><input type="text" name="visina"class="forma" id="visina"> <br/></br>
Kg <i>(masa)</i> <br/><br/><input type="text" name="masa"class="forma" id="masa"> <br/></br>



<input type="image" class="image" class="form2" alt="Izracunati">
</form>

<?php
if ( $_POST ) {
$vis=$_POST['visina'] ;
$tez=$_POST['masa'];
$god=$_POST['godine'];
$pol_rad=$_POST['pol'];
        if ($vis<=0 or $tez<=0 or $god<=0 or strlen($vis)==0 or strlen($tez)==0 or strlen($god)==0){
                echo 'Podaci nisu lepo uneti </br>';
                $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
        
                die();
}
        else{
                        $vis2=($vis/100)*($vis/100);
                        if($pol_rad=='1') {
		
                                $jedan=$vis-100;
                                $dva=($vis-150)/4;
                                $tri=($god-20)/2.5;
                                $ide=$jedan-$dva+$tri;
                                $rezultat=$tez/$vis2;
                                }
                        if ($pol_rad=='2') {
		
                                $jedan=$vis-100;
                                $dva=($vis-150)/2.5;
                                $tri=($god-20)/2.5;
                                $ide=$jedan-$dva+$tri;
                                $rezultat=$tez/$vis2;
	
}
                if ($rezultat<18.5) {
                echo ' vas <span style="color:#A80000 ">BMI</span> je: ' ,number_format($rezultat, 2),'<br/>',' <b><span style="color:#817171 ">Neuhranjenost</span></b></br>'; 

}
                if($rezultat>18.5 and $rezultat<24.9) {
                echo ' vas <span style="color:#A80000 ">BMI</span> je: ' ,number_format($rezultat, 2),'</br>','  <b><span style="color:#1EA514 ">Normalna tezina</span></b></br>';
}
                if($rezultat<29.9 and $rezultat>25) {
                echo ' vas <span style="color:#A80000 ">BMI</span> je: ' ,number_format($rezultat, 2),'</br>','  <b><span style="color:#EC9B20 ">Povecana težina</span></b></br>';
}
                if ($rezultat>30){
                echo ' vas <span style="color:#A80000 ">BMI</span> je: ' ,number_format($rezultat, 2),'</br>','  <b><span style="color:#EC3B20 ">Gojaznost</span></b></br>';
}
echo '<u>idealna tezina:</u> ', $ide;
$url = htmlspecialchars($_SERVER['HTTP_REFERER']);
echo '</br>';

die();

}

}
?>
</div>
</body>

</HTML>
