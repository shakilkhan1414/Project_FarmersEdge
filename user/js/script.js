const xhttp	= new XMLHttpRequest();

function validateEmail(email){
    let atposition=email.indexOf("@");  
    let dotposition=email.lastIndexOf(".");  
    if (atposition<1 || dotposition<atposition+2 || dotposition+2>=email.length){   
      return false;  
      }
      else{
          return true;
      }
}
function isNumeric(name){
    if(name.includes("0") || name.includes("1")|| name.includes("2")|| name.includes("3")|| name.includes("4")|| name.includes("5")|| name.includes("6")|| name.includes("7")|| name.includes("8")|| name.includes("9")) {
        return true;
    }
    else{
        return false;
    }
}

function validateName(name){
    if(!isNaN(name) || name.includes("@") || name.includes("#") || name.includes("%") || name.includes("$")){
        return false;
    }
    else{
        return true;
    }
}


function registration(){

    const form= document.getElementById("registration");

    let firstname=document.getElementById("firstname").value;
    let lastname=document.getElementById("lastname").value;
    let username=document.getElementById("username").value;
    let email=document.getElementById("email").value;
    let password=document.getElementById("password").value;
    let repassword=document.getElementById("repassword").value;
    let dob=document.getElementById("date").value;

    let msg= document.getElementById("msg");

    if(firstname=="" || lastname=="" || username=="" || email=="" || password=="" || repassword=="" || dob==""){
        msg.style.display = "block";
        msg.className="error";
        msg.innerHTML="*All fields are required!";
    }
    else{
        if(validateName(firstname) && validateName(lastname) && !isNumeric(firstname) && !isNumeric(lastname) ){
            if(username.length < 5 || !validateName(username)){
                msg.style.display = "block";
                msg.className="error";
                msg.innerHTML="*Invalid username!";
            }
            else{
                if(validateEmail(email)){
                    if(password.length < 5){
                        msg.style.display = "block";
                        msg.className="error";
                        msg.innerHTML="*Password too short!";
                    }
                    else{
                        if(password.includes("@") || password.includes("#") || password.includes("$") || password.includes("%")){
                            if(password==repassword){
                                xhttp.open('POST', '../checking/signCheck.php', true);
                                let formData = new FormData(form);
                                xhttp.send(formData);
                                xhttp.onreadystatechange = function(){
                                    if(this.readyState == 4 && this.status == 200){
                                        if(this.responseText=="success"){
                                            msg.style.display = "block";
                                            msg.className="success";
                                            msg.innerHTML="Registration successfull!";
                                            form.reset();
                                            showCards();
                                        }
                                        else{
                                            msg.style.display = "block";
                                            msg.className="error";
                                            msg.innerHTML=this.responseText;
                                        }
                                    }
                                }
                            }
                            else{
                                msg.style.display = "block";
                                msg.className="error";
                                msg.innerHTML="*Password must match!";
                            }
                        }
                        else{
                            msg.style.display = "block";
                            msg.className="error";
                            msg.innerHTML="*Add a @/ #/ $/ % with password!";
                        }
                    }
                }
                else{
                    msg.style.display = "block";
                    msg.className="error";
                    msg.innerHTML="*Incorrect email format!";
                }
            }
        }
        else{
            msg.style.display = "block";
            msg.className="error";
            msg.innerHTML="*Invalid name!";
        }
    }

    return false;
}

function faqProc(){
    const form= document.getElementById("faq");

    let name=document.getElementById("name").value;
    let email=document.getElementById("email").value;
    let message=document.getElementById("message").value;

    let msg= document.getElementById("msg");

    if(name=="" || email=="" || message==""){
        msg.style.display = "block";
        msg.className="error";
        msg.innerHTML="*All fields are required!";
    }
    else{
        if(validateEmail(email)){
            xhttp.open('POST', '../checking/faq.php', true);
            let formData = new FormData(form);
            xhttp.send(formData);
            xhttp.onreadystatechange = function(){
                if(this.readyState == 4 && this.status == 200){
                    if(this.responseText=="success"){
                        msg.style.display = "block";
                        msg.className="success";
                        msg.innerHTML="Sent successfully!";
                        form.reset();
                    }
                    else{
                        msg.style.display = "block";
                        msg.className="error";
                        msg.innerHTML=this.responseText;
                    }
                }
            }
        }
        else{
            msg.style.display = "block";
            msg.className="error";
            msg.innerHTML="*Invalid Email!";
        }
    }
    return false;
}

function addCart(id){
    xhttp.open('POST', '../checking/addCart.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("id="+id);
    xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			document.getElementById("add"+id).innerHTML="Added";
            document.getElementById("add"+id).style.backgroundColor="red";
            document.getElementById("add"+id).style.color="white";
		}
    }
}
function addseed(id){
    xhttp.open('POST', '../checking/addSeed.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("id="+id);
    xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			document.getElementById("add"+id).innerHTML="Added";
            document.getElementById("add"+id).style.backgroundColor="red";
            document.getElementById("add"+id).style.color="white";
		}
    }
}
function placeOrder(price,quantity,name){
    xhttp.open('GET', '../checking/placeOrder.php?name='+name+'&quantity='+quantity+'&price='+price, true);
	xhttp.send();
    xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			if(this.responseText=="success"){
                alert("Order Succesfull!");
                location.href="../view/cart.php";
            }
            else{
                alert("Failed!!");
            }
		}
    }
}



