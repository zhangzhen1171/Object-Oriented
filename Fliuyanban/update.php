<?php  
  include 'DB.class.php';  
   $db=new DB('127.0.0.1:3306','root','root','dongwu');  
  $id=$_GET['id'];  
  $row=$db->update('message',"mid=$id");  
  //var_dump($row);die;  
  $arr=$db->all('nickname');  
?>  
<center>  
  <form action="updateok.php?id=<?php echo $row['mid'];?>" method='post'>  
    <table border=1>  
      <tr>  
        <td>请选择昵称:</td>  
        <td>  
         <select name="nid">  
           <?php foreach($arr as $v){?>  
             <option value="<?php echo $v['nid'];?>" <?php if($row['nid']=$v['nid']){ echo 'selected';}?>><?php echo $v['name'];?></option>  
           <?php }?>  
         </select>  
        </td>  
      </tr>  
      <tr>  
        <td>留言内容:</td>  
        <td><textarea name="content" cols="20" rows="5"><?php echo $row['content'];?></textarea></td>  
      </tr>  
      <tr>  
        <td><input type="submit" value='修改留言'/></td>  
        <td></td>  
      </tr>  
    </table>  
  </form>  
</center>  