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
// 60分に1回、フォロー返しをする。
if (date("i") % 60 == 0) {
    $response = $eb->autoFollow();
}

// 60分に1回、Postをする。
if (date("i") % 60 == 0) {
    // AM1時に寝る。
    if (date("G") == 1) {
        $response = $eb->postRandom("good_night.txt");
    }
    // AM8時に起きる。
    else if (date("G") == 8) {
        $response = $eb->postRandom("good_morning.txt");
    }
    // AM2時～8時までは寝てる
    else if (date("G") > 1 && date("G") < 8) {
    }
    // それ以外は通常Post
    else {
        $response = $eb->postRandom("data.txt");
        //$response = $eb->postRotation("data.txt");
    }
}

// 3分に1回レスする。
if ((date("G") > 1) && (date("G") < 8)) {
    $response = $eb->reply(3,"","reply_pattern_sleep.php");
}
// 起きてるときAM8時台～AM1時台のみの反応
else {
    $response = $eb->reply(3,"unknown.txt","reply_pattern.php");
}

// 起きてるときAM8時台～AM1時台のみの反応
if ((date("G") < 1) || (date("G") > 7)) {
    // TLに反応する。
    $response = $eb->replyTimeline(3,"notice_pattern.php");

    // 1/3の確率でランダムにTL反応する。
    if (rand(0,2) == 0){
        $response = $eb->replyTimeline(3,"notice_pattern_rand.php");
    }
}

/*
//===================================================
//EasyBotter2.03 2010/02/11更新
//===================================================
////ここから下はphaによる解説です。
////cronなどでこのbot.phpを実行するわけですが、動作の指定の仕方はこんな感じです。

//用意したデータをランダムにポストしたい
$response = $eb->postRandom("データを書き込んだファイル名");

//用意したデータを順番にポストしたい
$response = $eb->postRotation("データを書き込んだファイル名");

//@で話しかけられたときにリプライしたい
$response = $eb->reply(cronで実行する間隔（単位：分）, "データを書き込んだファイル名", "パターン反応を書き込んだファイル名");

//タイムラインの単語に反応してリプライしたい
$response = $eb->replyTimeline(cronで実行する間隔（単位：分）,"パターン反応を書き込んだファイル名");

//自動でフォロー返ししたい
$response = $eb->autoFollow();


//===================================================
//// cronを実行するたびに毎回実行するのではなく、
//// 実行する頻度を変えたい場合の例は以下のとおりです。
//// PHPのdata()の応用の仕方は以下のURLを参照ください。
//// http://php.net/manual/ja/function.date.php

//bot.phpを実行したときに毎回実行される
$response = $eb->postRandom("data.txt");

//bot.phpを実行したときに、5回に1回ランダムに実行される
if(rand(0,4) == 0){
    $response = $eb->postRandom("data.txt");
}

//bot.phpを実行したときに、0分、15分、30分、45分だったら実行される
if(date("i") % 15 == 0){
    $response = $eb->postRandom("data.txt");
}

//bot.phpを実行したときに、午前だったらgozen.txtのデータを、午後だったらgogo.txtのデータを使う
if(date("G") < 12){
    $response = $eb->postRandom("gozen.txt");
}else{
    $response = $eb->postRandom("gogo.txt");
}

//bot.phpを実行したときに、2月14日のみvalentine.txtのデータを、それ以外はdata.txtのデータを使う
if(date("n") == 2 && date("j") == 14){
    $response = $eb->postRandom("valentine.txt");
}else{
    $response = $eb->postRandom("data.txt");
}

//準備したテキストを順番にポストしていって、準備した中から「めでたしめでたし」が投稿されたらbotの投稿をそこで止める
$response = $eb->postRotation("data.txt","めでたしめでたし");
*/


?>
