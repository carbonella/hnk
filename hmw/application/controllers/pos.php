<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pos extends CI_Controller {

	public function index()
	{

		$this->load->library('pos_lib');		
		$data_xml = $this->pos_lib->query();
		//echo $data_xml;
		$xml_object = new SimpleXMLElement($data_xml);
		//var_dump($xml_object);

		foreach ($xml_object->ARTICLE as $key => $value) {
			echo "----------------------------------- \n";
			foreach ($value as $key2 => $value2) {
				echo "$key2 = $value2  \n";
			}
		}
		
		//http://net.tutsplus.com/tutorials/php/working-with-restful-services-in-codeigniter-2/
			
	}
}
