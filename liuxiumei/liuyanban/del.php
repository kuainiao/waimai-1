<html>
	<head>
		<title>�ı����԰�</title>
		<link href="css/lyb.css" rel="stylesheet" type="text/css">
	</head>
	<body>
	<?php include("head.php")?>

<?php
//$id;
	$id=$_GET['id'];
	//echo $id;
	$ly_info=file_get_contents("lyb.txt");
	$lyinfoArray=explode("@@@",$ly_info);
	unset($lyinfoArray[$id]);
	$rewriteTolyb=implode("@@@",$lyinfoArray);
	file_put_contents("lyb.txt",$rewriteTolyb);
	echo"ɾ���ɹ���";
?>
</body>
</html>