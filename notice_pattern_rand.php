<?php
// TL上の特定の語に反応するアレ。
// ＠付いてるときは逆に反応しない。
$data = array(
    "＼晶子(！|\!)*／"=> array(
        "へ？　……え？",
        "ちょ、ちょっと、何をやってるんですか！？",
        "うー……。別にいいですけど……",
        "はあ、なんでこんなことに……"
    ),
    "晶子.*([好す]き|可愛い|かわいい)"=> array(
        "も、もう、冗談はやめてください。",
        "あ、ありがとうございます。",
        "も、もう。またそういうことを軽々しく……。",
        "えと、ありがとうございます。",
    ),
    "(あきこー|晶子ー)+"=> array(
        "もう、何ですか{name}さん？",
        "何度も呼ばなくたって、私はここにいますよ？",
        "はい、なんですか？",
    ),
);
