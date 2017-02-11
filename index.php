<?php
	/**
	 * 
	 *  Чат с использованием PDO
	 * 
	 * 
	 */
	 
	 $usr = "root";
	 $pswrd = "";

	 $config = array(PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC);
	 $db_connect = new PDO('mysql:host=localhost;dbname=cms', $usr,$pswrd,$config);
	 $stmt = $db_connect->query('SELECT* From user,message');

	 foreach( $stmt as $row)
	 {
		 echo $row["name"];
		 echo $row["msg"];
		 }
	
	
