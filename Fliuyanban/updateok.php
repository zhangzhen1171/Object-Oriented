<?php  
  include 'DB.class.php';  
  $nid=$_POST['nid'];  
  $content=$_POST['content'];  
  $id=$_GET['id'];  
  $db=new DB('127.0.0.1:3306','root','root','dongwu');  
  $res=$db->updateok('message',"content='$content',nid=$nid","mid=$id");  
  if($res){  
    echo "<script>alert('修改成功');location.href='list.php'</script>";  
  }else{  
    echo "<script>alert('修改失败');location.href='list.php'</script>";  
  }  
?>  