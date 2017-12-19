<table width="939" height="77" cellspacing="0" cellpadding="0" background="/img/background.jpg" border="0">
<tr>
	<td>
		<table width="890" height="77" cellspacing="0" cellpadding="0" border="0">
		<tr>
			<td width="238" height="50">
				<a href="/index.php"><font color="white" size="4"><b>소담이의 쇼핑몰</b></font></a>
			</td>
			<td align="middle" width="597" height="50">
			<font color="white">
<?
			if(!$_SESSION[p_id] || !$_SESSION[p_name]) { //비회원 
?>
			<b><a href="/member/join.php"><font color="#FFFFFF">회원가입</font></a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="/company/main.php"><font color="#FFFFFF">회사소개</font></a>     
<?			} //if
			else {	//회원
?>
			<b><a href="/member/mem_edit.php"><font color="#FFFFFF">정보수정</font></a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="/company/main1.php"><font color="#FFFFFF">회사일정</font></a> 

<?			} //else 
?>
&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
<b><a href="/shopping/shop_main.php">
<font color="#FFFFFF">Shopping</font></a>
&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="/auction/auct_main.php"><font color="#FFFFFF">Auction</font></a> 
<?
	if($_SESSION[p_id]=='choi')	{ ?>
<font color="#FFFFFF">&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</font><a href="../php_admin/index.php" target='_blank'><font color="#FFFFFF">관리자 모드</font></a> 
			
<? } ?>

			</td>
<td class="chon11px" align="right" width="55" height="50">&nbsp;</td>
</tr>
</table>
</td>
</tr>
</table>