<?
	include "../php/config.php";	//Session �� DB ���ἳ��
	include "../php/util.php";		//���� ��ƿ��Ƽ �Լ�
	
	//mysql ����
	$connect = my_connect($host, $dbid, $dbpass, $dbname);

	if(!$name || !$jumin1 || !$jumin2 || !$id) {
			err_msg("�������� �����ϼ���");
	}

	$jnumber = $jumin1."-".$jumin2;
	$query = "select * from member
          where name='$name' and jnumber='$jnumber' and id='$id'";
	$result = mysql_query($query, $connect);
	$rows = mysql_fetch_array($result);
	mysql_free_result($result);

	if(!$rows) {  //���̵� ����
		err_msg("�̸� �� �ֹι�ȣ�� ��ġ�ϴ� ������ �����ϴ�.");
	}
?>
<html>
<head>
<title>��й�ȣ �˻� ���</title>
<meta http-equiv="content-type" content="text/html;charset=euc-kr">
<link rel="stylesheet" href="../common/global.css">
<script language="javascript" src="../common/global.js"></script>
<script language="javascript" src="../common/member.js"></script>
</head>
<body>
<?
	include "../include/top_menu.php";
?>
<br>
<table width="938" cellspacing="0" cellpadding="0" style="border-width:1; border-style:solid;" border="0">
<tr>
	<td width="210" height="376" valign="top">
		<?
			include "../include/left_login.php";
			include "../include/main_left.php";
		?>
	</td>
	<td width="728" height="576" valign="top">
	<table width="100%" border="0"cellspacing="0" cellpadding="0">
		<tr>
			<td height="30" style="padding:10 0 0 14px">
				<a href="#">Ȩ</a>
				&gt; ȸ������ &gt;<a href="/member/idpass_search.php">���̵�/�н����� ã��</a>
			</td>
		</tr>
		</table>
	<table width="92%" border="0" cellspacing="1" cellpadding="3">
	<tr>
	<td style="padding:7 0 6 10px" bgcolor="#CCCEEE">��й�ȣ ã�� : </td>
	</tr>
	</table>
	<table width="92%" border="0" cellspacing="0" cellpadding="0"
	bgcolor="#FAFAFA">
	<tr>
	<td valign="top"><br>
		<table width="90%" border="0" cellspacing="2" cellpadding="2">
		<tr>
			<td width="95%" align="center" valign="middle">
		<?= $rows[name]?>���� ��й�ȣ�� <b>[<?=$rows[passwd]?>]</b> �Դϴ�.
		</td>
		</tr>
		</table>
<br>
</td>
</tr>
</table>
</td>
</tr>
</table>
</body>
</html>