<?
	include "../../php/auth.php";	
	include "../../php/config.php";	
	include "../../php/util.php";	
	$connect = my_connect($host, $dbid, $dbpass, $dbname);

	$query = "select * from products_category1";
	$result = mysql_query($query, $connect);
	$total_count = mysql_num_rows($result);
?>
<html>
<head>
<title>��з� ��� ����</title>
<meta http-equiv="content-type" content="text/html;charset=euc-kr">
<link rel="stylesheet" href="../../common/global.css">
<script language="javascript" src="../../common/global.js"></script>
</head>
<body bgcolor="#FFFFFF" text="#000000">
<center>
<form method="post" action="list.php">
<table width="700" border="0" cellspacing="0" cellpadding="3">
	<tr class="hanmii">
		<td align="right"> <? echo($total_count)?> ��</td>
	</tr>
</table>

<table width="700" border="0" cellspacing="0" cellpadding="0">
<tr>
	<td bgcolor="#666666">
	<table width="100%" border="0" cellspacing="1" cellpadding="2">
	<tr align="center" bgcolor="#d9d9d9" class="hanamii">
		<td width="10%">��ȣ</td>
		<td width="10%">�ڵ�</td>
		<td width="30%">ī�װ� �̸�</td>
		<td width="20%">���� ī�װ���</td>
		<td width="20%">��ϵ� ��ǰ��</td>
		<td width="10%">����</td>
	</tr>
<?
	for($i=0; $rows=mysql_fetch_array($result); $i++) {
		$query1 = "select * from products_category2
		   where category_code_fk = '$rows[code]'";		
		$result1 = mysql_query($query1, $connect);
		$sub_count1 = mysql_num_rows($result1);

		$query2 = "select * from products 
				   where category_fk='$rows[code]'";
		$result2 = mysql_query($query2, $connect);
		$sub_count2 = mysql_num_rows($result2);

		mysql_free_result($result2);


		if($i%2==0) {
			$bgcolor = "#FFFFFF";
		}
		else {
			$bgcolor = "#F5F5F5";
		} ?>
<tr bgcolor="<?=$bgcolor?>" align="center" class="hanamii">
	<td><?=($i+1)?></td>	
	<td><?=$rows[code]?></td>	
	<td>
<? echo("<a href='sub_list.php?sub_code=$rows[code]'>$rows[name]</a>")?>
</td>	
	<td><?=$sub_count1?> ��</td>	
	<td><?=$sub_count2?> ��</td>	
	<td>
	<a href='write.php?mode=update&id=<?=$rows[id]?>'>
	����</a>
	<a href='delete.php?id=<?=$rows[id]?>' 
	onclick="return confirm('������ �����Ͻðڽ��ϱ�?')">	
	����</a>
	</td>	
</tr>
<?	} //for
	
	mysql_free_result($result);

	if($total_count==0) { ?>
		<tr bgcolor="#FFFFFF" align="center" class="hanamii">	
			<td colspan="6">��ϵ� �з��� �����ϴ�.</td>
		</tr>
<?	} //if  ?>
	</table>
	</td>
</tr>
</table>

<table width="700" border="0" cellspacing="0" cellpadding="3">
<tr>
	<td align="center">
		<input type="button" value="����ϱ�" onclick="location='write.php'">
	</td>
</tr>
</table>
</form>
</center>
</body>
</html>


