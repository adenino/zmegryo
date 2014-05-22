<?php 
class PagesController extends AppController{
	public $uses = array('City');
	function home(){
		$d['cities']= $this->City->find('all');
		$this->set($d);
	}
}
