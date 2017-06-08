<?php 
$id = $_GET['id'];
echo $id;

$host = 'localhost';
$dbname = 'sisfonews';
$username = 'root';
$password = 'aqsukapb';
$db = '';


try {
    $db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $exception){
    die("Connection error: " . $exception->getMessage());
}

try {
	$stmt = $db->prepare("SELECT * FROM berita WHERE id_berita=:id");
	$stmt->bindparam(":id",$id);
	$stmt->execute();
	$data = $stmt->fetch();
}
catch(PDOException $e) {
	echo $e->getMessage(); 
}

try {
	$stmt2 = $db->prepare("SELECT * FROM kategori");
	$stmt2->execute();
	$data2 = $stmt2->fetchAll();
}
catch(PDOException $e) {
	echo $e->getMessage(); 
}


 ?>
 <form action="ubahberita.php?id=<?php echo $id ?>" method="POST">
 	<label for="judul">Judul</label><br>
	<input type="text" name="judul" value="<?php echo $data['judul']; ?>"> <br>
	<label for="isi">Isi</label> <br>
	<textarea id="isi" cols="40" rows="10" name="isi"><?php echo $data['isi']; ?></textarea> <br>
	<label for="kategori">Kategori</label>
	<select name="kategori" id="kategori">
	<?php foreach ($data2 as $kat): ?>
		<option value="<?php echo $kat ['id_kategori'] ?>"
		<?php  
		if($kat['id_kategori']==$data['kategori_id']) echo "selected";
		?>
		><?php echo $kat ['nama_kategori'] ?>
		</option>
	<?php endforeach ?>
	</select> <br>	
	<input type="submit" value="Submit">

 </form>