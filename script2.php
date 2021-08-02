<!DOCTYPE html>
<html>
<head>
	<title>php demo</title>
</head>
<body>
	<?php

	/*$naivasha =$_POST["Naivasha"];
	$nairobi =$_POST["Nairobi"];
	$mombasa =$_POST["Mombasa"];
	$nanyuki =$_POST["Nanyuki"];
	$lamu =$_POST["Lamu"];
	$kilifi =$_POST["Kilifi"];
	$riftvalley =$_POST["Riftvalley"];
	$bamburi =$_POST["Bamburi"];
	$diani =$_POST["Diani"];

	echo "<h2>Search details</h2>";

	echo "Naivasha " .$naivasha."<br/>";
	echo "Nairobi " .$nairobi."<br/>";
	echo "Mombasa " .$mombasa."<br/>";
	echo "Nanyuki " .$nanyuki."<br/>";
	echo "Lamu " .$lamu."<br/>";
	echo "Kilifi " .$kilifi."<br/>";
	echo "Riftvalley " .$riftvalley."<br/>";
	echo "Bamburi " .$bamburi."<br/>";
	echo "Diani " .$diani."<br/>";*/


	$xmlDoc=new DOMDocument();
	$xmlDoc->load("links.xml");

	$x=$xmlDoc-
	>getElementsByTagName('link');

	$q=$_GET["q"];

	if (strlen($q)>0){
		$hint="";
		for($i=0; $i<($x->length);
	$i++){
			$y=$x->item($i)-
	>getElementsByTagName('title');
		$z=$x->item($i)-
	>getElementsByTagName('url');
			if ($y->item(0)-
	>nodeType==1) {

			if (stristr($y->item(0)-
	>childNodes->item(0)-
	>nodeValue,$q))	{
			if($hint==""){
				$hint="<a href='" .
				$z->item(0)-
	>childNodes->item(0)->nodeValue .
			"' target='blank'>" .
			$y->item(0)-
	>childNodes->item(0)->nodeValue .
	"</a>";
			} else {
				$hint=$hint ."br /><a href='" .
				$z->item(0)-
	>childNodes->item(0)->nodeValue .
				"' target='_blank'>" .
				$y->item(0)-
	>childNodes->item(0)->nodeValue .
	"</a>";
			}	
		}
	}
}

}

if($hint=="") {
	$response="no suggestion";
} else {
	$response=$hint;
}

echo $response;
	?>
	</body>
	</html>