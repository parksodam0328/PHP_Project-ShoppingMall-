<html>
<head>
<title></title>
<script language="javascript">
function check() { // ��ȿ�� �ڵ�� �ڹٽ�ũ��Ʈ�� ���� �� / php�ε� © �� ������ ������ �鷶�ٰ� �;��ϱ� ������ �ð��� �� �ɸ�
	if(document.form1.id.value=="") {
		alert("���̵� �Է��ϼ���."); 
		document.form1.id.focus();
		return;
	}
	if(document.form1.pass.value=="") {
		alert("��й�ȣ�� �Է��ϼ���."); 
		document.form1.pass.focus();
		return;
	}
	from1.submit();
}
</script>
</head>
<body>
<h2>�α��� ��</h2>
<form name="form1" method="post" action="proc.php">
���̵� : <input type="text" name="id"><br>
��й�ȣ : <input type="password" name="pass"><br>
<input type="button" value="�α���" onclick="check()">

</form>
</body>
</html>