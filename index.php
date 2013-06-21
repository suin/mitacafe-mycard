<?php

$memberCode = @$_GET['id'];
$name = @$_GET['name'];
$phonetic = @$_GET['phonetic'];
$belongsTo = @$_GET['belongs_to'];
$photoUrl = @$_GET['photo_url'];

if (empty($memberCode)) {
    echo '"id" is required.';
    exit;
}

// http://localhost:8000/?id=R1200024&name=%E9%87%8E%E6%BE%A4%E3%80%80%E7%A7%80%E4%BB%81&phonetic=%E3%83%8E%E3%82%B6%E3%83%AF%E3%80%80%E3%83%92%E3%83%87%E3%83%92%E3%83%88&belongs_to=%E3%83%95%E3%83%AA%E3%83%BC%E3%83%A9%E3%83%B3%E3%82%B9&photo_url=%20http://mitacafe.co/uploads/cavtc5c6957411fd28aa9f414.jpg

function h($string)
{
    echo htmlspecialchars($string);
}

?><!doctype html>
<html>
<meta charset="UTF-8">
<head>
    <title>ミタカフェ会員カード</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <div id="body">
        <div id="container">
            <div id="card">
                <div class="top">
                    <div class="logo">
                        <img src="logo.jpg">
                    </div>
                    <div class="qrcode" style="background-image: url('https://chart.googleapis.com/chart?cht=qr&chs=500x500&chl=<?php h($memberCode) ?>')"></div>
                </div>
                <div class="bottom">
                    <div class="identity">
                        <div class="photo" <?php if ($photoUrl) : ?>style="background-image:url('<?php h($photoUrl) ?>')"<?php endif ?>></div>
                        <div class="member_code"><?php h($memberCode) ?></div>
                    </div>
                    <div class="profile">
                        <div class="item phonetic">
                            <div class="label">フリガナ</div>
                            <div class="value"><?php h($phonetic) ?></div>
                        </div>
                        <div class="item name">
                            <div class="label">名　前</div>
                            <div class="value"><?php h($name) ?></div>
                        </div>
                        <div class="item belongs_to">
                            <div class="label">所　属</div>
                            <div class="value"><?php h($belongsTo) ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
