<?
	include "../../php/auth.php";	
	include "../../php/config.php";	
	include "../../php/util.php";	
	$connect = my_connect($host, $dbid, $dbpass, $dbname);

	if($mode=='del') {
		$query = "update products 
		          set $ch = 'N'
				  where num = $p_num";
		$result = mysql_query($query, $connect);
	}
	else if($mode=='insert') {
		$query = "update products 
		          set $ch = 'Y'
				  where num = $p_num";
		$result = mysql_query($query, $connect);
	}

	if($result) {
		echo("
			<script>
				window.alert('��ǰ������ �����Ǿ����ϴ�.');
			</script>
		");

echo "<meta http-equiv='Refresh'content='0;url=list.php?level=$level&page=$page&category_code_fk=$category_code_fk&l_category_fk=$l_category_fk'>";
	
	
	}
	else {
		err_msg("DB�۾��� ������ �߻��Ͽ����ϴ�.");
	}


?>