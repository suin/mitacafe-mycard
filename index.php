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

function h($string)
{
    echo htmlspecialchars($string);
}

?><!doctype html>
<html>
<meta charset="UTF-8">
<head>
    <title>ミタカフェ会員カード</title>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-precomposed.png" />
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
