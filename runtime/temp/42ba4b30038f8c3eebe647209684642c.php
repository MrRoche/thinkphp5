<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:79:"D:\phpStudy\WWW\Thinkphp_5.0/application/start\view\index\user\weixin_bind.html";i:1490776650;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>七里香-微信绑定</title>
    <link rel="stylesheet" href="/public/static/public/css/reset.css">
<style>

    .weixin-code-area{
        width: 300px;
        min-height: 50px;
        margin: 0 auto;
    }
    .weixin-code-area .msg{
        text-align: center;
        line-height: 20px;
        font-family: "Microsoft Yahei", "Helvetica Neue", Helvetica, Arial, sans-serif;
        color: #000;
    }
</style>
</head>
<body>
<div class="weixin-code-area">
    <img src="<?php echo url('weixin/index/weixin_erweima');?>" width="100%" height="300px" alt="">
    <p class="msg">打开手机扫一扫绑定微信吧~</p>
</div>
</body>
</html>