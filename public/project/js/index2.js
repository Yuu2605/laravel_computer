function kiemtra(){
	//check để trống
	msv=document.getElementById('msv');
	if(msv.value.length==0){
		alert("vui lòng nhập mã sinh viên!");
		msv.style.background="yellow";
		return false;
	}else{
		msv.style.background="";
	}
	hvt=document.getElementById('hvt');
	if(hvt.value.length==0){
		alert("vui lòng nhập họ tên sinh viên!");
		hvt.style.background="yellow";
		return false;
	}else{
		hvt.style.background="";
	}
	email=document.getElementById('em');
	if(email.value.length==0){
		alert("vui lòng nhập email!");
		email.style.background="yellow";
		return false;
	}
	else{
email.style.background="";
	}
	//kiểm tra chọn radio
 var radio = document.getElementsByName('gt');
 var baogioitinh=document.getElementById('gioitinh');
if(!radio[0].checked && !radio[1].checked){
alert('Vui lòng chọn giới tính!');
baogioitinh.style.background="yellow";
return false;
}else{
	baogioitinh.style.background="";
}
//kiểm tra checkbox
 var checkbox = document.getElementsByName('checkbox');
 var baosothich=document.getElementById('sothich')
if(!checkbox[0].checked&&!checkbox[1].checked&&!checkbox[2].checked&&!checkbox[3].checked&&!checkbox[4].checked){
alert('Vui lòng chọn sở thích!');
baosothich.style.background="yellow";
return false;
}else{
baosothich.style.background="";
}
//kiểm tra select box
var select = document.getElementById("select");
if(select.value.length == 0){
alert("Vui lòng chọn quốc tịch!");
select.style.background="yellow";
return false;
}else{
	select.style.background="";
}
kiemtrakitu=document.getElementById('textarea')
if(kiemtrakitu.value.length>200){
	
	alert("không được nhập quá 200 kí tự!")
kiemtrakitu.style.background="yellow";
return false;
}else{
	//submit ok
	alert('đăng kí thành công.');
	return true;
}


}
