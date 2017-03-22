<?php

class SampleHooks extends CI_Hooks  {

	public function execute()
	{
		//モデル呼び出し
		return 'Hooks 呼び出し成功';
	}
}
