<?
	include "../php/config.php";	//Session �� DB ���ἳ��
	include "../php/util.php";		//���� ��ƿ��Ƽ �Լ�
	
	//mysql ����
	$connect = my_connect($host, $dbid, $dbpass, $dbname);
	
	$jnumber = $jumin1."-".$jumin2;
	$id = addslashes($id);

$query = "select id from member where id = '$id' or jnumber='$jnumber'";
$result = mysql_query($query, $connect);
$total_num = mysql_num_rows($result);

if($total_num) {
	echo "
		<script>
			window.alert('���̵� �ֹι�ȣ �� �ߺ��� ���� �ֽ��ϴ�.');
			history.go(-1);
		</script>
		exit; ";
}
else {
	$email = addslashes($email);
	$address1 = addslashes($address1);
	$address2 = addslashes($address2);
	$phone = $phone1."-".$phone2."-".$phone3;
	$hphone = $hphone1."-".$hphone2."-".$hphone3;
	$zipcode = $zipcode1."-".$zipcode2;

$query1 = "insert into member(id,passwd,email,name,jnumber,phone,mobile,zipcode,address1,address2,reg_date)
values('$id','$passwd','$email','$name','$jnumber', '$phone', '$hphone', '$zipcode', '$address1', '$address2', now())";

$result1 = mysql_query($query1, $connect);

if(!$result1) {
	err_msg("�����ͺ��̽� ������ �߻��Ͽ����ϴ�.");
}
else {
	echo "<script>
			window.alert('���������� ȸ�������� �Ǿ����ϴ�. �α��� �� ����ϼ���..!');
		</script>";
echo "<meta http-equiv='Refresh' content='0;url=/index.php'>";
}
}
?>