<?php
class login extends cars {
 
 	function haveAccount($email, $pass){
 		  return  $this->db->selectInfo("SELECT PASSWORD FROM tbl_reg WHERE PASSWORD='".$pass."' AND EMAIL='".$email."'");  			
 		}
     
     function processing(){
     	$error = "";	
     	if(strlen(trim($_POST['email'])) == 0)
     	   $error.="Введите адрес, ";
     	if(strlen(trim($_POST['pass'])) == 0)   		  
  	  	$error.="Введите пароль, ";
     		 
	  		    if($error != "")
	     	 	echo"<script>alert('$error')</script>";
	     	else{
	     	    if(count($this->haveAccount(trim($_POST['email']), md5(trim($_POST['pass'])))) > 0)
	     	    {     	     
     	    	 setcookie('myId',md5(trim($_POST['pass'])));
     	    	 setcookie('secId',md5(md5(trim($_POST['pass']))));
     	    	 setcookie('myEmail',trim($_POST['email'])); 
     	    	  header("location:?option=user&titlepage=Добро пожаловать");   
				} 
     	    else{
     	    	echo"<script>alert('Пользователь не найден!')</script>";     	    	    	    	
     	        }	
     	     	 	
     	     }	 
  		
     }
	
	function getContent() {

		require_once 'tpls/login.tpl';
	}

}
?>