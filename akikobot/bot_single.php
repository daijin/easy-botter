<?php
//=============================
//EasyBotterを呼び出します
//=============================
require_once("EasyBotter.php");
$eb = new EasyBotter();

//=============================
//botの動作をここに書いてください
//先頭に//がある行はコメント扱いなので実行しません。実行したい行の頭の//を削除してください。
//=============================
//$response = $eb->autoFollow();
$response = $eb->postRandom("single.txt");
//$response = $eb->postRotation("data.txt");
//$response = $eb->reply(3,"unknown.txt","reply_pattern.php");
//$response = $eb->replyTimeline(3,"notice_pattern.php");


?>
