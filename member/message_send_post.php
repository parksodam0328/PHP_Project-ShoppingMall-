<?
	include "../php/config.php";	//Session �� DB ���ἳ��
	include "../php/util.php";		//���� ��ƿ��Ƽ �Լ�
	
	//mysql ����
	$connect = my_connect($host, $dbid, $dbpass, $dbname);

	if(!isset($_SESSION["p_id"]) || !isset($_SESSION["p_name"])) {
		err_msg("�α��� ������ �����ϴ�. �ٽ� �α��� ���ּ���..");
	}

	$query = "select id from member where id = '$receive_id'";
	$result = mysql_query($query, $connect);
	$total_num = mysql_num_rows($result);

	if(!$total_num) {
		err_msg("�������� �ʴ� ���̵� �Դϴ�.");
	}
	else {
		$msg = addslashes($msg);
		$query1 = 
"insert into message_info(sendid_fk, receiveid_fk, message, send_reg)
values('$_SESSION[p_id]', '$receive_id', '$msg', now())";
		$result1 = mysql_query($query1, $connect);

		if(!$result1) {
			err_msg("�����ͺ��̽� ������ �߻��Ͽ����ϴ�.");
		}
		else {
			echo "
				<script>
					window.alert('�޽����� �����Ͽ����ϴ�.');
				</script>";
			echo "<meta http-equiv='Refresh'content='0;url=message_2.php'>";
		}
	}
?>

