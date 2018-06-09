

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>登录</title>
<style>
*{list-style: none}
</style>
</head>
<body>
	<form action="http://demo.message.com/user.php?act=login_do" method="post">
	<ul>
		<li>用户名：</li>
		<li><input type="text" name="name"></li>
	</ul>
	<ul>
		<li>密码：</li>
		<li><input type="password" name="pwd"></li>
	</ul>
	<ul>
	<button>登录</button><a href="http://demo.message.com/User.php?act=register"><button>注册</button></a>
	</ul>
	</form>
</body>
</html>