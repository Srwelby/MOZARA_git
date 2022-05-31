<?php
header('Content-Type: text/html; charset=UTF-8');

	include("connect.php");
	$connect = dbconn();

	$id = $_POST["id"];
	$pwd = $_POST["pwd"];
	$name = $_POST["name"];
	$age = $_POST["age"];
	$phone = $_POST["phone"];
	$adr = $_POST["adr"];
	$email = $_POST["email"];


	$query2=" select * from member where id='$id'";

	$result2= mysqli_query($connect,$query2);

	$member= mysqli_fetch_array($result2);

	if($id == $member["id"]){
		echo "<script>"."window.alert('중복된 아이디가 있습니다.');"."location.href='Join.php';"."</script>";
	}else{

		$query = "insert into member(id, pwd, name, age , phone , addr , email)values
		('$id', '$pwd', '$name', '$age' , '$phone' , '$adr' , '$email')";
		mysqli_query($connect,"set names utf8",);
		mysqli_query($connect,$query);
	}
?>
<script>
window.alert('회원가입이 완료되었습니다.');
location.href='index.php';
</script>
