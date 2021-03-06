<?
	include "../php/config.php";	//Session 및 DB 연결설정
	include "../php/util.php";		//각종 유틸리티 함수
	
	//mysql 연결
	$connect = my_connect($host, $dbid, $dbpass, $dbname);
?>
<html>
<head>
<title>회사소개</title>
<meta http-equiv="content-type" content="text/html;charset=euc-kr">
<link rel="stylesheet" href="../common/global.css">
<script language="javascript" src="../common/global.js"></script>
<script language="javascript" src="../common/member.js"></script>
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
			include "../include/main_left.php";
		?>
	</td>
	<td width="728" height="576" valign="top">
	<table width="100%" border="0"cellspacing="0" cellpadding="0">
		<tr>
			<td height="30" style="padding:10 0 0 14px">
				<a href="#">홈</a>
				&gt; 회원정보 &gt; <a href="/company/main3.php">새소식</a>
			</td>
		</tr>
	</table>
	<table width="100%" border="0"cellspacing="0" cellpadding="0">
		<tr>
			<td width="100%" align="center" ><img src="/img/google.png" width="400" height="200"></td>
		</tr>
		<tr>
		</tr>
		<tr>
			<td style="padding:10 10 0 14px">
			구글과 함께 무료 코딩교육을 함께 진행할 지방 단체/기관을 모집합니다.<br><br>

이미 알고 계시겠지만, 구글코리아가 여름 방학을 맞아 코딩에 관심을 갖고 배우고자 하는 학생들을 주 대상으로 하는 온라인 무료 코딩 수업 ‘코딩 야학’ 프로젝트 2기를 오는 7월 17일(월)부터 한 달간 전국적으로 진행합니다. 이번에는 방학을 맞이해서 지역 방문 수업(호스팅 기관/단체 신청링크)도 함께 하려고 합니다. 아래는 이번 무료 코딩교육을 함께하고 있는 생활코딩을 이끌고 있는 이고잉님의 글입니다. 꼭 한번 읽어보시고 많은 지역에서 관심보여주시면 감사하곘습니다.<br><br>
                                                                                                                                           


안녕하세요. 
구글과 생활코딩이 함께 진행하고 있는 코딩야학이 방학을 맞이해서 지역 방문 수업을 하려고 합니다. 이 행사의 저변을 넓히기 위해서 지역에 계신 기관이나 기업에게 도움을 요청드립니다.
  
우선 코딩야학에 대해서 소개를 하겠습니다. 코딩야학은 한달동안 생활코딩의 온라인 강의를 함께 완주하는 방식으로 진행됩니다. 또한 각자의 진도를 야학 사이트를 통해 공유하면서 서로에 대한 응원과 자극을 나누고 있습니다. 완주한 분들에게는 수료증과 오프라인 해커톤에 참여할 수 있는 기회를 제공해드립니다. 자세한 내용은 코딩야학의 홈페이지를 참고 부탁드립니다.
  
코딩야학 2기에서는 1기의 활동에 더해서 오프라인 강의도 함께하려고 합니다. 여러 지역을 방문해서 컴퓨터, 인터넷, 웹 그리고 코딩의 시작을 도와드리려고 합니다. 방문수업에서는 아래와 같은 수업을 진행합니다.<br><br>
수업내용 (총 4시간으로, 오후 2시부터 6시를 희망합니다)<br>
웹의 역사<br>
정보기술이 어떻게 출현했는지 맥락을 파악해봅니다.<br>
웹의 창시자인 팀버너스리가 어떻게 웹을 만들었는지를 자세히 들여다보면서 프로그래머의 삶에 대해서 생각해봅니다.<br>
HTML<br>
가장 쉽고, 중요한 언어인 HTML을 통해서 코딩이 무엇인가를 알아봅니다.<br>
코딩을 통해서 웹을 만들어가는 과정을 살펴봅니다.<br>
처음에 배우는 것일수록 쉽지만 중요하다는 사실에 대해서 생각해봅니다.<br>
HTML이후의 역사<br>
CSS, JavaScript, 미들웨어(php, jsp 등), 데이터베이스(mysql, oracle 등)와 같은 기술이 출현할 수 밖에 없었던 절박함에 대해서 공감해봅니다.<br><br>
* 그 외에 코딩을 공부하면서 어려운 점, 기술과 관련된 고민상담을 해드립니다.<br>
* 초심자를 위한 수업이고 코딩을 한번도 해본적이 없는 분들을 대상으로 진행되는 수업입니다.<br>
* 중급자는 자신의 작업을 하면서 모르는 부분에 대해서 조력자의 도움을 받을 수 있습니다.<br><br>
  
지원내용: 지역 파트너에게 저희가 희망하는 지원내용은 아래와 같습니다.<br>
강의공간 (필수)<br>
100명 이상 수용<br>
노트북을 지참하신 분들이 실습할 수 있는 책상과 전원<br>
인터넷 (100명 이상이 동시에 사용할 정도의 속도는 필요하지 않습니다)<br>
강사 및 조력자 지원<br>
  
오프라인 강의는 많은 비용이 소요되기 때문에 아래와 같은 부분에 대한 지원을 희망합니다만, 필수는 아닙니다. 장소 지원 만으로도 큰 힘이 됩니다. 지원내역과 규모는 기관의 내부 기준에 따라서 제공해주시면 됩니다.<br><br>
교통비용<br>
숙박비용<br>
강사 및 보조강사 강사료<br>
  
지원해주신 기관이나 기업에게는 아래와 같은 방법으로 감사의 마음을 표시하려고 합니다. 죄송하게도 드릴 것이 많지 않습니다.<br>
해당 지역 방문행사의 공동 주관으로 표시<br>
000와 구글과 생활코딩이 함께하는 대전 방문 수업의 형식으로 행사 제목 표시<br>
코딩야학 2기 홈페이지에 지역별 후원기관 표시<br><br>
  
참가 방법:
코딩야학의 지역방문에 도움을 주실 의사가 있으시면 신청양식을 이용해주시면 감사하겠습니다. 스케줄 관리를 소수인원이 해야 하기 때문에 부득이하게 양식의 형식으로 도움을 요청드립니다. 양해 부탁드립니다. 양식을 제출해주시면 다시 연락 드리겠습니다.<br><br>
  
저희가 희망하는 강의실 지원 일정은 아래와 같습니다. 수업시간은 2시부터 6시를 희망합니다.<br>
7월 19일 : 서울 - 후원기관이 정해졌습니다.<br>
7월 20일 : 경기 - 서울과 통합할 예정입니다<br>
7월 22일 : 충북<br>
7월 23일 : 충남<br>
7월 25일 : 경북<br>
7월 26일 : 경남 - 후원기관이 정해졌습니다.<br>
7월 30일 : 제주 - 후원기관이 정해졌습니다.<br>
8월 6일 : 전북 - 후원기관이 정해졌습니다.<br>
8월 7일 : 전남<br>
8월 13일 : 강원 - 후원기관이 정해졌습니다.<br><br>
</td>
<tr>
<td align="center">
작성자: 구글코리아 블로그 운영팀
			</td>
		</tr>
	</table>
	</td>
</tr>
</table>
</body>
</html>