<?php 
	$buah=array("pertama" => "Pepaya","kedua" => "Mangga","ketiga" => "Pisang","keempat" => "Jambu","kelima" => "Jengkol"); //Array satu dimensi
	$resep=array(
				array("buah"=>"Pepaya","banyak"=>"1","tambahan"=>"Kecap"),
				array("buah"=>"Mangga","banyak"=>"3","tambahan"=>"Susu"),
				array("buah"=>"Pisang","banyak"=>"5","tambahan"=>"Kapucino")
		); //Array multi dimensi

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Belajar Echo</title>
</head>
<body>
	<?php 
	foreach ($resep as $r) { ?>
		<h1>Cara Membuat Jus <?php echo $r ['buah']?></h1>
	<p>Campurkan buah <?php echo $r['buah'] ?> sebanyak <?php echo $r ['banyak'] ?> buah ditambahkan dengan <?php echo $r['tambahan'] ?> untuk memberi rasa.
	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
	 </p>
	<?php }
	 ?>
</body>
</html>