<?php
// TL上の特定の語に反応するアレ。
// ＠付いてるときは逆に反応しない。
$data = array(
    "(おっ*はよ|おっ*はおは)"=> array(
        "おはようございます、{name}さん。",
        "おはようございます♪",
        "ごきげんよう、{name}さん。",
        "ごきげんよう、今日も一日がんばりましょう♪",
    ),
    "ごきげんよ"=> array(
        "ごきげんよう、{name}さん。",
    ),
    "(おやす|寝ます|寝る)"=> array(
        "おやすみなさい、{name}さん。",
    ),
    "(ただいま|帰宅[っし]た|帰った|帰りました)"=> array(
        "おかえりなさい、{name}さん。",
    ),
);
