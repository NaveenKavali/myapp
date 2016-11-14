<?php
define ("salesforce_username", 'vikas.y@moldtekindia.com.usgt2');
define ("salesforce_password", 'mttl@123');
define ("salesforce_wsdl", 'soapclient/enterprise.wsdl.xml');
 
require_once ('soapclient/SforcePartnerClient.php');
ini_set('soap.wsdl_cache_enabled', 0);
ini_set('soap.wsdl_cache_ttl', 0);
 
//Create a new Salesforce Partner object
$connection = new SforcePartnerClient();
 
//Create the SOAP connection to Salesforce
try {
 $connection->createConnection(salesforce_wsdl);
} catch (Exception $e) {
 //Salesforce could be down or error in configuration
 //Check your WSDL path. Handle this exception.
}
 
//Pass login details to Salesforce
try {
 $connection->login(salesforce_username, salesforce_password);
} catch (Exception $e) {
 //Make sure your username and password is correct
 //Otherwise, handle this exception
}
//Obtaining object containing record data with Lead ID
$queryLead = "SELECT LastName, FirstName, Phone, Email FROM Contact";
$resultLead = $connection->query($queryLead);

 
//Checking if the query for a Lead with ID returns an object
if ($resultLead->size) {
 //The lead exists
 //Display or parse values from the object
}
else {
 echo "This lead does not exist in Salesforce.";
}
?>
