<?php
class bookCar extends cars {
	    
	    function processing(){
	     $error = "Введите";
       	if(trim($_POST['name'])=="")
       		$error.=" имя, ";
       	if(trim($_POST['surname'])=="")
       		$error.=" фамилия, ";
       	if(trim($_POST['tel'])=="")
       		$error.=" номер телефона, ";
       	if(trim($_POST['adres'])=="")
       		$error.=" свой адрес, ";
       	if(trim($_POST['fromdate'])=="")
       		$error.=" дату, ";
       	if(trim($_POST['fromtime'])=="") 
       		$error.="время, ";	           
       	if(trim($_POST['totime'])=="")
       		$error.="время устанвленно неправильно, "; 
       	if(trim($_POST['message'])=="")
       		$_POST['message'] = "Нет сообщений";
         
 	 
 	 
 	     if((strtotime(date($_POST['fromdate'],strtotime($_POST['fromtime'])))-strtotime(date('Y-m-d',time()))) >= 0)
 	     { 	     
        	 if(strtotime($_POST['fromtime']) < strtotime($_POST['totime']))
        	 {
	        	 $isBusi =  ($this->db->selectInfo("SELECT *FROM tbl_order_car WHERE `idcar`='".$_POST['idCar']."' AND fromdate='".$_POST['fromdate']."'"));
	         	   if(!empty($isBusi))
			         	   	 echo("<script>alert('Данная машина занята на дату который вы определили. Пожалуйста измените дату!');</script>");	       	else{
					       	if($error == "Введите")
					       	{
					 $this->db->insertInfo("INSERT INTO `tbl_order_car`(`idcar`,`client_name`,`client_surname`,`client_tel`,`client_addres`,`client_message`,`fromdate`,`fromtime`,`totime`)VALUES('".$_POST['idCar']."','".$_POST['name']."','".trim($_POST['surname'])."','".trim($_POST['tel'])."','".$_POST['adres']."','".trim($_POST['message'])."','".$_POST['fromdate']."','".$_POST['fromtime']."','".$_POST['totime']."')");
					 
		$this->db->insertInfo("INSERT INTO `tbl_amount_users` (`id`, `fromdate`, `isTaxi`) VALUES ('".$_POST['idCar']."', '".date('Y-m-d')."', '0')");			 
					    echo("<script>alert('Ваш запрос принята ');</script>");
					    	}
					}	 
			    	 
			}else echo("<script>alert('Время установленно неправильно!');</script>");	   
	      }else echo("<script>alert('Дата установленно неправильно!');</script>");
	     
			
	
	}
	
	
	function getContent() {

        $car = $this->db->selectInfo("SELECT *FROM tbl_car WHERE id='".$_GET['idCar']."'");
        $from = array();
        $to = array();		 		 
	     $busi = $this->db->selectInfo("SELECT *FROM tbl_order_car WHERE idcar='".$_GET['idCar']."'");
	 	  if(!empty($busi))
	 	  {	 	   
		 	  for($i = 0; $i < count($busi); $i++)
		 	  {
		 	  	$from[] = $busi[$i]['fromdate']." / ".$busi[$i]['fromtime'];
		 	  	$to[] = $busi[$i]['totime'];
		 	  }
		 	  
		  }
	     
		require_once 'tpls/bookCar.tpl';
	}

}
?>