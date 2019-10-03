<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Insert title here</title>

<script type="text/javascript">
function ispwdPolicy(){
	var pwdPolicy =/^\w*(?=\w*\d)(?=\w*[a-z])(?=\w*[A-Z])\w*$/;
	var pass=document.thisForm.password.value;
	if(pass.match(pwdPolicy)){
		return true;
	}else{
		alert("Please fallow password policy");
		document.thisForm.password.focus();
		return false;
	}
	if (pwdPolicy.length < 6){
		$('#result').removeClass()
			$('#result').addClass('short')
			return 'Too short' 
	}
}
</script>
</head>
<body>
<form name="thisForm">
Please Enter the One number, One small letter, One capital letter
Password: <input type='text' name="password" />
<input type='button' 
	onclick="ispwdPolicy()" value='Check Field' />
</form>
</body>
</html>