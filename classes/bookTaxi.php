<?php
class bookTaxi extends cars {
       
        function processing(){
              
       		  $error = "Введите";
       	if(trim($_POST['name'])=="")
       		$error.=" имя, ";
       	$_POST['name']= htmlspecialchars($_POST['name']);
       	if(trim($_POST['surname'])=="")
       		$error.=" фамилия, ";
       		$_POST['surname']= htmlspecialchars($_POST['surname']);
       	if(trim($_POST['tel'])=="")
       		$error.=" номер телефона, ";
       	$_POST['tel']= htmlspecialchars($_POST['tel']);
       	if(trim($_POST['adres'])=="")
       		$error.=" свой адрес, "; 
       	$_POST['adres']= htmlspecialchars($_POST['adres']);      	 
       	if(trim($_POST['fromtime'])=="") 
       		$error.="время, ";	               
       	if(trim($_POST['message'])=="")
       		$_POST['message'] = "Нет сообщений";
        $_POST['message']= htmlspecialchars($_POST['message']);
		if($error == "Введите")
			{ 
			  if(strtotime($_POST['fromtime']) > time())
			    {		      
					  $this->db->insertInfo("INSERT INTO `tbl_book_taxi` (`place`, `name`, `surname`, `tel`, `adres`, `fromdate`, `fromtime`, `info`, `idtaxi`) VALUES (1, '".$_POST['name']."', '".$_POST['surname']."', '".$_POST['tel']."', '".$_POST['adres']."', '".date('Y-m-d')."', '".$_POST['fromtime']."', '".$_POST['message']."', '".$_POST['idTaxi']."')");
					 
		$this->db->insertInfo("INSERT INTO `tbl_amount_users` (`id`, `fromdate`, `isTaxi`) VALUES ('".$_POST['idTaxi']."', '".date('Y-m-d')."', '1')");
					 
					    echo("<script>alert('Ваш запрос принята ');</script>");
					     
				} else echo("<script>alert('Вы неправильно установили время');</script>"); 
		   	} 
			  
			   
      }
	
	function getContent() {	
		$taxi = $this->db->selectInfo("SELECT *FROM `tbl_taxi` WHERE `id`='".$_GET['idTaxi']."'");		 
		$taxi[0][] = $taxi[0]['place'];
	     $isfree =  $this->db->selectInfo("SELECT place FROM tbl_book_taxi WHERE idtaxi='".$_GET['idTaxi']."'");
	     	  $name = "send";   
	     if(!empty($isfree))
	     {
	      	$max = 0;
		     	for($i = 0; $i < count($isfree); $i++)
		     		$max++;
	     	
	     	$taxi[0][0] -= $max;
	     	        
	          
	        if($taxi[0]['place'] == $max)         	 
	        	$name = "";
		 }     
		require_once 'tpls/bookTaxi.tpl';
	}

}
?>