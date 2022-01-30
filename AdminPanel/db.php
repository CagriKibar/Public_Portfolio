<?php 



try{
    $DbName=new PDO("mysql:host=localhost; dbname=MyWeb",  'root','');
   
  
    
}catch (Exception $e){
echo $e->getMessage();
}
?>