function validateForm() {

    var  name = document.forms["form1"]["name"].value;
    var  mail = document.forms["form1"]['mail'].value;
    var  namepattern = /^[A-Za-z ]+$/;
    var mailpattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    
    if(name==""){
        document.getElementById("name").innerHTML="Please enter  name";
        return false;
    }else if(!namepattern.test(name)){
        document.getElementById("name").innerHTML="Please enter correct name";
        return false;
    }else{
        document.getElementById("name").innerText="";
    }

     if(email==""){
        document.getElementById("email").innerHTML="Please enter email";
        return false;
    }else if(!mailpattern.test(email)){
        document.getElementById("email").innerHTML="Please enter correct email";
        return false;
    }else{
        document.getElementById("email").innerText="";
    } 

}