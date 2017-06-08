<?php 

require_once 'view.php';
/**
* 
*/
class BeritaUI extends View
{
	
	public function tampilBerita()
	{
		include_once 'model/berita.php';
		$brt = new Berita();
		$isi_berita = $brt->ambilBerita();

		include_once 'pages/listberita.php';
		$this->end();
	}

	public function tampilFormBerita()
	{
		include_once 'controller/beritamanager.php';

		$bm = new BeritaManager();
		$daftar_kategori = $bm->getDaftarKategori();

		include_once 'pages/formberita.php';
		$this->end();

	}

	public function inputBerita()
	{
		include_once 'controller/beritamanager.php';
		$bm = new BeritaManager();
		$pesan = $bm->setBerita();

		include_once 'pages/pesansukses.php';
		$this->end();
	}
	public function tampilFormEdit()
	{

	}
	public function aksiUbahBerita()
	{
		
	}
}



 ?>