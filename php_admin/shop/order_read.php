<?
	include "../../php/auth.php";	
	include "../../php/config.php";	
	include "../../php/util.php";	
	$connect = my_connect($host, $dbid, $dbpass, $dbname);
?>
<html>
<head>
<title>�ֹ����� �� ����</title>
<meta http-equiv="content-type" content="text/html;charset=euc-kr">
<link rel="stylesheet" href="../../common/global.css">
<script language="javascript" src="../../common/global.js"></script>
</head>
<body bgcolor="#FFFFFF" text="#000000">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
	<td valign="top">
<?
	$query = "select * from mall_order where num=$oid";
	$result = mysql_query($query, $connect);
	$rows = mysql_fetch_array($result);

	$a_goods_fk = explode("|", $rows[goods_fk]);
	$a_price = explode("|", $rows[goods_price]);
	$a_volume = explode("|", $rows[goods_count]);

	$temp .= "
		<table border='0' width='100%'>
		<tr bgcolor='#CBE2F5'>
			<td align='center'>�̹���</td>
			<td align='center'>��ǰ��</td>
			<td align='center'>����ȸ��</td>
			<td align='center'>����</td>
			<td align='center'>����</td>
		</tr>	
		";

	for($i=0; $i<sizeof($a_goods_fk); $i++) {
		$query2 = "select * from products where num='$a_goods_fk[$i]'";
		$result2 = mysql_query($query2, $connect);
		$rows2 = mysql_fetch_array($result2);

	$goods_name = shortenStr($rows2[name],20);
	$img_char = "../../upload/p_image/s/".$rows2[prod_code].".".$rows2[s_image_ty];

	$temp .= "
<tr>
<td align='center'><img src='$img_char' width='50' height='50' border='0' onerror=this.src='../../img/noimage.gif'></td>
	<td align='center'>$goods_name</td>
	<td align='center'>$rows2[company]</td>
	<td align='center'>$a_volume[$i]</td>
	<td align='center'>$a_price[$i] ��</td>
</tr>";

	
	$tot_amount = $tot_amount + ((int)$a_price[$i] * (int)$a_volume[$i]);
	$t_count = $t_count + (int)$a_volume[$i];	
	
} //for

	$trans_cost = 0;
	if($trans_cost>0) {
		$amount_o = $tot_amount + $trans_cost;
		$amount_temp = "($tot_amount �� + $trans_cost ��)";
	} //
	else {
		$amount_o = $tot_amount;
	}

	$temp .= "
		<tr bgcolor='#ECE2F5'>
			<td colspan='3' align='right'>�հ� </td>
			<td align='center'> <font color='blue'>$t_count</font> �� </td>
			<td align='center'> <font color='blue'>$tot_amount</font> �� </td>
		</tr>
		</table>";

	if($rows[payment_type]==1) {$payment_type = "�������Ա�";}
	if($rows[payment_type]==2) {$payment_type = "�ſ�ī��";}
	if($rows[payment_type]==3) {$payment_type = "�޴�������";}

	$a_status['3'] = "�Ա�Ȯ����";
	$a_status['5'] = "�Ա�Ȯ��";
	$a_status['7'] = "�����";
	$a_status['8'] = "��ۿϷ�";
?>

<table width="94%" border="0" cellspacing="2" cellpadding="1">
	<tr>
		<td height="25" align="center">
		<b>�ֹ� �� ���� <font color='red'>(�ֹ���ȣ : <?=$oid?>)</font></b>
		</td>
	</tr>
</table>

