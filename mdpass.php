<?php 

$password;
$encrypted_pwd;

if (!isset($argv[1])) {
	echo 'Please enter a password to hashing via MD5 algorithum';
} else {
	$password = $argv[1];

	$encrypted_pwd = md5($password);
	echo "\n";
	echo "Password = ".$password . "\n" . "Encrypted password = " . $encrypted_pwd . "\n\n";
}



?>
