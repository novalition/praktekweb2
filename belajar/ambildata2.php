<?php 
$host = "localhost";
$dbname = "sisfonews";
$username = "root";
$password = "aqsukapb";
$db = "";

try {
$db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $exception){
die("Connection error: ".$exception->getMessage());
} //membangun koneksi

$query = $db->prepare("SELECT * FROM berita");
$query->execute();
$data = $query->fetchAll();
//mengambil data
?> 


<table border="1px">
<tr>
	<th>Id</th>
	<th>Tanggal</th>
	<th>Judul</th>
</tr>
<?php foreach ($data as $ib) { ?>
<tr>
	<td><?php echo $ib['id_berita']?></td>
	<td><?php echo $ib['tanggal']?></td>
	<td><?php echo $ib['judul']?></td>
</tr>


<?php } ?>
</table>