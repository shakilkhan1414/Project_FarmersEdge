const content = document.getElementById("main-content");
const xhttp	= new XMLHttpRequest();

function loginProcess(){
    let username=document.getElementById("username").value;
    let password=document.getElementById("password").value;

    if(username=="" || password==""){
        document.querySelector(".error").innerHTML="*Username and password required!";
    }
    else{
        xhttp.open('POST', '../checking/loginCheck.php', true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("username="+username+"&password="+password);
        xhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                if(this.responseText=="success"){
                    location.href="../view/dashboard.php";
                }
                else{
                    document.querySelector(".error").innerHTML="*Invalid username and password!";
                }
            }
        }
    }

    return false;
}

function home(){
    location.href="../view/dashboard.php";
}

function showCards(){
    xhttp.open('POST', '../view/cardContent.php', true);
	xhttp.send();
    xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			document.querySelector(".dash-cards").innerHTML = this.responseText;
		}
    }
}

function homeContent(){
    xhttp.open('POST', '../view/homeContent.php', true);
	xhttp.send();
    xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			content.innerHTML = this.responseText;
            showCards();
		}
    }
  
}

function showMembers(){
    xhttp.open('POST', '../view/members.php', true);
	xhttp.send();
    xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			content.innerHTML = this.responseText;
		}
    }
}

function addMember(){
    xhttp.open('POST', '../view/addMember.php', true);
	xhttp.send();
    xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			content.innerHTML = this.responseText;
		}
    }
}

function ShowProducts(){
    xhttp.open('POST', '../view/products.php', true);
	xhttp.send();
    xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			content.innerHTML = this.responseText;
		}
    }
}

function addAdmin(){
    xhttp.open('POST', '../view/addAdmin.php', true);
	xhttp.send();
    xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			content.innerHTML = this.responseText;
		}
    }
}

function showOrders(){
    xhttp.open('POST', '../view/orders.php', true);
	xhttp.send();
    xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			content.innerHTML = this.responseText;
		}
    }
}

function transaction(){
    xhttp.open('POST', '../view/transaction.php', true);
	xhttp.send();
    xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			content.innerHTML = this.responseText;
		}
    }
}


function addProduct(){
    xhttp.open('POST', '../view/addProduct.php', true);
	xhttp.send();
    xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			content.innerHTML = this.responseText;
		}
    }
}

function showNotice(){
    xhttp.open('POST', '../view/notice.php', true);
	xhttp.send();
    xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			content.innerHTML = this.responseText;
		}
    }
}

function deleteNotice(id){
    xhttp.open('POST', '../view/notice.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("detete_id="+id);
    xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			content.innerHTML = this.responseText;
		}
    }
}

function addNotice(){
    location.href="../view/addNotice.php";
}

function showFAQ(){
    xhttp.open('POST', '../view/faq.php', true);
	xhttp.send();
    xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			content.innerHTML = this.responseText;
		}
    }
}
function showContact(){
    xhttp.open('POST', '../view/contactUs.php', true);
	xhttp.send();
    xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			content.innerHTML = this.responseText;
		}
    }
}

function deleteFAQ(id){
    xhttp.open('POST', '../view/faq.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("detete_id="+id);
    xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			content.innerHTML = this.responseText;
		}
    }
}

function showPost(){
    xhttp.open('POST', '../view/membersPost.php', true);
	xhttp.send();
    xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			content.innerHTML = this.responseText;
		}
    }
}

function deletePost(id){
    xhttp.open('POST', '../view/membersPost.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("detete_id="+id);
    xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			content.innerHTML = this.responseText;
		}
    }
}

function account(){
    xhttp.open('POST', '../view/account.php', true);
	xhttp.send();
    xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			content.innerHTML = this.responseText;
		}
    }
}

function logout(){
    xhttp.open('POST', '../checking/logout.php', true);
	xhttp.send();
    xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
            location.href="../view/index.php";
		}
    }
}

