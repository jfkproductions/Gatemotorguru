<?php

    $db = "gatemm_db1";
    $dbusername = "gatemm_1_w";
    $dbpassword = "vVr6B6g8";
    $dbhostname = "dedi224.jnb2.host-h.net";
    $trackTable = "track";

	
    //Connect to Database - DB Details filled in from global vars
    $username = "$dbusername";
    $password = "$dbpassword";
    $hostname = "$dbhostname";    
    $dbh = mysql_connect($hostname, $username, $password); //or die('log-db-off');
    if ($dbh) {
        //Only attempt TRACK table logging if database login success

        $selected = mysql_select_db("$db",$dbh) or die("log-db-select");
			
	if(!isset($_SESSION['views'])) {
		//This is a new session that we've just created for the first time
		$views  = $_SESSION['views'] = 1;
		$pages  = $_SESSION['pages'] = $_SERVER['REQUEST_URI'];
		$refurl = $_SESSION['refUrl'] = getenv("HTTP_REFERER"); // or $_SERVER['HTTP_REFERER']
		$adsource=$_SESSION['adsource'] = (isset($_GET['adsource'])) ? $_GET['adsource'] : "" ;
		$adwkeyword=$_SESSION['adwkeyword'] = (isset($_GET['adwkeyword']))? $_GET['adwkeyword'] : "";
		$adwsite=$_SESSION['adwsite'] = (isset($_GET['adwsite'])) ? $_GET['adwsite'] : "";
		$querystring = $_SESSION['querystring'] = $_SERVER["QUERY_STRING"];
		$postvars = $_SESSION['postvars']= $_POST; //perhaps should escape , and all mysql chars
			
		//prefix pages with andries if andries cookie is set, to identify my own site browsing activities in the logs
		if ($_COOKIE['andries'] == 'andries')
			$_SESSION['pages'] = $pages = "andries|$pages";
		
		//Build SQL Insert
		$insertSql = "INSERT INTO `$trackTable` (datetime,views,pages,refurl,adsource,adwkeyword,adwsite,lastdatetime) ".
							"VALUES ( NOW(), $views,'$pages','$refurl','$adsource','$adwkeyword','$adwsite', NOW())";          
		mysql_query($insertSql);
		
		//Save the database row ID back into the session for future updates
		$_SESSION['id'] = mysql_insert_id();
		
	}
	else {
		//Fetch DB row ID to update
		$id = $_SESSION['id'];
				
		//Existig Session, just add the new page view details
		$views = $_SESSION['views'] = $_SESSION['views']+ 1;
		$pages = $_SESSION['pages'] .= "|".$_SERVER['REQUEST_URI']; //append page, items seperated by |

		//Add any further Post details if it was a post
		if ($_SERVER['REQUEST_METHOD']=='POST')
			$postvars = ($_SESSION['postvars'] .= "|".$_POST);//perhaps escape , and all mysql chars
		
		//Build SQL Update
		$updateSql = "UPDATE `$trackTable` SET views=$views,pages='$pages',lastdatetime=NOW() WHERE id=$id"; 

		mysql_query($updateSql);
		
	}
    }
	
/* This script keeps nice site visitor stats in the database, but only for browsers with cookies enabled (session ID urls mess up SEO).
	Stores
	 id = entry UID
	 datetime of visitor entering the site
	 pages = firstpageuri | nextpageuri | exitpageuri
	 refurl   = Refering site URL when user entered site
	 adsource = Original Get Var adSource... optionally populated based on traffic source. e.g. ?adSource=linkedin-campaign-advariation
	 adwkeyword = .... [ Get Var ]
	 adwsite = ...  [ Get Var ]
	 

*/

?>