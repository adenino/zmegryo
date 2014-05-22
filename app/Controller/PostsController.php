<?php
class PostsController extends AppController{
	public $uses = array('Post');
	
	function index(){
		
		$d['posts'] = $this->Post->find('all');
		$this->set($d);
	
	}
	function ajoutannonce(){
		//debug($this->request->data);
	}
}
?>