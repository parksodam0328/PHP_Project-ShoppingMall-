<?
	include "../php/config.php";	//Session �� DB ���ἳ��
	include "../php/util.php";		//���� ��ƿ��Ƽ �Լ�
	
	//mysql ����
	$connect = my_connect($host, $dbid, $dbpass, $dbname);

if(!isset($_SESSION["p_id"]) || !isset($_SESSION["p_name"])) {
	err_msg("�α��� ������ �����ϴ�. �ٽ� �α����� �ּ���..");
}

	$name = addslashes($name);
	$eamil = addslashes($email);
	$address1 = addslashes($address1);
	$address2 = addslashes($address2);
	$phone = $phone1."-".$phone2."-".$phone3;
	$hphone = $hphone1."-".$hphone2."-".$hphone3;
	$zipcode = $zipcode1."-".$zipcode2;
	
	$query = "update member
			  set passwd = '$passwd',
			      name = '$name',
				  email = '$email',
				  phone = '$phone',
				  mobile = '$hphone',
				  zipcode = '$zipcode',
				  address1 = '$address1',
  				  address2 = '$address2'
              where id = '$_SESSION[p_id]' ";
	$result = mysql_query($query, $connect);

	if(!$result) {
		err_msg("�����ͺ��̽� ������ �߻��Ͽ����ϴ�.");
	}
	else {
		//������ �ٽ� �ο�
		$_SESSION["p_name"] = $name;
		$_SESSION["p_email"] = $email;

		echo "
		<script>
			window.alert('���������� ������ �����Ǿ����ϴ�.');
		</script>";
echo "<meta http-equiv='Refresh'content='0;url=mem_edit.php'>";
	}
?>