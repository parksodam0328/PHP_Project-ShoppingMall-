<?
	include "../../php/auth.php";	
	include "../../php/config.php";	
	include "../../php/util.php";	
	$connect = my_connect($host, $dbid, $dbpass, $dbname);

	if(!$level) {
		$level = 1;
	}
?>
<html>
<head>
<title>��ü �ֹ���� ����</title>
<meta http-equiv="content-type" content="text/html;charset=euc-kr">
<link rel="stylesheet" href="../../common/global.css">
<script language="javascript" src="../../common/global.js"></script>
</head>
<body bgcolor="#FFFFFF" text="#000000">
<table width="780" border="0" cellspacing="0" cellpadding="0">
<tr>
	<td valign="top">
	<form action="order_list.php" method="post">

<?
	if($mode=='search') {
		$query = "select orderid from mall_order
		          where cancel='N' and
				  $key like '%$key_value%'";
	} //if
	else {
		$query = "select orderid from mall_order
		          where cancel='N'";
	}

	$result = mysql_query($query, $connect);
	$total_bnum = mysql_num_rows($result);


	if(!$page) {
		$page = 1;
	}

	$p_scale = 15; //ȭ�鿡 ǥ�õǴ� ����
	$cpage = intval($page);
	$totalpage=intval($total_bnum/$p_scale);

	if($totalpage*$p_scale!=$total_bnum) {
		$totalpage = $totalpage+1;
	}

	//�ᱹ $cline�� $p_scale1 ���� ���ϴ� ���ĵ�

	if($cpage==1) {
		$cline=0;
	}
	else {
		$cline = ($cpage*$p_scale) - $p_scale;
	}

	$limit = $cline + $p_scale;

	if($limit>=$total_bnum) {
		$limit = $total_bnum;
	}

	$p_scale1 = $limit - $cline;
?>

<table width="99%" border="0" cellspacing="2" cellpadding="1">
<tr>
	<td height="25" align="center">
		<font color="blue" size="3"><b>��ǰ �ֹ���Ȳ</b></td>
	</td>
</tr>
</table>

<table width="99%" border="0" cellspacing="0" cellpadding="0">
<tr bgcolor="#3A9EDF">
	<td>
	<table width="100%" border="0" cellspacing="1" cellpadding="3">
	<tr bgcolor="#CBE2F5">
		<td align="center" height="20"> <b>�ֹ���ȣ</b></td>
		<td align="center" height="20"> <b>ID</b></td>
		<td align="center" height="20"> <b>�ֹ���</b></td>
		<td align="center" height="20"> <b>������</b></td>
		<td align="center" height="20"> <b>������</b></td>
		<td align="center" height="20"> <b>�ֹ����</b></td>
		<td align="center" height="20"> <b>�ֹ���</b></td>
		<td align="center" height="20"> <b>ó������</b></td>
		<td align="center" height="20"> <b>����</b></td>
	</tr>
<?
	if($mode=='search') {
		$query1 = "select * from mall_order 
		           where cancel='N' and 
				   $key like '%$key_value%'
				   order by num desc";
	}
	else {
		$query1 = "select * from mall_order 
		           where cancel='N'
				   order by num desc limit $cline, $p_scale1 ";
	}

	$a_pay_type['1'] = "�������Ա�";
	$a_pay_type['2'] = "�ſ�ī��";
	$a_pay_type['3'] = "�޴�������";

	$result1 = mysql_query($query1, $connect);

	for($i=0; $rows1 = mysql_fetch_array($result1); $i++) {
		
		if($rows1[status]=="3") {  //�Ա�Ȯ����
			$c_color = "#FFFFFF";
			$status_now = "�Ա�Ȯ����";
		}

		if($rows1[status]=="5") {  //�Ա�Ȯ��
			$c_color = "#E0FFE0";
			$status_now = "�Ա�Ȯ��";
		}

		if($rows1[status]=="7") {  //�����
			$c_color = "#EFFCFC";
			$status_now = "�����";
		}
		if($rows1[status]=="8") {  //��ۿϷ�
			$c_color = "#FFFCCC";
			$status_now = "��ۿϷ�";
		}
?>
<tr bgcolor="<?=$c_color?>">
<td align="center">
<a href="order_read.php?oid=<?=$rows1[num]?>&page=<?=$page?>">
	<?=$rows1[orderid]?>
</a>
</td>

<td align="center"><?=$rows1[user_id]?></td>
<td align="center"><?=$rows1[createdate]?></td>
<td align="center"><?=$rows1[buyer_name]?></td>
<td align="center"><?=$rows1[recipient_name]?></td>
<td align="center"><?=$a_pay_type[$rows1[payment_type]]?></td>
<td align="center"><?=number_format($rows1[amount])?> ��</td>
<td align="center"><?=$status_now?></td>
<td align="center">
<a href="order_delete.php?oid=<?=$rows1[num]?>&page=<?=$page?>" onclick="return confirm('�ֹ��� ����ϰڽ��ϱ�?')">
����
</a>
</td>
</tr>
<?	} //for
?>

<tr bgcolor="#F2F9FF">
<td colspan="10">

	<table width="100%" border="0" cellspacing="1" cellpadding="2">
		<tr>
			<td align="center">
				<?	
$url = "$PHP_SELF?mode=$mode&key=$key&key_value=$key_value";
page_avg($totalpage, $cpage, $url);
				?>
			</td>
		</tr>
	</table>
</td>
</tr>

<tr bgcolor="#CBE2F5">
	<td colspan="10" align="left">
		<select name="key">	
			<option value="user_id">���̵�</option>
			<option value="buyer_name">������ �̸�</option>
			<option value="orderid">��ǰ�ڵ�</option>
		</select>
		<input type="hidden" name="mode" value="search">
		<input type="text" name="key_value" size="16">
		<input type="submit" value="�˻�">
</td>
</tr>
</table>
</td>
</tr>
</table>
</form>
</td>
</tr>
</table>
</body>
</html>