<?php @session_start();?>
<?php
	if ($_SESSION['id'] != "admin")
	{
		echo "<script>"."window.alert('관리자만 접속 가능합니다.');"."location.href='index.php';"."</script>";
	}

	header("Content-Type:text/html; charset=UTF-8");
	include("connect.php");
	echo '<head> <link rel="stylesheet" href="assets/css/main17.css" > </head>';
	$connect= dbconn();

	$query=" select * from member";

	$result= mysqli_query($connect,$query);

	echo "<table border=1>";
	echo "<tr> <th> 회원번호 </th>  <th> 아이디 </th> <th> 이름 </th> <th> 나이 </th> <th> 주소 </th> <th> 전화번호 </th> <th> 이메일 </th> <th> X </th> </tr>";
	while( $member = mysqli_fetch_array($result)  )
	{	if ($member['id'] != "admin")
		{
			echo "<tr>";
			echo "<td>" . $member['mnum']     .  "</td>";
			echo "<td>" . $member['id']     .  "</td>";
			echo "<td>" . $member['name']     .  "</td>";
			echo "<td>" . $member['age']     .  "</td>";
			echo "<td>" . $member['addr']     .  "</td>";
			echo "<td>" . $member['phone']     .  "</td>";
			echo "<td>" . $member['email']     .  "</td>";
			echo "<form method='post' action='admin_member_delete.php'>";
			echo "<td>" . " <input type = hidden   value='$member[id]' name = 'id' ><input type=submit  value = '삭제'  >   " .  "</td>" ;
			echo "</form>";
			echo "</tr>";
		}
	}

	echo "</table>";


?>
