<!--

function checkInput(){
   var form = document.form1;
   
  if(!form.id.value) {
     alert("���̵�(ID)�� �Է��ϼ���!");
	 form.id.focus();
	 return ;
  }
  if(!IsID(form.id.name)) {
     alert("���̵�� 4~10���� �����ҹ��� ���� �Ǵ� ���յ� ���ڿ��̾�� �մϴ�!");
     form.id.focus();
	 form.id.select();
	 return ;
  }
  
  if(!form.passwd.value) {
     alert("��й�ȣ�� �Է��ϼ���!");
	 form.passwd.focus();
	 return ;
  }
    if(!IsPW(form.passwd.name)) {
     alert("��й�ȣ�� 4~10���� �����ڳ� ���� �Ǵ� ���յ� ���ڿ��̾�� �մϴ�!");
	 form.passwd.focus();
	 form.passwd.select();
	 return;
  }
 
  if(form.passwd.value != form.passwd2.value) {
     alert("�Է��Ͻ� ��й�ȣ�� ��ġ���� �ʽ��ϴ�.\n�ٽ� Ȯ���Ͻð� �־��ֽʽÿ�!");
	 form.passwd2.focus();
	 form.passwd2.select();
	 return;
  }

  if(!form.jumin1.value) {
     alert("�ֹε�Ϲ�ȣ�� �Է��ϼ���!");
	 form.jumin1.focus();
	 return;
  }

   if(form.jumin1.value) {
	  if(!IsNumber(form.jumin1.name)){
         alert("�ֹε�Ϲ�ȣ�� �����̾�� �մϴ�!");
	     form.jumin1.focus();
	     return;
	  }
   }
 
   if(!form.jumin2.value) {
     alert("�ֹε�Ϲ�ȣ�� �Է��ϼ���!");
	 form.jumin2.focus();
	 return;
   }
  
   if(form.jumin2.value) {
      if(!IsNumber(form.jumin2.name)){
         alert("�ֹε�Ϲ�ȣ�� �����̾�� �մϴ�!");
	     form.jumin2.focus();
	     return;
	  }
   }

	var chk =0 
	var yy = form.jumin1.value.substring(0,2) 
	var mm = form.jumin1.value.substring(2,4) 
	var dd = form.jumin1.value.substring(4,6) 
	var sex = form.jumin2.value.substring(0,1) 

	if ((form.jumin1.value.length!=6)||(yy <25||mm <1||mm>12||dd<1)){ 
	alert ("�ֹε�Ϲ�ȣ�� �ٷ� �Է��Ͽ� �ֽʽÿ�."); 
	form.jumin1.focus(); 
	return ; 
	} 

	if ((sex != 1 && sex !=2 )||(form.jumin2.value.length != 7 )){ 
	alert ("�ֹε�Ϲ�ȣ�� �ٷ� �Է��Ͽ� �ֽʽÿ�."); 
	form.jumin2.focus(); 
	return; 
	} 

	// �ֹε�Ϲ�ȣ üũ 

	for (var i = 0; i <=5 ; i++){ 
	chk = chk + ((i%8+2) * parseInt(form.jumin1.value.substring(i,i+1))) 
	} 

	for (var i = 6; i <=11 ; i++){ 
	chk = chk + ((i%8+2) * parseInt(form.jumin2.value.substring(i-6,i-5))) 
	} 

	chk = 11 - (chk %11) 
	chk = chk % 10 

	if (chk != form.jumin2.value.substring(6,7)) 
	{ 
	alert ("��ȿ���� ���� �ֹε�Ϲ�ȣ�Դϴ�."); 
	form.jumin1.focus(); 
	return; 
	} 

  if(!form.phone1.value) {
     alert("��ȭ��ȣ�� �Է��ϼ���!");
     form.phone1.focus();
	 return;
  }
  
  if(!form.phone2.value) {
     alert("��ȭ��ȣ�� �Է��ϼ���!");
     form.phone2.focus();
	 return;
  }
  if(!form.phone3.value) {
     alert("��ȭ��ȣ�� �Է��ϼ���!");
     form.phone3.focus();
	 return;
  }

  if(form.phone1.value) {
     if(!IsNumber(form.phone1.name)){
         alert("��ȭ��ȣ�� �����̾�� �մϴ�!");
	     form.phone1.focus();
	     return;
	  }
   }
 
  if(form.phone2.value) {
     if(!IsNumber(form.phone2.name)){
         alert("��ȭ��ȣ�� �����̾�� �մϴ�!");
	     form.phone2.focus();
	     return;
	  }
  }

   if(form.phone3.value) {
     if(!IsNumber(form.phone3.name)){
         alert("��ȭ��ȣ�� �����̾�� �մϴ�!");
	     form.phone3.focus();
	     return;
	  }
   }


  if(!form.email.value) {
     alert("�̸����� �Է��ϼ���!");
     form.email.focus();
	 return;
   }

   if (form.email.value.indexOf("@") < 0){
    alert('�̸��� �ּ� ������ Ʋ���ϴ�.');
    form.email.focus();
	return; 
   }

   if (form.email.value.indexOf("/") >= 0){
     alert('�̸��� �ּ� ������ Ʋ���ϴ�.');
     form.email.focus();
     return; 
    }

  form.submit();
  }



