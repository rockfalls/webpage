<?php

$name = $_POST["name2"];
$email = $_POST["email2"];
$msg = $_POST["message2"];

$to = 'sinbaramsoft@naver.com';
$subject = "$name 문의사항";
$message = "이름 : $name<br> 이메일 : $email<br>내용 : $msg";
$from = "sinbaramsoft@naver.com";
$headers = "From: $from";
mail($to, $subject, $message, $headers);

echo "<script>
alert('이메일을 보냈습니다');
window.location.replace('http://reposoft.cafe24.com');
</script>";
?>

<html>
	<head>
		 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		
	</head>
	
	<body>
		
	</body>
</html>