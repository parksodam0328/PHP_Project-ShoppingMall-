<? 
//PHP �����Լ�	
//int strlen(String str)
//	$char ="�ճ��� ��Ʈ�� ĸ��¯~~~ �����ؿ�~~<br>";
//	echo strlen($char);
//	echo "<br>";
//
//	$len = strlen($char);
//	echo $len;

//String addslashes(String str)
//	$char1 = "php_'sample";
//	echo addslashes($char1);
//	echo "<br>";
//	
//	$char2 = "php_\sample";
//	echo addslashes($char2);
//	echo "<br>";

//String stripslashes(String str)
//	$char = "php_\'sample";
//	echo stripslashes($char);
//	echo "<br>";
//

//String nl2br(String str)
//	$char1 = "member \n blog";
//	echo nl2br($char1);
//	echo "<br>";
//
//	$char2 = "shopping \n\n\n\n auction";
//	echo nl2br($char2);
//	echo "<br>";

//String number_format(float number [, int decimals])
//	$char =1234;
//	echo number_format($char);
//	echo "<br>";
//
//	$char ="";
//	echo number_format($char);
//	echo "<br>";
//
//	$char = 1234;
//	echo number_format($char,2);
//	echo "<br>";

//String substr(String str, int start [, int length])
//	$char1 = substr("abcdef",0);
//	echo $char1;
//	echo "<br>";
//
//	$char2 = substr("abcdef",2);
//	echo $char2;
//	echo "<br>";
//
//	$char3 = substr("abcdef",-2);
//	echo $char3;
//	echo "<br>";
//
//	$char4 = substr("abcdef",0,3);
//	echo $char4;
//	echo "<br>";
//
//	$char5 = substr("abcdef",2,3);
//	echo $char5;
//	echo "<br>";

//String strrchr(String str, String deleimeter)
//	$char1 =strrchr("php_sample","s");
//	echo $char1;
//	echo "<br>";
//
//	$char2 =strrchr("php_sample","p");
//	echo $char2;
//	echo "<br>";
//
//	$char3 =strrchr("imgage.gif",".");
//	echo $char3;
//	echo "<br>";

//int rand(int min, int max) rand �Լ��� �ܵ����� ������� ����
//	$char1 = rand(); //0~32768 ������ ������ �� ���
//	echo $char1;
//	echo "<br>";
//
//	$char2 = rand(0,5); //0~5 ������ ������ �� ���
//	echo $char2;
//	echo "<br>";
//
//	$char3 = rand(1,100); //1~100 ������ ������ �� ���
//	echo $char3;
//	echo "<br>";


//String uniqid(String perfix, function) �ð��� �ǹ������� ����ؼ� �ߺ��� �߻��� �ּ�ȭ�ϴ� ��
//	$char1 = uniqid(2);
//	echo $char1;
//	echo "<br>";
//
//	$char2 = uniqid(2);
//	echo $char2;
//	echo "<br>";
//
//	$char3 = uniqid(rand());
//	echo $char3;
//	echo "<br>";

//String md5(String str, function) �ǹ����� �������� 16������ 32�ڸ��� ������ִ� ��
//	$char1 = md5(2);
//	echo $char1;
//	echo "<br>";
//
//	$char2 = md5(rand());
//	echo $char2;
//	echo "<br>";
//
//	$char3 = md5(uniqid(rand()));  //���� �ߺ����� �ʴ� ���� �������� �� ���� (���θ����� ���� ����ϴ� ���)
//	echo $char3;
//	echo "<br>";


//String chop(String str) ���ڿ� �ڿ� ���� ó��
	$char1 = "php_sample         ";
	$char2 = "�׽�Ʈ";
	$char3 = "          php_sample"; //html�̱� ������ ������ �ϳ��� ��޵ȴ�.

	echo chop($char1);
	echo chop($char2);
	echo chop($char3);


?>
