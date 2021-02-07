<?php

function filter($cmd)
{
	$cmdarrays = array("cat", "less", "more","tac","head","tail","od","cp","mv","nl","vi","vim",";","|","whoami","php","ls","echo");
	
	foreach ($cmdarrays as &$value )
	{
		if  (stristr($cmd, $value))
		{
			return false;
		}
	}
	return true;
}

function filterip($ip)
{
	if(filter_var($ip, FILTER_VALIDATE_IP))
	 {
         return true;
     }

     return false;
      
}
	
?>