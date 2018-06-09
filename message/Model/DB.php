<?php 
class DB
{ 
         public function pdo()
        {
                $pdo = new PDO('mysql:host=127.0.0.1;dbname=test', 'root', 'root');
                return $pdo();
        }
	   public function add()  
	   {
		$sql = 'insert into '.$table_name;
		$filed = '(';
		$value = ' values (';
		foreach ($params as $key => $value) {
			$filed .=$key.',';
			$value .=$key.',';
		}
		$sql .= trim($filed, ',').')'.trim($value,',').')';
		return $pdo->exec($sql);
	   }
        public function show()
        {
                $sql = 'select * from '.$table_name;
                return $pdo->exec($sql);
        }
        public function delete($table_name,$condition)
        {
        $sql = 'delete from'.$tablename.'where'.$condition;
        return $pdo->exec($sql);

        }
        public function update()
         {
             
         } 
}
