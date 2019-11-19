/*show-password-code*/
function myFunction() {
					var x = document.getElementById("myInput");
					if (x.type === "password") {
						x.type = "text";
					} else {
						x.type = "password";
					}
				}
/*REGISTERATION-TIME--PASSWORD*/
var che = function() { 
	                     
                    if (document.getElementById('yInput').value ==
                        document.getElementById('zInput').value) {
                        document.getElementById('message').style.color = 'green';
                        document.getElementById('message').innerHTML = 'matching';
                        document.getElementById("btn").disabled = false;
                    } else {
                        document.getElementById('message').style.color = 'red';
                        document.getElementById('message').innerHTML = 'not matching';
                        document.getElementById("btn").disabled = true;  /*Disable functionality*/
                    }
                }
                