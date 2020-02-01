<?php
class signup extends cars {
  
      
  function processing(){
 	 $error="Введите";
 	 $name="";
 	 $surname="";
 	 $email="";
 	 $pass1="";
  	  if(strlen(trim($_POST['name'])) > 0)
  	  	$name = trim($_POST['name']);
  	  	else 
  	  	$error.= "имя, ";
  	  	   	  	
  	  if(strlen(trim($_POST['surname'])) > 0)
  	  	 $surname = trim($_POST['surname']);
  	     else
  	  	 $error.="фамилия, ";
  	    
  	  if(strlen(trim($_POST['email'])) > 0)
  	  	$email = trim($_POST['email']);
  	    else
  	  	 $error.="адрес, ";
  		   		 
  		if(strlen(trim($_POST['pass1'])) > 0) 
  		  $pass1 = trim($_POST['pass1']);
           else
  	  	$error.="пароль";
  		
  		if($error!="Введите")
  			echo"<script>alert('$error')</script>";
  	     else{
  	     	if($pass1 !=  trim($_POST['pass2']))
  	     		echo"<script>alert('Пароли не совпадають');</script>";
  	     	else{
  	     	$pass1 = md5($pass1);
  	     	if(!empty(($this->db->selectInfo("SELECT `email`FROM `tbl_reg` WHERE EMAIL='".$email."'"))))
  	     		echo"<script>alert('Адрес уже существует');</script>";
  	     	else{  	     		  	     		  	     		
  	     	$this->db->insertInfo("INSERT INTO `tbl_reg`(`_name`, `surname`, `email`, `password`) VALUES('".$name."', '".$surname."','".$email."','".$pass1."')");
  	     	setcookie('myId',md5 (trim($_POST['pass1'])));
     	    setcookie('secId',md5(md5(trim($_POST['pass1']))));    	     	
     	    setcookie('myEmail',trim($_POST['email']));
  	     	   header("location:?option=user&user=".$name."&titlepage=Добро пожаловать");
     	    	} 	     		  	     		  	     		
  	  	     }
  	     	
  	     } 
  	
	}

	
	function getContent() {

		require_once 'tpls/signup.tpl';
	}

}
?>