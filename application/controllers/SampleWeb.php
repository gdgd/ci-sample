<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class SampleWeb extends CI_Controller {

	public function index()
	{
	
	//出力対象の置き換え文字は配列で渡す。画面側では配列のキー名で変数せんげんすると出力される。微妙です	
		$data["sample1"] = 'サンプル1';
		$data["sample2"] = 'サンプル2';

		//webの場合はテンプレートの呼び出しをload->viewで行う
		$this->load->view('sample',$data);
	}

//この処理ciのweb用デストラクタ的な処理	
//最後に必ず処理される
	// public function _output()
	// {
	//         echo '出力';
	// }

}
