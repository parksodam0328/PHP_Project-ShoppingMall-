<!--
  function form_reset(){
    document.gume.reset();
  }

function num_plus(num){
	gnum = parseInt(num.products_count.value);
	if (gnum > 1000) {
		alert(' ��ǰ���(1,000��)�� �ʰ��Ͽ����ϴ�. ');
		num.products_count.value = 1000;
		return;
	}
	num.products_count.value = gnum + 1;
	return;
}
function num_minus(num){

	gnum = parseInt(num.products_count.value);
	if( gnum > 1 ){
		num.products_count.value = gnum - 1;
	}
	else {
		alert('�� ��ǰ�� �ּ� ���ż����� (1��)�Դϴ�.');
	}
	return;
}

function is_number(){
	if ((event.keyCode<48)||(event.keyCode>57)){
		alert("\n\n������ ���ڸ� �Է��ϼž� �մϴ�.\n\n");
		event.returnValue=false;
	}
}


function cart_edit(form) {
  
  if(!form.products_count.value){
		alert('������ �Է����� �ʾҽ��ϴ�.');
		form.products_count.focus();
		return;
	}
  
  if(form.products_count.value) {
	  if(!IsNumber(form.products_count.name)){
         alert("������ �����̾�� �մϴ�!");
	     form.products_count.focus();
	     return;
	  }
  }

  form.action="cart_update.php?chk=2";
  form.submit();
}



function goCart(form) {

  if(!form.products_count.value){
		alert('������ �Է����� �ʾҽ��ϴ�.');
		form.products_count.focus();
		return;
	}
  
  if(form.products_count.value) {
	  if(!IsNumber(form.products_count.name)){
         alert("������ �����̾�� �մϴ�!");
	     form.products_count.focus();
	     return;
	  }
  }
  

  form.action="cart_update.php";
  form.submit();
}

function goOrder(form) {
  
  if(!form.products_count.value){
		alert('������ �Է����� �ʾҽ��ϴ�.');
		form.products_count.focus();
		return;
	}
  
  if(form.products_count.value) {
	  if(!IsNumber(form.products_count.name)){
         alert("������ �����̾�� �մϴ�!");
	     form.products_count.focus();
	     return;
	  }
  }

  form.action="cart_update.php?chk=2";
  form.submit();
}

function equalRecipient()
{
   var form = document.purchase;
   if(form.equ.checked == true){
	   form.recipient_name.value = form.buyer_name.value;
	   form.recipient_phone01.value = form.buyer_phone01.value;
	   form.recipient_phone02.value = form.buyer_phone02.value;
	   form.recipient_phone03.value = form.buyer_phone03.value;
	   form.recipient_hphone01.value = form.buyer_hphone01.value;
	   form.recipient_hphone02.value = form.buyer_hphone02.value;
	   form.recipient_hphone03.value = form.buyer_hphone03.value;
	   form.recipient_zipcode01.value = form.buyer_zipcode01.value;
	   form.recipient_zipcode02.value = form.buyer_zipcode02.value;
	   form.recipient_address01.value = form.buyer_address01.value;
	   form.recipient_address02.value = form.buyer_address02.value;
	}
	if(form.equ.checked == false){
		form.recipient_name.value = "";
	   form.recipient_phone01.value = "";
	   form.recipient_phone02.value = "";
	   form.recipient_phone03.value = "";
	   form.recipient_hphone01.value = "";
	   form.recipient_hphone02.value = "";
	   form.recipient_hphone03.value = "";
	   form.recipient_zipcode01.value = "";
	   form.recipient_zipcode02.value = "";
	   form.recipient_address01.value = "";
	   form.recipient_address02.value = "";
	}
  	
}


