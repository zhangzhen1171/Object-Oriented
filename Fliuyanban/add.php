<?php  
  //代入类文件
  include 'DB.class.php'; 
  //调用构造函数，传值（地址，用户名，密码） 
  $db=new DB('127.0.0.1:3306','root','root','dongwu');
  //获取提交数据  
  $arr=$_POST;  
  // var_dump($arr);die;
  $res=$db->add('message',$arr); 
  //调用添加类，执行添加
  // var_dump($res);die; 
  if($res){  
    echo "<script>alert('添加成功');location.href='list.php'</script>";  
  }else{  
    echo "<script>alert('添加失败');location.href='form.php'</script>";  
  }  
?>  