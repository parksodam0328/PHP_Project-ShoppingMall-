<?
	include "../php/config.php";	//Session �� DB ���ἳ��
	include "../php/util.php";		//���� ��ƿ��Ƽ �Լ�
	
	//mysql ����
	$connect = my_connect($host, $dbid, $dbpass, $dbname);
?>
<html>
<head>
<title>ȸ��Ұ�</title>
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
				&gt; ȸ������ &gt; <a href="/company/main2.php">CEO �λ縻</a>
			</td>
		</tr>
	</table>
	<table width="100%" border="0"cellspacing="0" cellpadding="0">
		<tr>
			<td width="100%" align="center"><br><img src="/img/sundar.jpg" width="250" height="320"><br></td>
		</tr>
		<tr>
		</tr>
		<tr>
			<td width="250"><br>Google ���丮�� 1995�� ����������п��� ���۵˴ϴ�. Larry Page�� ����������п� ������ ��� ���̾�����, ��������� �л��̾��� Sergey Brin�� Larry���� �б��� �ȳ��ϴ� ������ �þҽ��ϴ�. ������� ���� ������ �׵��� ó�� ������ �� ���� ���� ������ ���� �� �ϳ��� �����ٰ� �մϴ�. ������ �̵��ؿ��� ��ģ�� ���̰� �Ǿ����ϴ�. ����� �濡�� �׵��� ��ũ�� ����Ͽ� ���� ���̵� ������ ���� �������� �߿伺�� �Ǵ��ϴ� �˻� ������ ��������ϴ�. �׵��� �� �˻� ������ Backrub�̶�� �ҷ����ϴ�.

			������ �� ������ �ʾ� Backrub�� Google�� (��������) �̸��� �ٲ�����ϴ�. �� �̸��� 10�� 100������ ��Ÿ���� ���� �� ������ ���̸� '�� ������ ������ ü��ȭ�Ͽ� ��ΰ� ���ϰ� �̿��� �� �ֵ��� ����'�� Larry�� Sergey�� ������ ������ �ݿ��� ���̾����ϴ�.<br><br>

			���� ���Ⱓ Google�� �а�� ���� �Ǹ��� �븮 �����ڵ��� �ָ��� �������ϴ�. 1998�� 8�� Sun�� ���� â���� Andy Bechtolsheim�� Larry�� Sergey���� 100,000�޷� ��ǥ�� ���־��� Google Inc.�� ���������� ź���߽��ϴ�. �� ���ڱ����� Google�� ����� ���� ��� Ķ�����Ͼ��� ��� ��ũ ���� Susan Wojcicki(Google�� 16��° �������� ���� YouTube�� CEO) ������ ���� ù ��° �繫���� �����߽��ϴ�. ������ ����ũ�� ��ǻ��, Ź����, ���� �Ķ��� ī���� ��â�� Google �繫���� ����̾����ϴ�. �̷��� ȭ���� �������� �ٹ̴� ������ ���ñ��� �̾����� �ֽ��ϴ�.<br><br>

			����� ���� Google�� ù ��° ������������ 1998���� ù ��° '����� �ΰ�'�� �̸������, ��â�⿡�� ��� ���� �����ϰ� �����ο����ϴ�. ù ��° ����� �ΰ�� ����Ʈ �湮�ڿ��� �� ������ �繫���� ���� ���׸� ������ ���� �ִٴ� ���� �˸��� ���� �ΰ� ����� ��� ����� �׸��� �׷� ���� ���� ��Ⱑ �Ǿ����ϴ�. �� �� ���⿡ ���� ȸ��� �޼��ϰ� Ȯ���߽��ϴ�. �����Ͼ ����ϰ� �������� �����ϰ� ù ��° ȸ�� ������ ���ī�� ���Խ��ϴ�. Google�� ���� ��� ��ħ�� Ķ�����Ͼ��� ����ƾ ���� ���� ���� ��ġ('Googleplex')�� �����߽��ϴ�. ���� ����� ����ȭ�Ϸ��� ��� ���п� ������ ���̾����ϴ�. ���� ���ī�� �̻��߽��ϴ�.<br><br>
			<b>
			Google�� � ���� �ϵ� ���Ӿ��� �� ���� �ش��� ã�� ���� ��ǥ�� �ϰ� �ֽ��ϴ�. ���� Google�� 50�� ������ 6�� ���� �Ѵ� ������ �ΰ� ������, YouTube�� Android, Smartbox, Google �˻� �� �� ���� ���ʾ� ���� ������� ����ϴ� ���� ���� ��ǰ�� ����� �ֽ��ϴ�. ��� ���� ������ ������ ȸ�� �������� �� ���� �� �������� ��� ����� ���� ����� �����ϰڴٴ� Google�� ������ ����� �濡�� ���� ������ ���� �ٷ� ���ñ����� ����ֽ��ϴ�.</b>
			</td>
			</tr>
			<tr>
			<td align="right">
			<br>
			2015�� 10�� ���� ������(Sundar Pichai)
			</td>
		</tr>
	</table>
	</td>
</tr>
</table>
</body>
</html>