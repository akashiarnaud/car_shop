<?php function getPage(){
	if(isset($_GET['page'])){
		$page=$_GET['page'];
		$page=$page.".php";
		include($page);		
	}
}
?>