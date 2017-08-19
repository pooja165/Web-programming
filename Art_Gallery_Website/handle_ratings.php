<?php

if(file_exists('ratings.xml'))
{
	echo "file exists .. so appending comments";	
	$xml = file_get_contents('ratings.xml');

	$xmldoc = new DomDocument("1.0", "UTF-8");    
	$xmldoc->formatOutput = true;
	$xmldoc->loadXML($xml);
	$root = $xmldoc->firstChild;        	
	$nameElement = $xmldoc->createElement($_GET["ratingno"]);
	$root->appendChild($nameElement);
	$nameText = $xmldoc->createTextNode($_GET["rating"]);
	$nameElement->appendChild($nameText);		
	$xmldoc->save('ratings.xml');	
}
else
{
	echo "file does not exists ..  creating comment file now";

	//create xml file for the first comment
	$xml = new DOMDocument("1.0", "UTF-8");
	
	$root = $xml->createElement('Paintings');
	$root = $xml->appendChild( $root );
	
	$comment = $xml->createElement($_GET["ratingno"]);
	$comment = $root->appendChild( $comment );
	
	$comment->nodeValue = $_GET["rating"];
	
	$xml->FormatOutput = true;
	$xml->save('ratings.xml');
}

?>