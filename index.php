<?php
include_once("php_includes/check_login_status.php");
$sql = "SELECT username FROM users WHERE activated='1'";
$query = mysqli_query($db_conx, $sql);
$usernumrows = mysqli_num_rows($query);
$userlist = "";
while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)){
	$u = $row["username"];
	$userlist .='<a href = "user.php?u='.$u.'">'.$u.'</a> &nbsp; | &nbsp;';
}
?>
<!DOCTYPE html>
<html>
	<head>
	<meta charset="UTF-8">
		<title>Piniti web site</title>
		<link rel="stylesheet" href="style/style.css">
		<script src="js/main.js"></script>
	</head>
<body>
<?php include_once("template_pageTop.php"); ?>
<div id="pageMiddle">
  &nbsp;
</div>
<?php include_once("template_pageBottom.php"); ?>
</body>
</html>