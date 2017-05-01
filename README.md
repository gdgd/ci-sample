# ci-sample
codeigniter3 + codeigniter-restserver

ciで作るRestAPIのベースサンプル。
ci本体や、ライブラリはcomposerで管理してます。

## install 
composer install

## 設定ファイル
ciを動かすためには最低限以下の設定が必要です。

development/config.php
<code>
$config['base_url'] = 'https://{host}/';
$config['composer_autoload'] = realpath(APPPATH . '../vendor/autoload.php');
</code>


## セキュア設定している場合はこちらの値を設定する
development/rest.php
<code>
$config['force_https'] = true;
</code>


## 動作検証
'curl -X GET -H "Accept: application/json" https://{host}/api/sample?test1=welcom&test2=test&test3=api'

