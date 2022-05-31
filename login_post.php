<?php
header("Content-Type:text/html; charset=UTF-8");
   include("connect.php");
   $connect= dbconn();
session_start();
$id= $_POST["id"];
$pwd= $_POST["pwd"];


$query=" select * from member where id='$id'";

$result= mysqli_query($connect,$query);
$member= mysqli_fetch_array($result);


if(!$id){
   echo "<script>"."window.alert('아이디를 입력하세요.');"."location.href='index.php';"."</script>";
}elseif(!$member["id"])
{
	echo "<script>"."window.alert('존재하지 않는 회원 아이디 입니다.');"."location.href='index.php';"."</script>";
}elseif(!$pwd){
     echo "<script>"."window.alert('비밀번호를 입력하세요.');"."location.href='index.php';"."</script>";
}elseif($member["pwd"]!=$pwd)
{
	echo "<script>"."window.alert('비밀번호가 틀립니다.');"."location.href='index.php';"."</script>";
}else{
	$_SESSION['id'] = $id;
	echo "<script>"."window.alert('로그인 되었습니다.');"."</script>";
	echo "<script>"."window.alert('메인으로 이동합니다.');"."location.href='index_log.php';"."</script>";
}

if($member["id"] and $member["pwd"]==$pwd){
$tmp=$member["id"]."//".$member["pwd"];
setcookie("COOKIES",$tmp,time()+60*60*24,"/" );

}
?>
