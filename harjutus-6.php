<!DOCTYPE html>
<html>
<head> 
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Harjutus-6</title>
</head>
<body> 
	<h1>Loogika operatsioonid</h1>
	<h2>Tingimuslaused</h2>

	<?php 
	$a = 4;
	$b = 5;

	if ($a < $b) {
		echo "4 on väiksem kui 5";
	} elseif ($a = $b) {
		echo "4 ja 5 on võrdsed";
	} elseif ($a > $b) {
		echo "5 on suurem kui 4";
	}
	?>
	<br><br>

	<?php 
	$age = 5;
	$age_limit = 18;

	if ($age < $age_limit) {
		echo "Kahjuks olete liiga noor.Te peate olema $age_limit aastat vana. Tulge $age_limit - $age aasta pärast tagasi.";
	} elseif ($age > $age_limit) {
		echo "Olete piisavalt vana. Tulge edasi!";
	}
	elseif ($age = $age_limit) {
		echo "Olete piisavalt vana. Tulge edasi!";
	}
	?>
	<br><br>

	<?php 
	$esimene = 3;
	$teine = 3;
	$kolmas = 4;
	$neljas = 5;

	if (($esimene = $teine) && ($kolmas > $neljas)) {
		echo "Kui a on väiksem kui b ning b on suurem kui c, siis käivitatakse see koodiplokk.";
	}

	if (($esimene = $teine) || ($kolmas > $neljas)) {
		echo "Kui väheamlt üks komponentlausetest on tõene, siis käivitatakse see koodiplokk.";
	}
	?>
	<br><br>

	<?php  
	if (isset($nothing));
	echo "Ei ole deklareritud";
	?>
	<br>
	<?php 
	isset($nothing) == false;
	echo "nothing on deklareeritud";
	?>
	<br>
	<?php 
	!isset($nothing) == true;
	echo "nothing ei ole deklareeritud";
	?>
	<br><br>

	<h3>Switch</h3>

	<?php 
	$current_language = ru;
	switch ($current_language) {  //ei tööta
		case 'et':
		echo "Tere! Kuidas sul läheb?";
		break;
		echo "<br>";
		case 'ru':
		echo "Здравствуйте! Как вы делаете?";
		break;
		echo "<br>";
		case 'fi':
		echo "Hei! Miten menee??";
		break;
		echo "<br>";
		//default 'en':
		//echo "Hello! How are you doing?";
		//break;

	}
	?>

</body>
</html> 