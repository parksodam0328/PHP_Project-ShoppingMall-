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
				&gt; 회원정보 &gt; <a href="/company/main2.php">CEO 인사말</a>
			</td>
		</tr>
	</table>
	<table width="100%" border="0"cellspacing="0" cellpadding="0">
		<tr>
			<td width="100%" align="center"><br><img src="/img/sundar.jpg" width="250" height="320"><br></td>
		</tr>
		<tr>
		</tr>
		<tr>
			<td width="250"><br>Google 스토리는 1995년 스탠포드대학에서 시작됩니다. Larry Page는 스탠포드대학원 진학을 고려 중이었으며, 스탠포드대 학생이었던 Sergey Brin은 Larry에게 학교를 안내하는 역할을 맡았습니다. 사람들의 말에 따르면 그들은 처음 만났을 때 서로 같은 생각을 가진 게 하나도 없었다고 합니다. 하지만 이듬해에는 절친한 사이가 되었습니다. 기숙사 방에서 그들은 링크를 사용하여 월드 와이드 웹상의 개별 페이지의 중요성을 판단하는 검색 엔진을 만들었습니다. 그들은 이 검색 엔진을 Backrub이라고 불렀습니다.

			하지만 얼마 지나지 않아 Backrub은 Google로 (다행히도) 이름이 바뀌었습니다. 이 이름은 10의 100제곱을 나타내는 수학 용어를 변형한 것이며 '전 세계의 정보를 체계화하여 모두가 편리하게 이용할 수 있도록 하자'는 Larry와 Sergey의 의지를 적절히 반영한 것이었습니다.<br><br>

			이후 수년간 Google은 학계는 물론 실리콘 밸리 투자자들의 주목을 끌었습니다. 1998년 8월 Sun의 공동 창립자 Andy Bechtolsheim은 Larry와 Sergey에게 100,000달러 수표를 써주었고 Google Inc.가 공식적으로 탄생했습니다. 이 투자금으로 Google은 기숙사 방을 벗어나 캘리포니아주 멘로 파크 교외 Susan Wojcicki(Google의 16번째 직원이자 현재 YouTube의 CEO) 소유의 차고에 첫 번째 사무실을 마련했습니다. 투박한 데스크톱 컴퓨터, 탁구대, 밝은 파란색 카펫이 초창기 Google 사무실의 모습이었습니다. 이렇게 화려한 색상으로 꾸미는 전통은 오늘까지 이어지고 있습니다.<br><br>

			레고로 만든 Google의 첫 번째 서버에서부터 1998년의 첫 번째 '기념일 로고'에 이르기까지, 초창기에도 모든 것이 참신하고 자유로웠습니다. 첫 번째 기념일 로고는 사이트 방문자에게 전 직원이 사무실을 비우고 버닝맨 축제에 나와 있다는 것을 알리기 위해 로고에 막대기 사람 모양의 그림을 그려 넣은 것이 계기가 되었습니다. 그 후 수년에 걸쳐 회사는 급속하게 확장했습니다. 엔지니어를 고용하고 영업팀을 구성하고 첫 번째 회사 강아지 요시카가 들어왔습니다. Google은 차고를 벗어나 마침내 캘리포니아주 마운틴 뷰의 현재 본사 위치('Googleplex')로 이전했습니다. 업무 방식을 차별화하려는 노력 덕분에 가능한 일이었습니다. 물론 요시카도 이사했습니다.<br><br>
			<b>
			Google은 어떤 일을 하든 끊임없이 더 나은 해답을 찾는 것을 목표로 하고 있습니다. 현재 Google은 50여 개국에 6만 명이 넘는 직원을 두고 있으며, YouTube와 Android, Smartbox, Google 검색 등 전 세계 수십억 명의 사람들이 사용하는 수백 가지 제품을 만들고 있습니다. 비록 레고 서버를 버리고 회사 강아지가 몇 마리 더 들어왔지만 모든 사람을 위한 기술을 개발하겠다는 Google의 열정은 기숙사 방에서 차고 시절을 지나 바로 오늘까지도 살아있습니다.</b>
			</td>
			</tr>
			<tr>
			<td align="right">
			<br>
			2015년 10월 선다 피차이(Sundar Pichai)
			</td>
		</tr>
	</table>
	</td>
</tr>
</table>
</body>
</html>