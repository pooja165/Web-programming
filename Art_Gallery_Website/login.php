<?php
	if(isset($_GET["username"]) && !empty($_GET["username"]) && isset($_GET["password"]) && !empty($_GET["password"]))
	{
$flag = 0;
	$xml=simplexml_load_file("signup.xml") or die("Error: Cannot create object");
	foreach($xml->children() as $info) { 
		if(($info->Username == $_GET["username"]) && ($info->Password == $_GET["password"]))
		{
			echo "Match!!";
			$flag = 1;
			
			if(file_exists('login.xml'))
			{
				echo "file exists .. so appending comments";	
				$xml = file_get_contents('login.xml');

				$xmldoc = new DomDocument("1.0", "UTF-8");    
				$xmldoc->formatOutput = true;
				$xmldoc->loadXML($xml);
				$main = $xmldoc->firstChild;  
				
				$root = $xmldoc->createElement('info');
				$root = $main->appendChild( $root );
				
				$nameElement = $xmldoc->createElement('Username');
				$root->appendChild($nameElement);
				$nameText = $xmldoc->createTextNode($_GET["username"]);
				$nameElement->appendChild($nameText);
				
				$nameElement = $xmldoc->createElement('Password');
				$root->appendChild($nameElement);
				$nameText = $xmldoc->createTextNode($_GET["password"]);
				$nameElement->appendChild($nameText);
				
				$xmldoc->save('login.xml');	
			}
			else
			{
				echo "file does not exists ..  creating comment file now";

				//create xml file for the first comment
				$xml = new DOMDocument("1.0", "UTF-8");
				
				$main = $xml->createElement('users');
				$main = $xml->appendChild( $main );
				
				$root = $xml->createElement('info');
				$root = $main->appendChild( $root );
				
				$username = $xml->createElement('Username');
				$username = $root->appendChild( $username );	
				$username->nodeValue = $_GET["username"];
				
				$pass = $xml->createElement('Password');
				$pass = $root->appendChild( $pass );	
				$pass->nodeValue = $_GET["password"];
				
				$xml->FormatOutput = true;
				$xml->save('login.xml');
			}			
			break;
		}
	} 
	if($flag == 0)
		echo "No match found .. Please check username/password !!";
	}
?>