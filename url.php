<html>
<head>
<style type="text/css">
body {background-color:#efefef;}
</style>
<title> SEO Details of the entered URL  </title>
</head>
<body>

<?php 
error_reporting(E_ALL & ~E_NOTICE);
$domain = $_POST["website_url"];
echo "<h3> Page details of the URL : $domain</h3>";
echo "<br/><br/>";
?>
<?php include("keyword.php"); ?>
<?php include("ipaddress.php"); ?>
<?php include("httpcode.php"); ?>
<?php include("links.php"); ?> 
</body>
</html>
