<?php 

/**
* 
*/

include_once 'Model.php';
class Buku extends Model
{
	
	public function ambilBuku()
	{
		$query = $this->db->prepare("SELECT * FROM buku");
    	$query->execute();
    	$data = $query->fetchAll();

    	return $data;
	}

}

