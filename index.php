
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>学生管理系统</title>
<link rel="stylesheet" href="https://unpkg.com/purecss@2.0.6/build/pure-min.css" integrity="sha384-Uu6IeWbM+gzNVXJcM9XV3SohHtmWE+3VGi496jvgX1jyvDTXfdK+rfZc8C1Aehk5" crossorigin="anonymous">

    <style>
        body {
            color: white;
            padding: 20px;
            background: url(./img/bg.jpg) repeat center top;
            margin-top: 10%;
        }
        button {
            margin: 10px;
        }
        .title {
            font-size:  60px;
            text-shadow: 2px 2px 3px #000000;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="col text-center title">学生管理系统</div>
	<button class="pure-button" onclick="location.href='./register.php'">注册</button>
	<button class="pure-button" onclick="location.href='./login.php'">登录</button>
	
    </div>
</body>
</html>