function mny_function(){

  form = document.purchase;
   
   var cost1,cost2,cost3,cost4;

	if(form.mileage_use.value) {
	  if(!IsNumber1(form.mileage_use.name)){
         alert("����Ʈ�� ���ڷ� �Է��ϼž� �մϴ�!");
		 form.mileage_use.value="";
	     form.mileage_use.focus();
	     return;
	  }
     cost1 = parseInt(form.mileage_use.value);
    }
    else{
      cost1 = 0;
     }
   
    cost2 = parseInt(form.mileage_tot.value);

    if(cost1 > cost2){
	  alert("����Ʈ ���ݾ��� �����׺��� Ŭ �� �����ϴ�!");
	  form.mileage_use.value="";
	  form.mileage_use.focus();
	  return;
	}
	else{
	  cost3 = parseInt(form.amount.value);
      cost4 = cost3 - cost1;
	  form.real_mny.value=cost4;
	}
   
}



function sendOrder(form)
{
        if(!confirm('������ �Ͻðڽ��ϱ�?')){
                return;
        }
	if(!form.buyer_name.value){
		alert('�����ڸ��� �Է����� �ʾҽ��ϴ�.');
		form.buyer_name.focus();
		return;
	}
	if(!form.buyer_phone01.value){
		alert('������ ��ȭ��ȣ�� �Է����� �ʾҽ��ϴ�.');
		form.buyer_phone01.focus();
		return;
	}
    if(!form.buyer_phone02.value){
		alert('������ ��ȭ��ȣ�� �Է����� �ʾҽ��ϴ�.');
		form.buyer_phone02.focus();
		return;
	}
	if(!form.buyer_phone03.value){
		alert('������ ��ȭ��ȣ�� �Է����� �ʾҽ��ϴ�.');
		form.buyer_phone03.focus();
		return;
	}
	if(!form.buyer_email.value){
		alert('�̸����� �Է����� �ʾҽ��ϴ�.');
		form.buyer_email.focus();
		return;
	}
    if (form.buyer_email.value.indexOf("@") < 0){
       alert('�̸��� �ּ� ������ Ʋ���ϴ�.');
       form.buyer_email.focus();
	   return; 
     }

   if (form.buyer_email.value.indexOf("/") >= 0){
      alert('�̸��� �ּ� ������ Ʋ���ϴ�.');
      form.buyer_email.focus();
      return; 
   }
    

	if(!form.recipient_name.value){
		alert('�����ڸ��� �Է����� �ʾҽ��ϴ�.');
		form.recipient_name.focus();
		return;
	}
	if(!form.recipient_phone01.value){
		alert('������ ��ȭ��ȣ�� �Է����� �ʾҽ��ϴ�.');
		form.recipient_phone01.focus();
		return;
	}
	if(!form.recipient_phone02.value){
		alert('������ ��ȭ��ȣ�� �Է����� �ʾҽ��ϴ�.');
		form.recipient_phone02.focus();
		return;
	}
	if(!form.recipient_phone03.value){
		alert('������ ��ȭ��ȣ�� �Է����� �ʾҽ��ϴ�.');
		form.recipient_phone03.focus();
		return;
	}
	if(!form.recipient_zipcode01.value || !form.recipient_zipcode02.value){
		alert('������ �����ȣ�� �Է����� �ʾҽ��ϴ�.');
		form.recipient_zipcode01.focus();
		return;
	}
	if(!form.recipient_address01.value){
		alert('������ �ּҸ� �Է����� �ʾҽ��ϴ�.');
		form.recipient_address01.focus();
		return;
	}

	form.submit();
}

  function IsNumber(formname) {
     var form=eval("document.products_info." + formname);

	 for(var i=0; i < form.value.length; i++) {
	     var chr = form.value.substr(i,1);
		 if((chr < '0' || chr > '9')) {
		    return false;
		 }
     }
     return true;
  }

  function IsNumber1(formname) {
     var form=eval("document.purchase." + formname);

	 for(var i=0; i < form.value.length; i++) {
	     var chr = form.value.substr(i,1);
		 if((chr < '0' || chr > '9')) {
		    return false;
		 }
     }
     return true;
  }

function ZipWindow(ref,what) {
     var window_left = (screen.width-640)/2;
	 var window_top = (screen.height-480)/2;
	 ref = ref + "?what=" + what;
	 window.open(ref,"zipWin",'width=470,height=262,status=no,scrollbars=yes,top=' + window_top + ',left=' + window_left + '');
  }

//-->
