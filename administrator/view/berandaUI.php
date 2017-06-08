<?php 

require_once 'view.php';
/**
* 
*/
class BerandaUI extends View
{
	
	public function tampilLengkap()
	{
		include_once 'pages/beranda.php';
		$this->end();
	}
}



 ?>