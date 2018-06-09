<?php 


class User extends Controller
{
	public function login()
	{
		$this->display('User/login');
	}

	public function login_do()
	{
		$name = $_POST["name"];
		$password = $_POST["pwd"];
		$pdo = new PDO("mysql:host=127.0.0.1;dbname=test","root","root");
        $sql = "select username,password from user where name = '$_POST[username]' and password = '$_POST[password]'";
        $res = $pdo->query($sql);
        echo $sql;die;
        if ($res) {
        	echo "<script>alert('登陆成功！');parent.location.href='http://demo.message.com/Message.php?act=show'</script>";
        }else{
        	echo "<script>alert('登陆失败');parent.location.href='http://demo.message.com/User.php?act=login'</script>";
        }
	}
	public function register()
	{
		$this->display('User/register');
	}
	public function register_do()
	{ 
		$pdo = new PDO("mysql:host=127.0.0.1;dbname=test","root","root");
		$name = $_POST['name'];
		$password = $_POST['password'];	
		$sql = "INSERT INTO user (`name`,`password`) VALUES ('$name','$password')";
		$res = $pdo->query($sql);
		if ($res) {
			echo "<script>alert('注册成功');parent.location.href='http://demo.message.com/User.php?act=login'</script>";
		}else{
			echo "<script>alert('注册失败');parent.location.href='http://demo.message.com/User.php?act=register'</script>";
		}
	}
}
