<?php  
  include 'DB.class.php';  
  $db=new DB('127.0.0.1:3306','root','root','dongwu');  
  $id=$_GET['id'];  
  $res=$db->del('message',"mid=$id");  
  if($res){  
     echo "<script>alert('删除成功');location.href='list.php'</script>";  
  }else{  
    echo "<script>alert('删除失败');location.href='list.php'</script>";  
  }  
?>  