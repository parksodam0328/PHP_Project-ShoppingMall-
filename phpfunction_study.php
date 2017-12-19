<? 
//PHP 내장함수	
//int strlen(String str)
//	$char ="손나은 울트라 캡쑝짱~~~ 따랑해요~~<br>";
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

//int rand(int min, int max) rand 함수는 단독으로 사용하지 않음
//	$char1 = rand(); //0~32768 사이의 임의의 수 출력
//	echo $char1;
//	echo "<br>";
//
//	$char2 = rand(0,5); //0~5 사이의 임의의 수 출력
//	echo $char2;
//	echo "<br>";
//
//	$char3 = rand(1,100); //1~100 사이의 임의의 수 출력
//	echo $char3;
//	echo "<br>";


//String uniqid(String perfix, function) 시간을 피버값으로 사용해서 중복값 발생을 최소화하는 것
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

//String md5(String str, function) 피버값을 기준으로 16진수를 32자리로 만들어주는 것
//	$char1 = md5(2);
//	echo $char1;
//	echo "<br>";
//
//	$char2 = md5(rand());
//	echo $char2;
//	echo "<br>";
//
//	$char3 = md5(uniqid(rand()));  //절대 중복되지 않는 값을 추출해줄 수 있음 (쇼핑몰에서 많이 사용하는 방법)
//	echo $char3;
//	echo "<br>";


//String chop(String str) 문자열 뒤에 공백 처리
	$char1 = "php_sample         ";
	$char2 = "테스트";
	$char3 = "          php_sample"; //html이기 때문에 공백이 하나로 취급된다.

	echo chop($char1);
	echo chop($char2);
	echo chop($char3);


?>
