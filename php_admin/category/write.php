<?
	include "../../php/auth.php";	
	include "../../php/config.php";	
	include "../../php/util.php";	
	$connect = my_connect($host, $dbid, $dbpass, $dbname);

	if($mode=='update') {
		$query1 = "select * from products_category1
		           where id = $id";
		$result1 = mysql_query($query1, $connect);
		$rows = mysql_fetch_array($result1);
		mysql_free_result($result1);
	}
	else {
		$mode = "insert";
	}
?>
<html>
<head>
<title>��з� ���� �� ����</title>
<meta http-equiv="content-type" content="text/html;charset=euc-kr">
<link rel="stylesheet" href="../../common/global.css">
<script language="javascript" src="../../common/global.js"></script>
<script language="javascript">
	function form_send() {
		var form = document.form1;

		if(!form.code.value) {
			alert("��з� �ڵ带 �Է��ϼ���..");
			form.code.focus();
			return;
		}
		if(!form.name.value) {
			alert("��з� �̸��� �Է��ϼ���..");
			form.name.focus();
			return;
		}		
		form.submit();
	}
</script>
</head>
<body bgcolor="#FFFFFF" text="#000000">
<center>
<form name="form1" method="post" action="insert.php">

<table width="600" border="0" cellspacing="0" cellpadding="0">
<tr class="hanamii">
	<td bgcolor="#D9D9D9" width="20%" align="center">�ڵ�</td>
	<td bgcolor="#FFFFFF" width="80%">
		<input type="text" name="code" value="<?=$rows[code]?>" 
<? if($mode=='update') echo("readonly") ?> size="20" maxlength="5">
	<br> ** ������ �ڵ�� ������ �� �����ϴ�.</br>
	</td>
</tr>

<tr class="hanamii">
	<td bgcolor="#D9D9D9" width="20%" align="center">��з���</td>
	<td>
		<input type="text" name="name" value="<?=$rows[name]?>" size="50" maxlength="60">
	</td>
</tr>
</table>
<br>

<table width="600" border="0" cellspacing="0" cellpadding="3">
	<tr>
		<td align="center">
			<input type="hidden" name="mode" value="<?=$mode?>">
			<input type="hidden" name="id" value="<?=$id?>">
<input type="button" value="�����ϱ�" onclick="javascript:form_send()">
		<input type="reset" value="�ٽþ���">
		<input type="button" value="����ϱ�" onclick="history.back()">
		</td>
	</tr>
</table>
</form>
</center>
</body>
</html>



