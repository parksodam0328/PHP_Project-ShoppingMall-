<?
	include "../../php/auth.php";	
	include "../../php/config.php";	
	include "../../php/util.php";	
	$connect = my_connect($host, $dbid, $dbpass, $dbname);

	$name = addslashes($name);
	$email = addslashes($email);
	$address1 = addslashes($address1);
	$address2 = addslashes($address2);

	$query = "update member
			  set name='$name',
				passwd = '$password',
				email='$email',
				phone = '$phone',
				mobile = '$mobile',
				zipcode = '$zipcode',
				address1 = '$address1',
				address2 = '$address2'
			  where seq_num = '$num'";
	$result = mysql_query($query, $connect);
	
	if(!$result) {
		err_msg("DB �۾��� ������ �߻��߽��ϴ�.");
	}
	else {
	echo "<script>
			window.alert('������ ���������� �����Ǿ����ϴ�.');
		</script>";
	echo "<meta http-equiv='Refresh' content='0;url=member_view.php?num=$num'>";
	}

	

?>