function checkEdit(){
   var form = document.form1;
  
  if(!form.passwd.value) {
     alert("��й�ȣ�� �Է��ϼ���!");
	 form.passwd.focus();
	 return ;
  }
    if(!IsPW(form.passwd.name)) {
     alert("��й�ȣ�� 4 ~ 10���� �����ڳ� ���� �Ǵ� ���յ� ���ڿ��̾�� �մϴ�!");
	 form.passwd.focus();
	 form.passwd.select();
	 return;
  }
 
  if(form.passwd.value != form.passwd2.value) {
     alert("�Է��Ͻ� ��й�ȣ�� ��ġ���� �ʽ��ϴ�.\n�ٽ� Ȯ���Ͻð� �־��ֽʽÿ�!");
	 form.passwd2.focus();
	 form.passwd2.select();
	 return;
  }


  if(!form.phone1.value) {
     alert("��ȭ��ȣ�� �Է��ϼ���!");
     form.phone1.focus();
	 return;
  }
  
  if(!form.phone2.value) {
     alert("��ȭ��ȣ�� �Է��ϼ���!");
     form.phone2.focus();
	 return;
  }
  if(!form.phone3.value) {
     alert("��ȭ��ȣ�� �Է��ϼ���!");
     form.phone3.focus();
	 return;
  }

  if(form.phone1.value) {
     if(!IsNumber(form.phone1.name)){
         alert("��ȭ��ȣ�� �����̾�� �մϴ�!");
	     form.phone1.focus();
	     return;
	  }
   }
 
  if(form.phone2.value) {
     if(!IsNumber(form.phone2.name)){
         alert("��ȭ��ȣ�� �����̾�� �մϴ�!");
	     form.phone2.focus();
	     return;
	  }
  }

   if(form.phone3.value) {
     if(!IsNumber(form.phone3.name)){
         alert("��ȭ��ȣ�� �����̾�� �մϴ�!");
	     form.phone3.focus();
	     return;
	  }
   }


  if(!form.email.value) {
     alert("�̸����� �Է��ϼ���!");
     form.email.focus();
	 return;
   }

   if (form.email.value.indexOf("@") < 0){
    alert('�̸��� �ּ� ������ Ʋ���ϴ�.');
    form.email.focus();
	return; 
   }

   if (form.email.value.indexOf("/") >= 0){
     alert('�̸��� �ּ� ������ Ʋ���ϴ�.');
     form.email.focus();
     return; 
    }

  form.submit();
 
 }


