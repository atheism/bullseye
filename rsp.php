<?php
$ret = file_put_contents("test.txt", file_get_contents('php://input'), FILE_APPEND | LOCK_EX);
if($ret === false) {
	                die('There was an error writing this file');
}
else {
	            echo "$ret bytes written to file";
}
file_put_contents("test.txt", "\n", FILE_APPEND | LOCK_EX);
?>
