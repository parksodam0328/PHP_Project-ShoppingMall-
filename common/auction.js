<!--

function form_save(){
  var form = document.form1;
  
  if(!form.prod_name.value){
	alert('��ϻ�ǰ���� �Է����� �ʾҽ��ϴ�.');
	form.prod_name.focus();
	return;
  }

  if(!form.start_amt.value){
	alert('��� ���۰����� �Է����� �ʾҽ��ϴ�.');
	form.start_amt.focus();
	return;
  }

  if(!form.join_amt.value){
	alert('������� ������ �Է����� �ʾҽ��ϴ�.');
	form.join_amt.focus();
	return;
  }

  if(!form.total_cnt.value){
	alert('�� �Ǹż����� �Է����� �ʾҽ��ϴ�.');
	form.total_cnt.focus();
	return;
  }

  form.submit();
}


function auct_send(){
  var form = document.form1;
  var amt1, amt2 , amt3 , cnt1 , cnt2;
  
  if(!form.join_cnt.value){
	alert('���������� �Է����� �ʾҽ��ϴ�.');
	form.join_cnt.focus();
	return;
  }
  
  if(!form.join_amt.value){
	alert('���������� �Է����� �ʾҽ��ϴ�.');
	form.join_amt.focus();
	return;
  }

  amt1 = parseInt(form.join_amt.value);
  amt2 = parseInt(form.join_amt_1.value);
  amt3 = parseInt(form.limit_amt.value);

  cnt1 = parseInt(form.join_cnt.value);
  cnt2 = parseInt(form.join_cnt_1.value);
  
  if(amt1 < amt2){
    alert('���������� �ּ� �������� �̻� �Է��ϼž� �մϴ�.');
	form.join_amt.focus();
	return;
  } 
  // �ﱸ���� ������
  if(form.limit_type.value=='1'){
	  if(amt1 > amt3){
		alert('��ñ��Ű� �̻� �Է��� �� �����ϴ�.');
		form.join_amt.focus();
		return;
	  } 
  }
  
  if(cnt1 < 1){
    alert('���������� �Ѱ� �̻��̾�� �մϴ�.');
	form.join_cnt.focus();
	return;
  } 


  if(cnt1 > cnt2){
    alert('���������� �������� ���� �Է��Ͽ����ϴ�.');
	form.join_cnt.focus();
	return;
  } 

  if(!confirm('�����Ͻðڽ��ϱ�?')){
    return;
  }

  form.action = "auct_join_post.php";
  form.submit();

}

function brd_send_post(){
  var form = document.form1;
  
  if(!form.subject.value){
	alert('������ �Է����� �ʾҽ��ϴ�.');
	form.subject.focus();
	return;
  }
  
  if(!form.contents.value){
	alert('������ �Է����� �ʾҽ��ϴ�.');
	form.contents.focus();
	return;
  }
 form.submit();
}
//-->
