<!-- Elmir Kouliev ~ elmirkouliev.com -->
<?php
	
	//Require class to use function
	require('vcard.php');

	//Set the page content type
	header('Content-type: text/x-vcard');

	//Set content-disposition header, filename can be altered
	header('Content-Disposition: attachment; filename="elmir.vcf"');

	//Call vCard function to echo vCard script
	echo createVCard('Elmir','Kouliev','000-000-0000');

?>