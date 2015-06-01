<?php

function hashify($password,$salt,$algo='sha256',$iterations = 901,$bsize = 24){
$key = base64_encode(hash_pbkdf2('sha256',$password,$salt,$iterations,24,true));
return sprintf("PBKDF2$%s$%d$%s$%s\n",
			"sha256",
			$iterations,
			$salt,
			$key);
}

$pass='testuser';
$salt='testhash';
echo hashify($pass,$salt)

?>
