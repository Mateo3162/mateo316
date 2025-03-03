<?php
session_start();
$response = [];

//echo json_encode($_GET);
$response["msg"] = json_encode($_SESSION);


$u = filter_input(INPUT_GET, "u", FILTER_SANITIZE_SPECIAL_CHARS);
$p = filter_input(INPUT_GET, "p", FILTER_SANITIZE_SPECIAL_CHARS);

$filename = "cs.json";
$fh = fopen($filename, "r");
$creds = json_decode(fread($fh, filesize($filename)),true);
fclose($fh);

$response["success"] = "false";
foreach ($creds as $entry) {
//echo "$u - {$entry["user"]} - $p - {$entry["pass"]} <br>";
	if ($u === $entry["user"] && $p === $entry["pass"]) {
		$response["success"] = "true";
		$_SESSION["valid"] = true;
		$_SESSION["user"] = $u;
	}
}

echo json_encode($response);

?>