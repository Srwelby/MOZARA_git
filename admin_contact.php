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

	$query=" select * from contact";

	$result= mysqli_query($connect,$query);

	echo "<table border=1>";
	echo "<tr>  <th> 문의번호 </th> <th> 아이디 </th> <th> 문의내용 </th> <th> X </th> </tr>";
	while( $member = mysqli_fetch_array($result)  )
	{
		echo "<tr height=80>";
		echo "<td>" . $member['cNum']     .  "</td>";

		$query2=" select * from member where mnum = '$member[mnum]' ";

		$result2= mysqli_query($connect,$query2);
		$member2 = mysqli_fetch_array($result2);

		echo "<td>" . $member2['id']     .  "</td>";
		echo "<td>" . $member['Contact']     .  "</td>";

		echo "<form method='post' action='admin_contact_delete.php'> ";
		echo "<td>" . "<input type = hidden   value='$member[cNum]' name = 'id' ><input type=submit  value = '삭제'  >  " .  "</td>" ;
		echo "</form>";
		echo "</tr>";
		echo "<tr height=80>";
		echo "<form method='post' action='admin_contact_answer.php'>";

		if ( $member["Answer"] != NULL  )
		{
			echo "<th colspan=4> 문의 답변 :  $member[Answer] </th> ";
		}
		else
		{
			echo "<th colspan=3> <input type = text placeholder='답변 쓰기' name='name'> <input type = hidden   value=$member[cNum] name = 'id' >  </th> ";
			echo "<th>" . "<input type=submit  value = '답변'  >"   .  "</th>" ;
		}
		echo "</form>";
		echo "</tr>";

	}

	echo "</table>";


?>
