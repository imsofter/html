<?php
$keystory="as89jkleralj123ruasdf904ja";
if(isset($_GET['key'])){
	$key = $_GET['key'];
	if($key!=$keystory){
		die("invalidate");
	}
}else{
	die("invalidate");
}

require_once('Git.php');
 
$repo = Git::open('../'); 

$repo->pull('origin', 'master');