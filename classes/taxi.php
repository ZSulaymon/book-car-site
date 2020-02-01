<?php
class taxi extends cars {
		 
	
	function getContent() {
						
			 $isfree = $this->db->selectInfo("SELECT *FROM tbl_taxi");
			 $busi = $this->db->selectInfo("SELECT *FROM tbl_book_taxi");
			  if(!empty($busi))
			  {			   
					   for($i = 0; $i < count($isfree); $i++)
					   {
					      $max = 0;
						   	for($j = 0; $j < count($busi); $j++)						   	 
						   		if($isfree[$i]['id'] == $busi[$j]['idtaxi']) 				   		 
						   			$max++;				   			 					 				   							   	 
					   	     if($max > 0)
				   	     	$isfree[$i][] = ($isfree[$i]['place'] - $max);
					   }
			 	 
			   }			 
		require_once 'tpls/taxi.tpl';
	}

}
?>