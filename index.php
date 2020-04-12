<html>
<head>
<title>TXT Mass 301 Checker Premium (Ertugrul TURAN - T13R - NinjaNetwork)</title>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>


<table>
<tr>
    <th>TXT List Sites (redirect.txt)</th>
    <th>Redirect 301 (Google bot Ip + UserAgent)</th>
  </tr>
<?php
set_time_limit(0);
error_reporting(E_ALL);
$v4api = base64_decode("aHR0cHM6Ly93d3cuZ29vZ2xlYXBpcy5jb20vcGFnZXNwZWVkb25saW5lL3Y1L3J1blBhZ2VzcGVlZD91cmw9");
$dosya = file('redirect.txt');
$nodes = $dosya;
$domainler = array();
$node_count = count($nodes);
for($i = 0; $i < $node_count; $i++)
{
	$url = trim($nodes[$i]);
	$domainler[$i] = $url; 
$ch = curl_init($v4api.$url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_NOBODY, 0);
curl_setopt($ch, CURLOPT_USERAGENT, "Googlebot/2.1 (+http://www.googlebot.com/bot.html)");
$v4t1 = curl_exec($ch);
preg_match_all('@"id": "(.*?)",@si',$v4t1,$t13r);
echo "<tr><td>".$url."</td>";
print_r("<td>".$t13r[1][0]."</td></tr>");
}
?>
</table>

</body>
</html>
