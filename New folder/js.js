function formValidate() {
            let uname = document.getElementById("uname").value;
            let uemail = document.getElementById("uemail").value;
            let uaddress = document.getElementById("uaddress").value;
            let umale = document.getElementById("umale");
            let ufemale = document.getElementById("ufemale");
            // let gender = document.getElementById("gender");
            let upassword = document.getElementById("upassword").value;
            let ucpassword = document.getElementById("ucpassword").value;
            let usubject = document.getElementById("usubject").value;
            let agree = document.getElementById("uagree").checked; 

            let email_pattern = /^[A-Za-z0-9+-_]+@[A-Za-z]+\.[a-z]{2,}/;

            if (uname == "" || uname == " ") {
                alert("please enter name......");
                document.getElementById("uname").focus();
                return false;
            } else if (uemail == "" || uemail == " ") {
                alert("please enter email......");
                document.getElementById("uemail").focus();
                return false;
            } else if (!uemail.match(email_pattern)) {
                alert("please enter a valid email......");
                document.getElementById("uemail").focus();
                return false;
            } else if (uaddress == "" || uaddress == " ") {
                alert("please enter address......");
                document.getElementById("uaddress").focus();
                return false;
            } else if (upassword == "" || upassword.length < 6) {
                alert("The password length should be atleast 6......");
                document.getElementById("upassword").focus();
                return false;
            } else if (upassword != ucpassword) {
                alert("please enter same password......");
                document.getElementById("ucpassword").focus();
                return false;
            } else if (!umale.checked && !ufemale.checked) {
                alert("please select any gender field......");
                document.getElementById("umale").focus();
                return false;
            }else if (usubject == "") {
                alert("please select any course field......");
                document.getElementById("usubject").focus();
                return false;
            } else if (!agree) {
                alert("please agree .....");
                return false;
            } else {
                return true;
            }
        }