function lost_checkInput1(){
   var form = document.form1;
   
  
  if(!form.name.value) {
     alert("�̸��� �Է��ϼ���!");
	 form.name.focus();
	 return ;
  }


 if(!form.jumin1.value) {
     alert("�ֹε�Ϲ�ȣ�� �Է��ϼ���!");
	 form.jumin1.focus();
	 return;
  }
    if(form.jumin1.value) {
	  if(!IsNumber(form.jumin1.name)){
         alert("�ֹε�Ϲ�ȣ�� �����̾�� �մϴ�!");
	     form.jumin1.focus();
	     return;
	  }
  }
 if(!form.jumin2.value) {
     alert("�ֹε�Ϲ�ȣ�� �Է��ϼ���!");
	 form.jumin2.focus();
	 return;
  }
  if(form.jumin2.value) {
      if(!IsNumber(form.jumin2.name)){
         alert("�ֹε�Ϲ�ȣ�� �����̾�� �մϴ�!");
	     form.jumin2.focus();
	     return;
	  }
  }
	var chk =0 
	var yy = form.jumin1.value.substring(0,2) 
	var mm = form.jumin1.value.substring(2,4) 
	var dd = form.jumin1.value.substring(4,6) 
	var sex = form.jumin2.value.substring(0,1) 

	if ((form.jumin1.value.length!=6)||(yy <25||mm <1||mm>12||dd<1)){ 
	alert ("�ֹε�Ϲ�ȣ�� �ٷ� �Է��Ͽ� �ֽʽÿ�."); 
	form.jumin1.focus(); 
	return ; 
	} 

	if ((sex != 1 && sex !=2 )||(form.jumin2.value.length != 7 )){ 
	alert ("�ֹε�Ϲ�ȣ�� �ٷ� �Է��Ͽ� �ֽʽÿ�."); 
	form.jumin2.focus(); 
	return; 
	} 

	// �ֹε�Ϲ�ȣ üũ 

	for (var i = 0; i <=5 ; i++){ 
	chk = chk + ((i%8+2) * parseInt(form.jumin1.value.substring(i,i+1))) 
	} 

	for (var i = 6; i <=11 ; i++){ 
	chk = chk + ((i%8+2) * parseInt(form.jumin2.value.substring(i-6,i-5))) 
	} 

	chk = 11 - (chk %11) 
	chk = chk % 10 

	if (chk != form.jumin2.value.substring(6,7)) 
	{ 
	alert ("��ȿ���� ���� �ֹε�Ϲ�ȣ�Դϴ�."); 
	form.jumin1.focus(); 
	return; 
	} 

	   form.submit();
	  }



	function lost_checkInput2(){
	   var form = document.form2;
	   
	  if(!form.id.value) {
		 alert("ID�� �Է��ϼ���!");
		 form.id.focus();
		 return ;
	  }

	  if(!form.name.value) {
		 alert("�̸��� �Է��ϼ���!");
		 form.name.focus();
		 return ;
	  }


	 if(!form.jumin1.value) {
		 alert("�ֹε�Ϲ�ȣ�� �Է��ϼ���!");
		 form.jumin1.focus();
		 return;
	  }

	 if(!form.jumin2.value) {
		 alert("�ֹε�Ϲ�ȣ�� �Է��ϼ���!");
		 form.jumin2.focus();
		 return;
	  }

	var chk =0 
	var yy = form.jumin1.value.substring(0,2) 
	var mm = form.jumin1.value.substring(2,4) 
	var dd = form.jumin1.value.substring(4,6) 
	var sex = form.jumin2.value.substring(0,1) 

	if ((form.jumin1.value.length!=6)||(yy <25||mm <1||mm>12||dd<1)){ 
	alert ("�ֹε�Ϲ�ȣ�� �ٷ� �Է��Ͽ� �ֽʽÿ�."); 
	form.jumin1.focus(); 
	return ; 
	} 

	if ((sex != 1 && sex !=2 )||(form.jumin2.value.length != 7 )){ 
	alert ("�ֹε�Ϲ�ȣ�� �ٷ� �Է��Ͽ� �ֽʽÿ�."); 
	form.jumin2.focus(); 
	return; 
	} 

	// �ֹε�Ϲ�ȣ üũ 

	for (var i = 0; i <=5 ; i++){ 
	chk = chk + ((i%8+2) * parseInt(form.jumin1.value.substring(i,i+1))) 
	} 

	for (var i = 6; i <=11 ; i++){ 
	chk = chk + ((i%8+2) * parseInt(form.jumin2.value.substring(i-6,i-5))) 
	} 

	chk = 11 - (chk %11) 
	chk = chk % 10 

	if (chk != form.jumin2.value.substring(6,7)) 
	{ 
	alert ("��ȿ���� ���� �ֹε�Ϲ�ȣ�Դϴ�."); 
	form.jumin1.focus(); 
	return; 
	} 

   form.submit();
  }


function focus_move(){
 var str = document.form1.jumin1.value.length;
  if(str == 6)
	document.form1.jumin2.focus();
}

function focus_move2(){
 var str = document.form2.jumin1.value.length;
  if(str == 6)
	document.form2.jumin2.focus();
}


 function IsID(formname) {
     var form=eval("document.form1." + formname);

     if(form.value.length < 4 || form.value.length > 10) {
         return false;
     }
     for(var i=0; i < form.value.length; i++) {
         var chr = form.value.substr(i,1);
         if((chr < '0' || chr > '9') && (chr < 'a' || chr > 'z')) {
            return false;
         }
     }
     return true;
  }

  function IsPW(formname) {
     var form=eval("document.form1." + formname);

     if(form.value.length < 4 || form.value.length > 10) {
         return false;
     }
     for(var i=0; i < form.value.length; i++) {
         var chr = form.value.substr(i,1);
         if((chr < '0' || chr > '9') && (chr < 'a' || chr > 'z') && ( chr < 'A' || chr > 'Z')) {
            return false;
         }
     }
     return true;
  }

    
  function IsNumber(formname) {
     var form=eval("document.form1." + formname);

	 for(var i=0; i < form.value.length; i++) {
	     var chr = form.value.substr(i,1);
		 if((chr < '0' || chr > '9')) {
		    return false;
		 }
     }
     return true;
  }

 
 function check_ID_Window(ref) {
   var id= eval(document.form1.id);

   if(!id.value) {
      alert('���̵�(ID)�� �Է��Ͻ� �Ŀ� Ȯ���ϼ���!');
	  id.focus();
	  return;
   }else {
      ref = ref + "?id=" + id.value;
	  var window_left = (screen.width-640)/2;
	  var window_top = (screen.height-480)/2;
	  window.open(ref,"checkIDWin",'width=400,height=200,scrollbars=no,status=no,top=' + window_top + ',left=' + window_left + '');
   }
}

  function ZipWindow(ref,what) {
     var window_left = (screen.width-640)/2;
     var window_top = (screen.height-480)/2;
     window.open(ref,"zipWin",'scrollbars=yes,width=420,height=250,status=no,top=' + window_top + ',left=' + window_left + '');
  }

//-->
