<!--?php
require_once 'vendor/autoload.php';
 
$client = new \Github\Client();
$repositories = $client--->api('user')->repositories('kakakikikeke');
for ($i = 0; $i < count($repositories); $i++) {
  $repos = $repositories[$i];
  foreach ($repos as $key => $value) {
    if ($key === "name") {
      echo $key . " => " . $value . "\n";
    }
  }
}
?>