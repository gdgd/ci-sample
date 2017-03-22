<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SampleApi extends Restserver\Libraries\REST_Controller {

	/**
	 * apiのコントローラ
	 * Getのリクエスト
	 * ライブラリのしようとして
	 * ファンクションの末尾にHTTPリクエストを含めないといけないらしい
	 * 
	 * ルーティングの設定は 「SampleApi/index」でいいらしい
	 * 
	 * サンプルリクエスト
	 * https://ci-sample-gdgd.c9users.io/api/sample?test1=welcom&test2=test&test3=api
	 * 
	 */
	public function index_get()
	{
		//リクエストを取得する
		$test1 = $this->get('test1');
		$test2 = $this->get('test2');
		$test3 = $this->get('test3');
		
		
		//modelロード
		// $this->load->model('SampleModels');
		// $model = $this->SampleModels->execute();

		// // //ライブラリロード
		// $this->load->libraries('SampleLibraries');
		// $libraries = $this->SampleLibraries->execute();
		
		// // //hooks
		// $this->load->hooks('SampleHooks');
		// $hooks = $this->SampleHooks->execute();
		
		// // //ヘルパー呼び出し
		// $this->load->helpers('SampleHelpers');
		// $helpers = $this->SampleHelpers->execute();

		
		$this->response(array('message'=>$test1.$test2.$test3),200);
		// $this->response(array('message'=>$test1.$test2.$test3,array($model,$libraries,$hooks,$helpers)),200);
	}
	
	public function index_post()
	{
		//DB接続はできないのでコメントアウト
		// $this->load->database();

		$this->response(array('message'=>$test1.$test2.$test3),200);
	}

	public function index_put()
	{
		//DB接続はできないのでコメントアウト
		// $this->load->database();

		$this->response(array('message'=>$test1.$test2.$test3),200);
	}
	public function index_delete()
	{
		//DB接続はできないのでコメントアウト
		// $this->load->database();

		$this->response(array('message'=>$test1.$test2.$test3),200);
	}
	
}
