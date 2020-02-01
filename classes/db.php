<?php 
 class DB{   
 
      private $connection = NULL; 
    //========================================//	
 	function __construct($dbname, $host = "localhost", $user="root", $password=''){
 		$this->connection = new mysqli($host, $user, $password, $dbname);
 		$this->connection->query("SET NAMES 'utf8'"); 
 		$this->deletingOldInfo();		
 	}
 	//========================================//
 	private function fetchAssoc($result){
 		$arr = array();
 		if(!empty($result))
 		while($row = $result->fetch_assoc()){
 			$arr[] = $row; 
 		}
 		return $arr;
 	}
 	function deletingOldInfo(){
 		 for($i = 1; $i < 6; $i++){
 		 	$this->deleteInfo("DELETE FROM `tbl_order_car` WHERE `tbl_order_car`.`fromdate` ='". date("Y-m-d",(time()-($i * 86400)))."'");
 		 	$this->deleteInfo("DELETE FROM `tbl_book_taxi` WHERE `tbl_book_taxi`.`fromdate` ='". date("Y-m-d",(time()-($i * 86400)))."'");
 		 }
 		
 		
 	}
 	
 	//========================================//
 	function selectInfo($query){
 		return $this->fetchAssoc($this->connection->query($query));
 	}
 	//========================================//
 	function deleteInfo($query){
 		$this->connection->query($query);
 	}
 	//========================================//
 	function insertInfo($query){
 		$this->connection->query($query);
 	}
 	
 	//========================================//
 	function updateInfo($query){
 		$this->connection->query($query);
 	}
 	
 	//========================================//
 	function __destruct(){
 		$this->connection->close();
 	} 	
 	   //========================================//
 }
   // $db = new DB('testdb');
    
    // $db->insertInfo("INSERT INTO `tbl_test`(`Name`, `age`, `tel`) VALUES('Sulaymon', 26,'1258972')");
	// $db->deleteInfo("DELETE FROM tbl_test");
    // $db->updateInfo("UPDATE `tbl_test` SET `Name`='Anboz',`tel`='904773250' WHERE `age`=22");
 	// $db->printInfo($db->selectInfo("SELECT `age`,`Name`,`tel`,`id` FROM tbl_test WHERE `Name` = 'Sulaymon'"));
  
  
?>