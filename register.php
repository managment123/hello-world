<?php
//Check for any errors
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
ini_set('display_errors', 1);
//Grab required files 
session_start();
require_once('/home/sb2262/git_environment/rabbitmqphp_example/path.inc');
require_once('/home/sb2262/git_environment/rabbitmqphp_example/get_host_info.inc');
require_once('/home/sb2262/git_environment/rabbitmqphp_example/rabbitMQLib.inc');
$client = new rabbitMQClient("/home/sb2262/git_environment/rabbitmqphp_example/testRabbitMQ.ini","testServer");
if (isset($argv[1]))
{
  $msg = $argv[1];
}
else
{
  $msg = "register";
}
//Get Username + Password
$request = array();
$request['type'] = "register";
$request['username'] = $_POST['username'];
$request['password'] = $_POST['pass'];
$request['message'] = $msg;
$response = $client->send_request($request);
//PHP_EOL should echo in from backend
echo "".PHP_EOL;
//print_r($response);
	//echo"Successfully Registered, you will be redirected in 3 seconds";
	echo "Successfully Registered.\n\n";
	header("refresh:3;url=index1.html");
}
?>
