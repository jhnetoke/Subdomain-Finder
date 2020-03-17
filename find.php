<?php
/*
  Halo bro? liat² ya?
*/
echo "/*
  Subdomain finder | Simple
  thaks to api N45HT and my team
  XploitSec-ID
*/\n\n";
$api = "https://api.n45ht.or.id/v1/subdomain-enumeration?domain="; //thanks to n45ht
echo "input target (tanpa http/https)\n-> ";
$target = trim(fgets(STDIN));
echo "\n";
$satu = $api.$target;
$get = file_get_contents($satu);
$get = json_decode($get,true);
$res = $get['response'];
$tot = count($get['subdomains']);
echo "Response: ".$res."\n";
echo "Message: ".$get['message']."\n";
echo "Subdomains-> $tot\n";
foreach($get['subdomains'] as $sub){
 echo " ".$sub."\n";
}
?>
