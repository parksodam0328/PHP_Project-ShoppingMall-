<?
	include "../php/config.php";	//Session �� DB ���ἳ��
	include "../php/util.php";		//���� ��ƿ��Ƽ �Լ�
	
	//mysql ����
	$connect = my_connect($host, $dbid, $dbpass, $dbname);
?>
<html>
<head>
<title>���̵�/��й�ȣ ã��</title>
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
<td style="padding:7 0 6 10px" bgcolor="#CCCEEE">���̵� ã��:</td>
</tr>
</table>

<table width="92%" border="0" cellspacing="0" cellpadding="0" bgcolor="#FAFAFA">
<tr>
	<td valign="top"><br>
	<form name="form1" method="post" action="id_search_result.php">
	<table width="90%" border="0" cellspacing="2" cellpadding="2">
	<tr>
		<td width="38%" align="right"><b>�̸�</b></td>
		<td width="62%">
			<input type="text" name="name" size="18" class="InputStyle1">
		</td>
	</tr>
	<tr>
		<td width="38%" align="right"><b>�ֹι�ȣ</b></td>
		<td width="62%">
			<input type="text" name="jumin1" size="6" class="InputStyle1" onkeyup="focus_move()">
			-
			<input type="text" name="jumin2" size="7" class="InputStyle1">
		</td>
	</tr>
	<tr>
		<td width="38%" align="right"></td>
		<td width="62%">
<a href="javascript:lost_checkInput1();">
		<img src="../img/butn_ok.gif" border="0"></a>
<a href="/index.php">
		<img src="../img/btn_cancel.gif" border="0"></a>		
		</td>
	</tr>
</form>
	</table>
<br>
</td>
<td width="54%" style="padding:0 22 18 0px" valign="top"></td>
</tr>
</table>
<br>
<table width="92%" border="0" cellspacing="1" cellpadding="3">
<tr>
<td style="padding:7 0 6 10px" bgcolor="#CCCEEE">�н����� ã�� : </td>
</tr>
</table>

<table width="92%" border="0" cellspacing="0" cellpadding="0" bgcolor="#FAFAFA">
<tr>
<td valign="top">
<br>

<table width="90%" border="0" cellspacing="2" cellpadding="2">
<form name="form2" method="post" action="pass_search_result.php">
<tr>
<td width="38%" align="right"><b>���̵�</b></td>
<td width="62%">
	<input type="text" name="id" size="18" class="InputStyle1">
</td>
</tr>

<tr>
<td width="38%" align="right"><b>�̸�</b></td>
<td width="62%">
	<input type="text" name="name" size="18" class="InputStyle1">
</td>
</tr>

<tr>
		<td width="38%" align="right"><b>�ֹι�ȣ</b></td>
		<td width="62%">
			<input type="text" name="jumin1" size="6" class="InputStyle1" onkeyup="focus_move2()">
			-
			<input type="text" name="jumin2" size="7" class="InputStyle1">
		</td>
	</tr>
	
<tr>
		<td width="38%" align="right"></td>
		<td width="62%">
<a href="javascript:lost_checkInput2();">
		<img src="../img/butn_ok.gif" border="0"></a>
<a href="/index.php">
		<img src="../img/btn_cancel.gif" border="0"></a>		
		</td>
	</tr>
</form>
</table>
<br>
</td>
<td width="54%" style="padding:0 22 18 0px" valign="top">
<br>
</td>
</tr>
</table>
</td>
</tr>
</table>
</body>
</html>


