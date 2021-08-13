<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>smsSystem-登录</title>
    {{ assets.outputCss() }}
</head>
<body><!-- partial:index.partial.html -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500&display=swap" rel="stylesheet">
<div class="container">
    {{ form("index/login", "method": "post") }}
            <p>登 录</p>
            <input type="password" placeholder="密码" name = 'password'>
            <br>
            {{ submit_button("提 交") }}
        {{ endForm() }}
<!--     <form> -->
<!--         <p>登 录</p> -->
<!--     <input type="password" placeholder="密码"><br> -->
<!--     <input type="button" value="提 交"> -->
<!--     </form> -->
    <div class="drops"><div class="drop drop-1"></div>
    <div class="drop drop-2"></div>
    <div class="drop drop-3"></div>
    <div class="drop drop-4"></div>
    <div class="drop drop-5"></div></div>
</div><!-- partial -->
</body>
</html>