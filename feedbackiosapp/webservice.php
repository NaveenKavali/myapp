<?php

require_once ('soapclient/SforcePartnerClient.php');

$mySforceConnection = new SforcePartnerClient();
$mySforceConnection->createConnection("PartnerWSDL.xml");
$mySforceConnection->login(vikas.y@moldtekindia.com.usgt2, mttl@123);

$query = "SELECT Id, Name, Product_Description__c from Product__c";
$response = $mySforceConnection->query($query);

foreach ($response->records as $record)
{
echo '<tr>
	<td>'.$record->Id.'</td>
	<td>'.$record->fields->Name.'</td>
	<td>'.$record->fields->Product_Description__c.'</td>
	 </tr>';
 }

?>
