<?

//	$link = mysql_connect("localhost","root","1234");
//	echo "DB에 접속하셨습니다.";

//	$link = mysql_connect("localhost","root","1234");
//	mysql_select_db("php_sample",$link);

//	int mysql_query(String query)
//	$link = mysql_connect("localhost","root","1234");
//	mysql_select_db("php_sample",$link);
//	$query = "select * from member";
//	$result = mysql_query($query,$link);

//int mysql_num_rows(int result) 레코드의 갯수 알려주는 함수
//insert, update, delete => int mysql_affected_rows(result);

//	$link = mysql_connect("localhost","root","1234");
//	mysql_select_db("php_sample",$link);
//	$query = "select * from member";
//	$result = mysql_query($query,$link);
//	$tot = mysql_num_rows($result);
//
//	echo $tot;

//array mysql_fetch_array(result) 화면 출력해주는 함수 배열로 받음
	$link = mysql_connect("localhost","root","mirim546");
	echo "연결되었습니다";

?>