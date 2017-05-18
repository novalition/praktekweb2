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
	 </p>
	<?php }
	 ?>
</body>
</html>