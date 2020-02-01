<?php
class region extends cars {
		 
	
	function getContent() {
			
			//$check = $tthis->db->selectInfo()
			 
			/*  $isfree = $this->db->selectInfo("SELECT *FROM tbl_taxi AS f WHERE NOT EXISTS(SELECT *FROM tbl_order_taxi AS b WHERE b.place != 0)");
			 if(!empty($isfree))echo $isfree[0]['tel'];
			 
			  */
			 $isfree = $this->db->selectInfo("SELECT *FROM tbl_taxi WHERE direction='".$_GET['region']."'");
			 $busi = $this->db->selectInfo("SELECT *FROM tbl_book_taxi");
			  if(!empty($busi))
			  {
			 	 for($i = 0; $i < $n = count($busi); $i++)
			 	 {
			 	     for($j = 0; $j < $t = count($isfree); $j++)
			 	     {
			 	     	if($isfree[$j]['id'] == $busi[$i]['idtaxi'] && $busi[$i]['place'] == 0)
			 	     	{
			 	     		unset ($isfree[$j]);
			 	     		break;
					     }
					     else if ($isfree[$j]['id'] == $busi[$i]['idtaxi'] && $busi[$i]['place'] != 0)
					     {
					     $isfree[$j][] = ($isfree[$j]['place'] - $busi[$i]['place']);					     	
					     }
			 	     }
			 	 	
			 	 }
			 	 
			   }
			   unset($busi);
			  		  
			 
		require_once 'tpls/taxi.tpl';
	}

}
?>