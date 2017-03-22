<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * swaggerでドキュメントを生成するた為のサンプルクラスです。
 * apiの仕様をコメントに定義し、
 * swagger.shを実行することでドキュメントの元となるswagger.jsonを生成します。
 * 
 * swaggerのアノテーションの使い方については公式ページとかを見つつ
 * 頑張って実装します。。。
 * 正直swaggerエディタ（online）で書いた方が早いかもしれません。
 * 
 * @SWG\Swagger(
 *   schemes={"https"},
 *   host="otamesi-gdgd.c9users.io",
 *   basePath="/api",
 *   @SWG\Info(
 *     title="Codeigniter3 RestAPI サンプルドキュメント",
 *     version="1.0.0"
 *   )
 * )
 */
 class SwaggerSample extends Restserver\Libraries\REST_Controller {

    /**
     * @SWG\Get(
     *     path="/swagger/sample",
     *     description="swaggerのサンプルソースです。固定の返却値を返します",
     *     produces={"application/json"},
     *     tags={"samples"},
     *     @SWG\Response(
     *         response=200,
     *         description="Success"
     *     ),
     *     @SWG\Response(
     *         response=404,
     *         description="Parameter error"
     *     ),
     *     @SWG\Response(
     *         response=403,
     *         description="Auth error",
     *     ),
     * )
     * 
     */
    public function index_get() {
        $this->response(array('sample' => array('message'=>'sample rest api')),200);
    }


}