<?php  
  include 'DB.class.php';  
  $db=new DB('127.0.0.1:3306','root','root','dongwu');  
  $arr=$db->all('nickname');  
  //var_dump($arr);die;  
?>  
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">  
<head>  
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />  
    <title></title>  
</head>  
<body>  
    <center>  
      <form action="add.php" method='post'>  
        <table border=1>  
          <tr>  
            <td>请选择昵称:</td>  
            <td>  
             <select name="nid">  
               <?php foreach($arr as $v){?>  
                 <option value="<?php echo $v['nid'];?>"><?php echo $v['name'];?></option>  
               <?php }?>  
             </select>  
            </td>  
          </tr>  
          <tr>  
            <td>留言内容:</td>  
            <td><textarea name="content" cols="20" rows="5"></textarea></td>  
          </tr>  
          <tr>  
            <td><input type="submit" value='提交留言'/></td>  
            <td></td>  
          </tr>  
        </table>  
      </form>  
    </center>  
</body>  
</html>  