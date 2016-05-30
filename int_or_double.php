<?php
	$numbers = array('2.2', '99');
	
	foreach($numbers as $v){
		if(filter_var($v, FILTER_VALIDATE_INT))
			echo $v.' is int<br/>';
		elseif(filter_var($v, FILTER_VALIDATE_FLOAT))
			echo $v.' is float/double/real<br/>';
	}
?>