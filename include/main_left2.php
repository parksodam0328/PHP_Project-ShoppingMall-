<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr>
<td width="200" height="32" bgcolor="whitesmoke">
<p>&nbsp;
<img src="/img/game_event_icon.gif" align="absmiddle" width="14" height="14"> ���θ� �޴�</p></td>
</tr>
<?
	//���θ� ��з�
	$l_qry = "select * from products_category1";
	$l_res = mysql_query($l_qry, $connect);

	for($i=0; $l_rows=mysql_fetch_array($l_res);$i++) { ?>
<tr>
	<td width="200" height="23">&nbsp;
	<a href="/shopping/sub_list.php?l_code=<?=$l_rows[code]?>">
	<img src="/img/notice_icon.gif" align="absmiddle" width="13" height="14">
		<?=$l_rows[name]?></a>
	</td>
</tr>
<?	} //for
	mysql_free_result($l_res);
?>
<tr>
	<td width="200" height="10">&nbsp;</td>
</tr>

<tr>
	<td width="200" height="23">
	<p>&nbsp;
	<a href="/shopping/basket.php">
	<img src="/img/notice_icon.gif" align="absmiddle" width="13" height="14">
		��ٱ���
	</a>
	</p>
	</td>
</tr>


</table>