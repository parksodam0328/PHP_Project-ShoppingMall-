<?
function authenticate() 
{ 
      Header( "WWW-authenticate: basic realm=\"ADMIN����\" "); 
      Header( "HTTP/1.0 401 Unauthorized"); 
      echo("�̰��� �����÷��� ������ ���̵� ��ȣ�� �ʿ��մϴ�.");
      exit; 
} 

if(!isset($PHP_AUTH_USER) || ($PHP_AUTH_USER!='mirim' || $PHP_AUTH_PW!='1234')) {
	authenticate();
}
?>