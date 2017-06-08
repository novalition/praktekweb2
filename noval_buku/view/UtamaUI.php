<?php 

require_once 'View.php';
/**
* 
*/
class UtamaUI extends View
{
	
	public function tampilkanBuku()
	{
		include_once 'model/Buku.php';
		$buku= new Buku();
		$isi_buku = $buku->ambilBuku();

		include_once 'pages/beranda.php';
		$this->end();
	}
}



 ?>