function viewProfile(id){
    xhttp.open('POST', '../view/viewProfile.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("id="+id);
    xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			content.innerHTML = this.responseText;
		}
    }
}

function deleteProfile(id){
    xhttp.open('POST', '../view/members.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("detete_id="+id);
    xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			content.innerHTML = this.responseText;
            showCards();
		}
    }
}

function deleteProduct(id){
    xhttp.open('POST', '../view/products.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("detete_id="+id);
    xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			content.innerHTML = this.responseText;
            showCards();
		}
    }
}

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

function validateName(name){
    if(!isNaN(name) || name.includes("@") || name.includes("#") || name.includes("%") || name.includes("$")){
        return false;
    }
    else{
        return true;
    }
}


function addMemberProcess(){

    const form= document.getElementById("addmember");

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
        if(validateName(firstname) && validateName(lastname)){
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
                                xhttp.open('POST', '../checking/addMemProcess.php', true);
                                let formData = new FormData(form);
                                xhttp.send(formData);
                                xhttp.onreadystatechange = function(){
                                    if(this.readyState == 4 && this.status == 200){
                                        if(this.responseText=="success"){
                                            msg.style.display = "block";
                                            msg.className="success";
                                            msg.innerHTML="Member Added successfully!";
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


function addAdminProcess(){

    const form= document.getElementById("addAdmin");

    let name=document.getElementById("name").value;
    let username=document.getElementById("username").value;
    let email=document.getElementById("email").value;
    let password=document.getElementById("password").value;
    let dob=document.getElementById("date").value;

    let msg= document.getElementById("msg");

    if(name=="" || username=="" || email=="" || password=="" || dob==""){
        msg.style.display = "block";
        msg.className="error";
        msg.innerHTML="*All fields are required!";
    }
    else{
        if(validateName(name)){
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
                                xhttp.open('POST', '../checking/addAdminProcess.php', true);
                                let formData = new FormData(form);
                                xhttp.send(formData);
                                xhttp.onreadystatechange = function(){
                                    if(this.readyState == 4 && this.status == 200){
                                        if(this.responseText=="success"){
                                            msg.style.display = "block";
                                            msg.className="success";
                                            msg.innerHTML="Admin Added successfully!";
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

function showEditAccount(){
    xhttp.open('POST', '../view/editAccount.php', true);
	xhttp.send();
    xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			content.innerHTML = this.responseText;
		}
    }
}

function showChangePass(){
    xhttp.open('POST', '../view/changePass.php', true);
	xhttp.send();
    xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			content.innerHTML = this.responseText;
		}
    }
}

function changePass(){

    const form= document.getElementById("changePass");

    let cpass=document.getElementById("cpass").value;
    let npass=document.getElementById("npass").value;
    let rpass=document.getElementById("rpass").value;

    let msg= document.getElementById("msg");

    if(cpass=="" || npass=="" || rpass==""){
        msg.style.display = "block";
        msg.className="error";
        msg.innerHTML="*All fields are required!";
    }
    else{
        if(npass.length < 5){
            msg.style.display = "block";
            msg.className="error";
            msg.innerHTML="*Password too short!";
        }
        else{
            if(npass.includes("@") || npass.includes("#") || npass.includes("$") || npass.includes("%")){
                if(npass==rpass){   
                    xhttp.open('POST', '../checking/changePassProcess.php', true);
                    let formData = new FormData(form);
                    xhttp.send(formData);
                    xhttp.onreadystatechange = function(){
                        if(this.readyState == 4 && this.status == 200){
                            if(this.responseText=="success"){
                                msg.style.display = "block";
                                msg.className="success";
                                msg.innerHTML="Password changed successfully!";
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
                    msg.innerHTML="*Password must match!";
                }
            }
            else{
                msg.style.display = "block";
                msg.className="error";
                msg.innerHTML="*Add a @/ #/ $/ % with new password!";
            }
        }
    }
    return false;
}



function editAccount(){

    const form= document.getElementById("editAccount");

    let name=document.getElementById("name").value;
    let username=document.getElementById("username").value;
    let email=document.getElementById("email").value;
    let dob=document.getElementById("date").value;

    let msg= document.getElementById("msg");

    if(name=="" || username=="" || email=="" || dob==""){
        msg.style.display = "block";
        msg.className="error";
        msg.innerHTML="*All fields are required!";
    }
    else{
        if(validateName(name)){
            if(username.length < 5 || !validateName(username)){
                msg.style.display = "block";
                msg.className="error";
                msg.innerHTML="*Invalid username!";
            }
            else{
                if(validateEmail(email)){
                        xhttp.open('POST', '../checking/editAccount.php', true);
                        let formData = new FormData(form);
                        xhttp.send(formData);
                        xhttp.onreadystatechange = function(){
                            if(this.readyState == 4 && this.status == 200){
                                if(this.responseText=="success"){
                                    msg.style.display = "block";
                                    msg.className="success";
                                    msg.innerHTML="Updated successfully!";
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

function search(){
    let value=document.getElementById("search").value;

    xhttp.open('POST', '../view/search.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("search="+value);
    xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			content.innerHTML = this.responseText;
		}
    }
}

function approvePost(id){
    xhttp.open('POST', '../checking/approvePost.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send("id="+id);
    xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			showPost();
		}
    }
}

function addProductproccess(){

    const form= document.getElementById("addProduct");

    let name=document.getElementById("name").value;
    let owner=document.getElementById("owner").value;
    let quantity=document.getElementById("quantity").value;
    let price=document.getElementById("price").value;
    let descripion=document.getElementById("descripion").value;

    let msg= document.getElementById("msg");

    if(name=="" || owner=="" || quantity=="" || price=="" || descripion==""){
        msg.style.display = "block";
        msg.className="error";
        msg.innerHTML="*All fields are required!";
    }
    else{
        if(!isNaN(quantity)){
                if(!isNaN(price)){
                        xhttp.open('POST', '../checking/addProductproc.php', true);
                        let formData = new FormData(form);
                        xhttp.send(formData);
                        xhttp.onreadystatechange = function(){
                            if(this.readyState == 4 && this.status == 200){
                                if(this.responseText=="success"){
                                    msg.style.display = "block";
                                    msg.className="success";
                                    msg.innerHTML="Product Added successfully!";
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
                    msg.innerHTML="*Price must be a number!";
                }
            }
        
        else{
            msg.style.display = "block";
            msg.className="error";
            msg.innerHTML="*Quantity must be a number!";
        }
    }

    return false;
}


function showEditUser(id){
    xhttp.open('POST', '../view/editUser.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("id="+id);
    xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			content.innerHTML = this.responseText;
		}
    }
}

function editUser(){
    const form= document.getElementById("editUser");

    let firstname=document.getElementById("firstname").value;
    let lastname=document.getElementById("lastname").value;
    let username=document.getElementById("username").value;
    let email=document.getElementById("email").value;
    let dob=document.getElementById("date").value;

    let msg= document.getElementById("msg");

    if(firstname=="" || lastname=="" || username=="" || email=="" || dob==""){
        msg.style.display = "block";
        msg.className="error";
        msg.innerHTML="*All fields are required!";
    }
    else{
        if(validateName(firstname) && validateName(lastname)){
            if(username.length < 5 || !validateName(username)){
                msg.style.display = "block";
                msg.className="error";
                msg.innerHTML="*Invalid username!";
            }
            else{
                if(validateEmail(email)){
                        xhttp.open('POST', '../checking/editUser.php', true);
                        let formData = new FormData(form);
                        xhttp.send(formData);
                        xhttp.onreadystatechange = function(){
                            if(this.readyState == 4 && this.status == 200){
                                if(this.responseText=="success"){
                                    msg.style.display = "block";
                                    msg.className="success";
                                    msg.innerHTML="Updated successfully!";
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

function editProduct(id){
    xhttp.open('POST', '../view/editProduct.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("id="+id);
    xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			content.innerHTML = this.responseText;
		}
    }
}

function editProductproccess(){

    const form= document.getElementById("editProduct");

    let name=document.getElementById("name").value;
    let owner=document.getElementById("owner").value;
    let quantity=document.getElementById("quantity").value;
    let price=document.getElementById("price").value;
    let description=document.getElementById("description").value;

    let msg= document.getElementById("msg");

    if(name=="" || owner=="" || quantity=="" || price=="" || description==""){
        msg.style.display = "block";
        msg.className="error";
        msg.innerHTML="*All fields are required!";
    }
    else{
        if(!isNaN(quantity)){
                if(!isNaN(price)){
                        xhttp.open('POST', '../checking/editProductproc.php', true);
                        let formData = new FormData(form);
                        xhttp.send(formData);
                        xhttp.onreadystatechange = function(){
                            if(this.readyState == 4 && this.status == 200){
                                if(this.responseText=="success"){
                                    msg.style.display = "block";
                                    msg.className="success";
                                    msg.innerHTML="Product Updated successfully!";
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
                    msg.innerHTML="*Price must be a number!";
                }
            }
        
        else{
            msg.style.display = "block";
            msg.className="error";
            msg.innerHTML="*Quantity must be a number!";
        }
    }

    return false;
}

function showAddNotice(){
    xhttp.open('POST', '../view/addNotice.php', true);
	xhttp.send();
    xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			content.innerHTML = this.responseText;
		}
    }
}

function addNoticeProc(){

    const form= document.getElementById("addNotice");

    let content=document.getElementById("content").value;

    let msg= document.getElementById("msg");

    if(content==""){
        msg.style.display = "block";
        msg.className="error";
        msg.innerHTML="*Content required!";
    }
    else{
        xhttp.open('POST', '../checking/addNoticeProc.php', true);
        let formData = new FormData(form);
        xhttp.send(formData);
        xhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                if(this.responseText=="success"){
                    msg.style.display = "block";
                    msg.className="success";
                    msg.innerHTML="Notice Added successfully!";
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

    return false;
}

function editNotice(id){
    xhttp.open('POST', '../view/editNotice.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("id="+id);
    xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			content.innerHTML = this.responseText;
		}
    }
}

function editNoticeProc(){

    const form= document.getElementById("editNotice");

    let content=document.getElementById("content").value;

    let msg= document.getElementById("msg");

    if(content==""){
        msg.style.display = "block";
        msg.className="error";
        msg.innerHTML="*Content required!";
    }
    else{
        xhttp.open('POST', '../checking/editNoticeProc.php', true);
        let formData = new FormData(form);
        xhttp.send(formData);
        xhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                if(this.responseText=="success"){
                    msg.style.display = "block";
                    msg.className="success";
                    msg.innerHTML="Notice updated successfully!";
                }
                else{
                    msg.style.display = "block";
                    msg.className="error";
                    msg.innerHTML=this.responseText;
                }
            }
        }
  
    }

    return false;
}

function showInbox(){
    xhttp.open('POST', '../view/conversations.php', true);
	xhttp.send();
    xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			content.innerHTML = this.responseText;
		}
    }
}

function sentMoney(id){
    xhttp.open('POST', '../checking/sentMoney.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("id="+id);
    xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
            document.getElementById("btn"+id).className="sent";
            document.getElementById("btn"+id).innerHTML="Sent";
            showCards();

		}
    }
}

function openInbox(id){
    xhttp.open('POST', '../view/inbox.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send("id="+id);
    xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
            content.innerHTML = this.responseText;
		}
    }
}


$(".sidebar li").click(function(){
    $(this).addClass('active').siblings().removeClass('active');
})


