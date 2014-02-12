function validatePass(p1, p2) {
    if (p1.value != p2.value || p1.value == '' || p2.value == '') {
        p2.setCustomValidity('Password You Entered Does Not Match The One You Entered Before');
    } else {
        p2.setCustomValidity('');
    }
}

function check_username(n1,p1) {
	
if(p1==1){
	n1.setCustomValidity('The username you entered is currently existed');
}
else {
	n1.setCustomValidity('');
}


	}
	

function check_email(n1,p1){
	if(p1==1){
	n1.setCustomValidity('The email you entered is currently existed');
}
else {
	n1.setCustomValidity('');
}
}