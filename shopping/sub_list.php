<?
	include "../php/config.php";
	include "../php/util.php";		
	$connect = my_connect($host, $dbid, $dbpass, $dbname);

	if(!$_COOKIE[p_sid]) {
		$SID = md5(uniqid(rand()));
		SetCookie("p_sid", $SID, 0, "/");
	}
?>
<html>
<head>
<title>���θ� ��� ����</title>
<meta http-equiv="content-type" content="text/html;charset=euc-kr">
<link rel="stylesheet" href="../common/global.css">
<script language="javascript" src="../common/global.js"></script>
<script language="javascript" type="text/javascript">

function form_comparison() {
		var form = document.form1;
		var b = 0;
		for(i=0; i<form.elements.length;i++) {
			if(form.elements[i].name=='prod_num[]') {
				if(form.elements[i].checked==true) {
					b++;
				}
			}
		} //for
	
		if(b==0) {
			alert("��� �ϳ� �̻��� �׸��� �����ϼž� �մϴ�.");
			return;
		}

		form.action="sub_comparison.php?l_code=<?=$l_code?>";
		form.submit();
	}


</script>
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
			include "../include/main_left2.php";
		?>
	</td>
	<td width="728" height="576" valign="top">
	<table width="100%" border="0"cellspacing="0" cellpadding="0">
		<tr>
			<td height="30" style="padding:10 0 0 14px">
				<a href="#">Ȩ</a>
				&gt; SHOPPING &gt;<a href="/shopping/shop_main.php">����Ȩ</a>
			</td>
		</tr>
		</table>

<form name="form1" method="post">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="10" bgcolor="#E1E1E1">&nbsp;</td>
<td height="24" bgcolor="#E1E1E1"><strong>ī�װ� : </strong>
<?
	$c_qry = "select * from products_category2 
	          where category_code_fk='$l_code'";
	$c_res = mysql_query($c_qry, $connect);
	
	for($i=0; $c_rows = mysql_fetch_array($c_res); $i++) { ?>
<a href="sub_list.php?l_code=<?=$l_code?>&s_code=<?=$c_rows[code]?>">
<?=$c_rows[name]?>
</a> |

<?	} //for
?>
</td>
</tr>
</table>

<?
	//�ߺз� ���ý�
	if($s_code) {
		$s_code_qry = " and l_category_fk = '$s_code'";
	}

	//��ǰ�� ��� ������ ��� ������
	$query6 = "select * from products 
	           where category_fk='$l_code' 
			   and del_chk='N' $s_code_qry";
	$result6 = mysql_query($query6, $connect);
	$total_bnum = mysql_num_rows($result6);


	if(!$page) {
		$page = 1;
	}

	$p_scale = 10; //ȭ�鿡 ǥ�õǴ� ����
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
<br>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr bgcolor="#CCCCCC">
<td width="55" align="center">����</td>
<td width="1">
	<img src="../img/line1.gif" width="1" height="23">
</td>

<td colspan="2" align="center" class="line2">��ǰ��</td>
<td width="1">
	<img src="../img/line1.gif" width="1" height="23">
</td>

<td width="90" align="center" class="line2">������</td>
<td width="1">
	<img src="../img/line1.gif" width="1" height="23">
</td>
<td width="120" align="center" class="line2">����/����Ʈ</td>

</tr>

<?
	$query7 = "select * from products 
	           where category_fk='$l_code' 
			   $s_code_qry and del_chk='N'
			   order by num desc limit $cline, $p_scale1";
	$result7 = mysql_query($query7, $connect);

	for($i=0; $rows7=mysql_fetch_array($result7); $i++) { ?>
<tr>
	<td height="90" align="center" class="line">
	<input type="checkbox" name="prod_num[]" value="<?=$rows7[num]?>">
	</td>
<td valign="bottom" class="line"><img src="../img/line1.gif" width="1" height="23"></td>
<td width="160" align="center" class="line">

<a href="details.php?pnum=<?=$rows7[num]?>&l_code=<?=$l_code?>">
<img src="/upload/p_image/s/<?=$rows7[prod_code]?>.<?=$rows7[s_image_ty]?>" width="80" height="80" onerror="this.src='../img/noimage.gif'">
</a>
</td>

<td class="line">
<a href="details.php?pnum=<?=$rows7[num]?>&l_code=<?=$l_code?>">
	<?=$rows7[name]?>	
</a>
</td>
<td valign="bottom" class="line"><img src="../img/line1.gif" width="1" height="23"></td>

<td class="line"><?=$rows7[company]?></td>
<td valign="bottom" class="line"><img src="../img/line1.gif" width="1" height="23"></td>

<td align="center" class="line">
	<table border="0" cellspacing="0" cellpadding="0">
	<tr>
		<td>
			<img src="../img/icon3.gif" width="11" height="11">
		<font color="#955275">	<s><?=number_format($rows7[cust_price])?> ��</s></font>
		</td>
	</tr>

	<tr>
		<td>
			<img src="../img/icon3.gif" width="11" height="11">
		<font color="#955275"><?=number_format($rows7[price])?> ��</font>
		</td>
	</tr>

	<tr>
		<td>
			<img src="../img/icon4.gif" width="11" height="11">
		<?=number_format($rows7[mileage])?> ����Ʈ
		</td>
	</tr>
	</table>
</td>
<td valign="bottom" class="line"><img src="../img/line1.gif" width="1" height="23"></td>
</tr>

<?	} //for
	mysql_free_result($result7);
?>
</table>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td width="60" height="36">

	<a href="javascript:form_comparison()">
	<img src="../img/bt1.gif" width="48" height="20" hspace="4" border="0">
	</a>
</td>

<td align="center">
<?
	$url = "sub_list.php?l_code=$l_code&s_code=$s_code";
	page_avg($totalpage, $cpage, $url);
?>
</td>
<td width="60"></td>
</tr>
</table>
</form>
</td>
</tr>
</table>
</body>
</html>




























