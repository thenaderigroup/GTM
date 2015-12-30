<?php 
//unset ($_COOKIE['sffvi']);
//$newvisitor = 1;
//exit;
if((!isset($_COOKIE['sffvi'])) || ($_COOKIE['sffvi']!='1')) {
    setcookie('sffvi', '1', time() + (172800 * 30), "/"); // 86400 = 1 day, 172800 = 2 days
	$newvisitor = 1;
}
else
{
	$newvisitor = 0;
}
?>

