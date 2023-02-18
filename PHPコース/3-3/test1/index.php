<?php
// クラスの名簿の配列
$list = array(
    '山田' => array(
        'ID' => '001',
        '出身' => '函館',
        'メールアドレス' => 'yamada@example.com',
        '性別' => '女性'
    ),
    '田中' => array(
        'ID' => '002',
        'メールアドレス' => 'tanaka@example.com',
        '性別' => '男性'
    ),
    '高橋' => array(
        'ID' => '003',
        '出身' => '札幌',
        'メールアドレス' => 'takahasi@example.com',
        '性別' => '女性',
    ),
    '井上' => array(
        'ID' => '004',
        '出身' => '東京',
        'メールアドレス' => 'inoue@example.com',
        '性別' => '男性',
    ),
    '小林' => array(
        'ID' => '005',
        '出身' => '大阪',
        'メールアドレス' => 'kobayasi@example.com',
        '性別' => '男性',
    ),
    '森' => array(
        'ID' => '006',
        '出身' => '沖縄',
        'メールアドレス' => 'mori@example.com',
        '性別' => '女性',
    )
);

// 取得したクラス名簿を表示するための処理
function getName($list) {
    //$i = 0;
    echo "【Aクラスの名簿】" . '<br>';
//配列の中の名前を出す。
 /*    foreach ($list as $key => $member) {
        if ($i < count($list)) {
            echo $key[0] . '<br>';
        }
        $i++;
    }
} */

//修正１：foreachの中に条件をつける必要はないので、if文はいらない。$i++;でインクリする必要もない。$i = 0;も削除。
//修正２：条件式の$listは配列の中に連想配列がある構造なので、array_keys関数で外側の配列のキーを取得。foreachで表示されるためには「as $key」を付け足した形にしなければならない。 
foreach (array_keys($list) as $key) {
    echo $key.'<br>';
}
}

// クラスの一覧を表示
getName($list);
echo '<br>';
// 大阪出身の方を表示
//修正３：下記に引数「$list」を入れる。「☆クラスで大阪出身の子は小林 さんです。」を表示させるための関数を呼び出している。
getPeople($list);

// 大阪出身の方を抽出
function getPeople($list) {
    foreach ($list as $key => $member) {
        if (isset($member['出身']) && $member['出身'] === '大阪') {
            echo "☆クラスで大阪出身の子は" . $key . PHP_EOL . "さんです。";
        }
    }
}

?>