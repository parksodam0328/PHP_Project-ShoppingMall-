<?
	include "../php/config.php";	//Session �� DB ���ἳ��
	include "../php/util.php";		//���� ��ƿ��Ƽ �Լ�
	
	//mysql ����
	$connect = my_connect($host, $dbid, $dbpass, $dbname);

	if(!isset($_SESSION["p_id"]) || !isset($_SESSION["p_name"])) {
		err_msg("�α��� ������ �����ϴ�. �ٽ� �α��� ���ּ���..");
	}

	if($mode=='view')  {
		if($gb=='1') {
			$query = "update message_info
			          set receive_del='Y'
					  where mnum='$mnum'";
			$result = mysql_query($query, $connect);
	echo "<meta http-equiv='Refresh' content='0;url=message_1.php'>";

		}
		else if($gb=='2') {
			$query = "update message_info
			          set send_del='Y'
					  where mnum='$mnum'";
			$result = mysql_query($query, $connect);
	echo "<meta http-equiv='Refresh' content='0;url=message_2.php'>";
		}
	}
	else {
		if($gb=='1') {
			for($i=0; $i<sizeof($mnum); $i++) {
				$query = "update message_info
			          set receive_del='Y'
					  where mnum='$mnum[$i]'";
				$result = mysql_query($query, $connect);
			}
echo "<meta http-equiv='Refresh' content='0;url=message_1.php'>";
		}
	else if($gb=='2') {
			for($i=0; $i<sizeof($mnum); $i++) {
				$query = "update message_info
			          set send_del='Y'
					  where mnum='$mnum[$i]'";
				$result = mysql_query($query, $connect);
			}
echo "<meta http-equiv='Refresh' content='0;url=message_2.php'>";
		}


} ?>