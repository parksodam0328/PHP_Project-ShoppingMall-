<?
	include "../../php/auth.php";	
	include "../../php/config.php";	
	include "../../php/util.php";	
	$connect = my_connect($host, $dbid, $dbpass, $dbname);

	$query = "select * from member where seq_num='$m_num'";
	$result = mysql_query($query, $connect);
	$rows = mysql_fetch_array($result);

	if($rows) {
		$query1 = "delete from member where seq_num='$m_num'";
		mysql_query($query1, $connect);	
	}

	//���� ��ǰ���� ������ DB �����ڵ� �߰�


	echo "<script>
			window.alert('ȸ�������� �����Ǿ����ϴ�.');
		</script>";
	echo "<meta http-equiv='Refresh' content='0;url=admin_member_list.php?page=$page'>";

?>