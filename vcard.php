<?php

class vCard{

	public static function createVCard($firstname,$surname,$telephone){

		$vcard =  "BEGIN:VCARD";
		
		$vcard .=  "\n\nVERSION:3.0";
		
		$vcard .= "\n\nFN:".$firstname." ".$surname;
		
		// 'TYPE' can be altered
		$vcard .= "\n\nTEL;TYPE=CELL:".$telephone;
		
		//Example of URL in vCard
		$vcard .= "\n\nitem1.URL:http://google.com";

		$vcard .= "\n\nitem1.X-ABLabel:Google";

		}
	 
	 	$vcard .= "\n\nEND:VCARD";
		
		return $vcard;
	}

}


?>