<?php
$config = array
( 
	"database"	=> array
	(
		// can either be "sqlite" or "mysql"
		"type"	=>	"sqlite",

		// if using sqlite, the following entries can be ignored
		// do not use localhost, but 127.0.0.1 instead
		"server"		=>	"127.0.0.1",
		"database"	=>	"database",
		"username"	=>	"username",
		"password"	=>	"********",
		"prefix"		=>	"zC1_",
	),
);

$admin_password = "change_me";
?>