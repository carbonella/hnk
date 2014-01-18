<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once('application/libraries/REST_Controller.php');

class Rest extends REST_Controller {

	function product_get()
    {
	
    	$products = array(
			1 => array('id' => 1, 'name' => 'Aristochrate', 'price' => '5.2', 'type' => 1, 'image' => 'bucheron.png'),
			2 => array('id' => 2, 'name' => 'Chabon', 'price' => '5.2', 'type' => 1, 'image' => 'bucheron.png'),
			3 => array('id' => 3, 'name' => 'Bucheron', 'price' => '5.2', 'type' => 1, 'image' => 'bucheron.png'),
			4 => array('id' => 4, 'name' => 'French Fries', 'price' => '1.5', 'type' => 2, 'image' => 'bucheron.png'),
			5 => array('id' => 5, 'name' => 'Colesaw', 'price' => '1.5', 'type' => 2, 'image' => 'bucheron.png'),
			6 => array('id' => 6, 'name' => 'Orange juice', 'price' => '2', 'type' => 3, 'image' => 'bucheron.png'),
			7 => array('id' => 7, 'name' => 'Almond juice', 'price' => '2', 'type' => 3, 'image' => 'bucheron.png'),
			8 => array('id' => 8, 'name' => 'Citrouille juice', 'price' => '2', 'type' => 3, 'image' => 'bucheron.png'),
			9 => array('id' => 9, 'name' => 'Cookies', 'price' => '2', 'type' => 4, 'image' => 'bucheron.png'),
			
		);
		$this->response($products, 200); // 200 being the HTTP response code
		
    }


}
