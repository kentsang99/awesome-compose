<!DOCTYPE html>
<html>
<head>
	<title>登录</title>
	<style>
		body {
			margin: 0;
			padding: 0;
			background-color: #f1f1f1;
		}
		.container {
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			background-color: #fff;
			padding: 20px;
			border-radius: 5px;
			box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
		}
		.container h2 {
			text-align: center;
			margin-bottom: 20px;
			color: #333;
		}
		input[type="text"], input[type="password"] {
			width: 100%;
			padding: 10px;
			margin-bottom: 15px;
			border: none;
			border-radius: 5px;
			background-color: #f9f9f9;
			box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
		}
		input[type="submit"] {
			width: 100%;
			padding: 10px;
			margin-top: 10px;
			border: none;
			border-radius: 5px;
			background-color: #4CAF50;
			color: #fff;
			font-size: 16px;
			cursor: pointer;
		}
	</style>
</head>
<body>
	<?php
		// 处理登录请求
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
			$username = $_POST['username'];
			$password = $_POST['password'];

			// 在这里进行用户名和密码的验证

			if ($username === 'admin' && $password === '123456') {
				// 登录成功，重定向到主页
				header('Location: success.php');
				exit;
			} else {
				// 登录失败，显示错误消息
				echo '<p style="color: red; text-align: center;">用户名或密码错误</p>';
			}
		}
	?>

	<div class="container">
		<h2>登录</h2>
		<form method="post">
			<label for="username">用户名</label>
			<input type="text" id="username" name="username" placeholder="请输入用户名">

			<label for="password">密码</label>
			<input type="password" id="password" name="password" placeholder="请输入密码">

			<input type="submit" value="登录">
		</form>
	</div>
</body>
</html>
