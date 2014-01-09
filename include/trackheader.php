<?php
	//Force the creation of Cookie-based session
	ini_set('session.use_trans_sid', false); 
	ini_set('session.use_only_cookies', true); 
	ini_set('url_rewriter.tags', ''); 
	session_start();
	//Special ?notrack=1 can be used to mark all my own browsing and testing in logs
	if (isset($_GET['notrack']) && $_GET['notrack'] == '1') {
		//set permanent cookie on my computer to mark all my browsing activities
		setcookie("andries", "andries", time()+ 86400*365);
	}
?>