<table width="94%" border="0" cellspacing="2" cellpadding="1">
<tr bgcolor="#3A9EDF">
	<td>
	<table width="100%" border="0" cellspacing="2" cellpadding="1">
	<tr bgcolor="#CBE2F5">
		<td align="center" width="100"><b>�ֹ�����</b></td>
		<td align="left" colspan="3" bgcolor="white">
			<?=$temp?>
		</td>
	</tr>

	<tr bgcolor="#CBE2F5">
		<td align="center" width="100"><b>�ֹ���ȣ</b></td>
		<td align="center" bgcolor="white"><?=$rows[orderid]?></td>
		<td align="center" width="100"><b>��������</b></td>
		<td align="center" bgcolor="white"><?=$rows[createdate]?></td>
	</tr>

	<tr bgcolor="#CBE2F5">
		<td align="center" width="100"><b>������</b></td>
		<td align="left" bgcolor="white">
			�����ڸ� : <?=$rows[buyer_name]?> <br>
			�����ȣ : <?=$rows[buyer_zipno]?> <br>
			�����ּ� : <?=$rows[buyer_address]?> <br>
			������ȣ : <?=$rows[buyer_phone]?> <br>
			�� �� �� : <?=$rows[buyer_hphone]?> <br>
			�� �� �� : <?=$rows[buyer_email]?> <br>
		</td>

	<td align="center" width="100"><b>������</b></td>
		<td align="left" bgcolor="white">
			�����ڸ� : <?=$rows[recipient_name]?> <br>
			�����ȣ : <?=$rows[recipient_zipno]?> <br>
			�����ּ� : <?=$rows[recipient_address]?> <br>
			������ȣ : <?=$rows[recipient_phone]?> <br>
			�� �� �� : <?=$rows[recipient_hphone]?> <br>
		</td>
	</tr>

	<tr bgcolor="#CBE2F5">
		<td align="center" width="100"><b>ID ����</b></td>
		<td align="center" bgcolor="white" colspan=3>
			<?=$rows[user_id]?>
		</td>
	</tr>

<tr bgcolor="#CBE2F5">
		<td align="center" height="20"><b>������</b></td>
		<td align="center" bgcolor="white">
			<?= $payment_type?>
		</td>
		<td align="center" height="20"><b>���űݾ�</b></td>
		<td align="center" bgcolor="white">
		<?=number_format($rows[amount])?> ��
		(��ۺ� : <?=number_format($rows[trans_cost])?> ��)
		</td>
</tr>

<tr bgcolor="#CBE2F5">
		<td align="center" height="20"><b>����Ʈ���</b></td>
		<td align="center" bgcolor="white">
			<?=number_format($rows[mileage_use])?> ��
		</td>
		<td align="center" height="20"><b>����Ʈ����</b></td>
		<td align="center" bgcolor="white">
			<?=number_format($rows[mileage_add])?> ��
		</td>
</tr>

<tr bgcolor="#CBE2F5">
		<td align="center" height="20"><b>���� �����ݾ�</b></td>
		<td bgcolor="white" colspan="3">
		<font color="red"><?=number_format($rows[real_amount])?> ��</font>
		</td>
</tr>

<tr bgcolor="#CBE2F5">
		<td align="center" height="20"><b>����</b></td>
		<td align="center" bgcolor="white">
			<?=$a_status[$rows[status]]?>
		</td>
		<td align="center" height="20"><b>���º���</b></td>
		<td align="center" bgcolor="white">
<a href="order_change.php?mode=1&oid=<?=$oid?>&status=<?=$rows[status]?>" onclick="return confirm('�����Ͻðڽ��ϱ�?')">
			�Ա�Ȯ��
			</a>
			/ 
<a href="order_change.php?mode=2&oid=<?=$oid?>&status=<?=$rows[status]?>" onclick="return confirm('�����Ͻðڽ��ϱ�?')">			
			����� 
			</a>

<a href="order_change.php?mode=3&oid=<?=$oid?>&status=<?=$rows[status]?>" onclick="return confirm('����� �Ϸ�Ǹ� ����Ʈ�� �����˴ϴ�.')">			
			/ ��ۿϷ�
			</a>
		</td>
</tr>

<?
	//������ �Ա��϶��� ���
	if($rows[payment_type]=='1') {  ?>

<tr bgcolor="#CBE2F5">
		<td align="center" height="20"><b>�Ա����� �̸�</b></td>
		<td align="center" bgcolor="white">
			<?=$rows[bank]?>
		</td>
		<td align="center" height="20"><b>�Ա���</b></td>
		<td align="center" bgcolor="white">
			<?=$rows[account]?>
		</td>
</tr>
<tr bgcolor="#CBE2F5">
		<td align="center" height="20"><b>�Աݿ�����</b></td>
		<td bgcolor="white" colspan="3">
		<font color="red"><?=$rows[deposit_date]?></font>
		</td>
</tr>
<?	} //if
?>
</table>
</td>
</tr>
</table>

<table width="94%" border="0" cellspacing="2" cellpadding="1">
<tr>
	<td height="25" align="left">
		<a href="order_list.php?page=<?=$page?>">
			<b>��Ϻ���</b>
		</a>
	</td>
</tr>
</table>
</td>
</tr>
</table>
</body>
</html>