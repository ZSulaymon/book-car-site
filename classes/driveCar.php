<?php
class driveCar extends cars {
	
	function processing(){	 
	 		
	 	 $error = "Введите";
		$info = (trim($_POST['info'])=='')? "Нет информация":trim($_POST['info']);
		$image = "";
		if(trim($_POST['name'])=='')
			$error.=" имя, ";
		if(trim($_POST['surname'])=='')
			$error.=" фамилия, ";
		if(trim($_POST['carnumber'])=='')
			$error.=" номер машина, ";
		if(trim($_POST['tel'])=='')
			$error.=" номер телефона, ";		
		if(empty($_FILES['file']['tmp_name']))
			$error.=" картинку!";			  
		 if($error=='Введите'){			 	 
		 	 if(!empty($this->db->selectInfo("SELECT id FROM tbl_car WHERE password='".$_COOKIE['secId']."' AND email='".$_COOKIE['myEmail']."'")))
		 	  echo("<script>alert('У вас нет разрешения для добавления больше один машина на одно аккаунта');</script>"); 
		 	  else{ 
		 	  	 $date = strtotime(date('Y-m-d',time()));	       
				 $image = addslashes(file_get_contents($_FILES['file']['tmp_name']));		
				 $this->db->insertInfo("INSERT INTO `tbl_car`(`dr_name`,`car_number`,`dr_surname`,`image`,`tel`,`info`,`password`,`email`,`regDate`)VALUES('".trim($_POST['name'])."','".trim($_POST['carnumber'])."','".trim($_POST['surname'])."','".$image."','".trim($_POST['tel'])."','".$info."','".$_COOKIE['secId']."','".$_COOKIE['myEmail']."','".$date."')");
				echo("<script>alert('Ваша объявление сохранено');</script>"); 
			     }
		} 
		  
	}
	
	
	function getContent() {

		require_once 'tpls/driveCar.tpl';
	}

}
?>