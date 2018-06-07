<?php  
  //解析头  
  header('content-type:text/html;charset=utf-8');  
  class DB{  
     function __construct($host,$user,$pass,$dbname){  
       $link=mysql_connect($host,$user,$pass);  
       mysql_select_db($dbname,$link);  
       mysql_query('set names utf8');  
     }  
     //查询sql  
     function select($table,$table1,$id){  
       //准备查询的sql语句  
       $sql="select * from $table inner join $table1 on $table.$id=$table1.$id";  
       //执行  
       $res=mysql_query($sql);  
       //定义空数组  
       $arr=array();  
       while($row=mysql_fetch_assoc($res)){  
         $arr[]=$row;  
       }  
       return $arr;  
     }  
     function all($table){  
      $sql="select * from  $table";  
      //echo $sql;die;  
      $res=mysql_query($sql);  
      //var_dump($res);die;  
      $arr=array();  
      while($row=mysql_fetch_assoc($res)){  
        $arr[]=$row;  
      }  
      //var_dump($arr);die;  
      return $arr;  
    }  
     //添加sql语句  
     function add($table,$arr){  
       $str=array_values($arr);  

       $str=implode("','",$str);

       $sql="insert into $table values(null,'$str')";
       //echo $sql;die;  
       $res=mysql_query($sql); 
       if($res&&mysql_affected_rows()>0){  
         return true;  
       }else{  
         return false;  
       }  
     }  
     //删出sql语句  
     function del($table,$where){  
       $sql="delete from $table where $where";  
       $res=mysql_query($sql);  
       if($res&&mysql_affected_rows()>0){  
         return true;  
       }else{  
         return false;  
       }  
     }  
     //查询修改语句需要查询的语句  
     function update($table,$where){  
       $sql="select * from $table where $where";  
       //echo $sql;die;  
       $res=mysql_query($sql);  
       $row=mysql_fetch_assoc($res);  
       //var_dump($row);die;  
       return $row;  
     }  
     //改  
     function updateok($table,$update,$where){  
       $sql="update $table set $update where $where";  
       $res=mysql_query($sql);  
       if($res&&mysql_affected_rows()>0){  
         return true;  
       }else{  
         return false;  
       }  
     }  
  }  
?>  