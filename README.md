phaさんが作られている **EasyBotter** をベースに、大臣が作成したTwitterのキャラbotです。
* [プログラミングができなくても作れるTwitter botの作り方](http://pha22.net/twitterbot/)

## akikobot
実際に稼動してる「月丘晶子bot」の関してはこちら。

* https://twitter.com/TsukiokaAkiko
* https://www.zephyr-cradle.info/db/index.php/Twitter/akiko_bot

## カスタマイズ仕様解説

* akikobotディレクトリ直下にあるファイルのみをオリジナルからカスタマイズしてます。
* `bot.php` は3分おきに `cron` で呼ぶようにしています。

## ファイル解説

パターンファイルはいくつかに分割しています。以下、元のEasyBotterに存在しないファイルの解説。

### data.txtを元にしたファイル

* `data.txt` : 元のファイル
* `good_morning.txt` : おはよう関連のツイートパターン
* `good_night.txt` : おやすみ関連の同上

### reply_pattern.phpを元にしたファイル

* `notice_pattern.php` : 晶子本人がTLに反応してリプライを飛ばす場合のパターンファイル。挨拶系。
* `notice_pattern_rand.php` : 同上。名前を呼ばれたとき系。
* `reply_pattern.php` : 元のファイル。リプライを飛ばされたときの反応。
* `reply_pattern_sleep.php` : 寝てるときにリプライを飛ばされたときの反応。

### その他
* `bot_single.php` : bot.phpを元に作成。single.txtにある内容をツイートさせたいためだけのファイル。
