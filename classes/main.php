<?php
class main extends cars {	
	
	function searching()
	{
	  $searchArray = array();
		if(trim($_POST['searchtext'])!="")
		{  
		$explod = explode(' ', trim($_POST['searchtext']));
		//-----------, dr_name, dr_surname, direction, info, place, tel, taxi_number-------------//Car
		//SELECT * FROM `tbl_car` WHERE `dr_surname` LIKE '%ism%'
			for($i = 0; $i < count($explod); $i++)
			{
			$explod[$i] = trim($explod[$i]);
			$foolArrayTaxi = $this->db->selectInfo("SELECT id FROM tbl_taxi WHERE dr_name LIKE  '%$explod[$i]%' OR dr_surname LIKE  '%$explod[$i]%' OR direction LIKE  '%$explod[$i]%' OR place LIKE  '%$explod[$i]%' OR info LIKE  '%$explod[$i]%' OR tel LIKE  '%$explod[$i]%' OR taxi_number LIKE  '%$explod[$i]%'");
			
			$foolArrayCar = $this->db->selectInfo("SELECT id FROM tbl_car WHERE dr_name LIKE  '%$explod[$i]%' OR dr_surname LIKE  '%$explod[$i]%'  OR info LIKE  '%$explod[$i]%' OR tel LIKE  '%$explod[$i]%' OR car_number LIKE  '%$explod[$i]%'");		     		   	
		    }
				
	    }
	}
	
	
	function getContent() {	
	  $taxi = $this->db->selectInfo("SELECT *FROM tbl_taxi");
	  $car = $this->db->selectInfo("SELECT *FROM tbl_car");
	   $firstTaxi = 0;
	   $firstCar = 0;
	  $threeTaxis = array(0 => NULL, 1 => NULL, 2 => NULL);
	  $threeCars = array(0 => NULL, 1 => NULL, 2 => NULL);
	  for($i = 0; $i < $n = count($taxi); $i++){
	  	if($taxi[$i]['regDate'] >= $firstTaxi)
	  	{
	  	 $threeTaxis[2] = $threeTaxis[1];
	  	 $threeTaxis[1] = $threeTaxis[0];
	  	 $threeTaxis[0] = $taxi[$i];
	  	$firstTaxi = $taxi[$i]['regDate'];	
	  	}	  	
	  }
	  
	   for($i = 0; $i < $n = count($car); $i++){
	  	if($car[$i]['regDate'] >= $firstCar)
	  	{
	  	 $threeCars[2] = $threeCars[1];
	  	 $threeCars[1] = $threeCars[0];
	  	 $threeCars[0] = $car[$i];
	  	$firstCar = $car[$i]['regDate'];	
	  	}	  	
	  }
	   unset($firstCar);
	   unset($firstTaxi);
	   unset($taxi);
	   unset($car);
	  	
		require_once 'tpls/main.tpl';
	}

}
?>