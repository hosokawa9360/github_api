<!--?php
require_once 'vendor/autoload.php';
 
$client = new \Github\Client();
$readme = $client--->api('repo')->readme('kakakikikeke', 'java-signature');
echo base64_decode($readme['content']);
?>