<? 
//bool copy(String source, String dest) 사진 서버에다 복사해줄때
//	if(!copy($file,"upload/image")) { // 우리가 업로드한 파일을 복사하여 boolean 타입으로 반환
//		echo "파일을 복사하지 못했습니다.";
//	}

//int fopen(String filename, String mode)
//	$res1 = fopen("text.txt","r"); //읽기 전용
//	echo $res1;
//	$res2 = fopen("text.txt","r+"); //읽기 쓰기 가능
//	echo $res2;
//	$res3 = fopen("text.txt","w"); //쓰기 전용
//	echo $res3;

//String fread(int ft, int length)
//	$res = fopen("text.txt","r"); //일기 전용
//	$char = fread($res,20); // 읽어 오기
//	echo $char;
//	fclose($res);

//int unlink(String filename) 서버에서 파일을 삭제하는 함수 copy의 반대개념
//	$file_name = "text.txt";
//	unlink($file_name);

//bool file_exists(String filename) 해당 경로에 파일이 있는지 확인해주는 함수, 없으면 아예 안뜬다
//	$file_name = "text.php";
//	$char = file_exists($file_name);
//	echo $char;

//array getimagesize(String filename) 이미지의 사이즈를 조정해주는 함수
//	$img_ary = getimagesize("./img/image1.gif");
//	echo "이미지 넓이 : $imag_ary[0]";
//	echo "이미지 높이 : $imag_ary[1]";

?>