<?php  
  include 'DB.class.php';  
  $db=new DB('127.0.0.1:3306','root','root','dongwu');  
  $arr=$db->select('message','nickname','nid');  
?>  
<center>  
  <table border=1>  
    <tr>  
        <th>昵称</th>  
        <th>留言内容</th>  
        <th>操作</th>  
    </tr>  
    <?php foreach($arr as $v){?>  
      <tr>  
        <td><?php echo $v['name'];?></td>  
        <td><?php echo $v['content'];?></td>  
        <td><a href="delete.php?id=<?php echo $v['mid'];?>">删除</a>||<a href="update.php?id=<?php echo $v['mid'];?>">修改</a></td>  
      </tr>  
    <?php }?>  
  </table>  
</center>  