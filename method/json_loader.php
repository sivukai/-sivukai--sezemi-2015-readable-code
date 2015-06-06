<?php
//Jsonファイルをデコードする関数
function json_load($filename){
	// ファイルからJSONを読み込み
	$json = file_get_contents($filename);
	// 文字化けするかもしれないのでUTF-8に変換
	$json = mb_convert_encoding($json, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');

	// オブジェクト毎にパース
	$obj = json_decode($json, true);

	// パースに失敗した時は処理終了
	if ($obj === NULL) {
	return;
	}

	return $obj;
}
?>
