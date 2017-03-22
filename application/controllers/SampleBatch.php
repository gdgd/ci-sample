<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sample extends Restserver\Libraries\REST_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index_get()
	{
		//リクエストを取得する
		//取得方法はgetに変数名を指定することで取得可能
		$test1 = $this->get('test1');
		$test2 = $this->get('test2');
		$test3 = $this->get('test3');
		
		$this->load->models();

		
		$this->set_response(array('message'=>$test1.$test2.$test3),200);
	}
	
	public function index_post()
	{
		//DB接続はできないのでコメントアウト
		// $this->load->database();

		$this->set_response(array('message'=>$test1.$test2.$test3),200);
	}
}
