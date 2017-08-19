<?php
if(isset($_GET["comment_user"]) && !empty($_GET["comment_user"]))
{
if(file_exists('comments.xml'))
{
	echo "file exists .. so appending comments";	
	$xml = file_get_contents('comments.xml');

	$xmldoc = new DomDocument("1.0", "UTF-8");    
	$xmldoc->formatOutput = true;
	$xmldoc->loadXML($xml);
	$root = $xmldoc->firstChild;  
	//if($_GET["comment"] == "a")
	$nameElement = $xmldoc->createElement($_GET["comment"]);
	//$nameElement = $xmldoc->createElement('paintingBoyPipe');
	$root->appendChild($nameElement);
	$nameText = $xmldoc->createTextNode($_GET["comment_user"]);
	$nameElement->appendChild($nameText);		
	$xmldoc->save('comments.xml');	
}
else
{
	echo "file does not exists ..  creating comment file now";

	//create xml file for the first comment
	$xml = new DOMDocument("1.0", "UTF-8");
	
	$root = $xml->createElement('Paintings');
	$root = $xml->appendChild( $root );
	
	//if($_GET["comment"] == "a")
	//$comment = $xml->createElement('paintingBoyPipe');

	$comment = $xml->createElement($_GET["comment"]);
	$comment = $root->appendChild( $comment );
	
	$comment->nodeValue = $_GET["comment_user"];
	
	$xml->FormatOutput = true;
	$xml->save('comments.xml');

}
}
?>