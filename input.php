<html>
<head>
<title></title>
<script language="javascript">
function check() { // 유효성 코드는 자바스크립트로 많이 함 / php로도 짤 수 있지만 서버에 들렀다가 와야하기 때문에 시간이 더 걸림
	if(document.form1.id.value=="") {
		alert("아이디를 입력하세요."); 
		document.form1.id.focus();
		return;
	}
	if(document.form1.pass.value=="") {
		alert("비밀번호를 입력하세요."); 
		document.form1.pass.focus();
		return;
	}
	from1.submit();
}
</script>
</head>
<body>
<h2>로그인 폼</h2>
<form name="form1" method="post" action="proc.php">
아이디 : <input type="text" name="id"><br>
비밀번호 : <input type="password" name="pass"><br>
<input type="button" value="로그인" onclick="check()">

</form>
</body>
</html>