<?php
require_once ('soapclient/SforceEnterpriseClient.php');

$mySforceConnection = new SforceEnterpriseClient();
$mySoapClient = $mySforceConnection->createConnection("enterprise.wsdl.xml");
$mylogin = $mySforceConnection->login("vikas.y@moldtekindia.com.usgt2", "mttl@123");
if ($mylogin){
 echo 'yes';
}
else {
echo 'not';
}
?>
