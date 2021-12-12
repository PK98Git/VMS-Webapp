// Example starter JavaScript for disabling form submissions if there are invalid fields
// (function () {
//     'use strict'
  
//     // Fetch all the forms we want to apply custom Bootstrap validation styles to
//     var forms = document.querySelectorAll('.needs-validation')
  
//     // Loop over them and prevent submission
//     Array.prototype.slice.call(forms)
//       .forEach(function (form) {
//         form.addEventListener('submit', function (event) {
//           // var fname = document.getElementById("firstName").value;
//           if (!form.checkValidity()) {
//             event.preventDefault()
//             event.stopPropagation()
//           }

          
  
//           form.classList.add('was-validated')
//         }, false)
//       })
//   })()

  function validateDoctor(){
    let fname = document.getElementById("firstName").value;
    let lname = document.getElementById("lastName").value;
    let nic = document.getElementById("nic").value;
    let slmcNumber = document.getElementById("slmcNumber").value;
    let ContactNumber = document.getElementById("ContactNumber").value;
    let email = document.getElementById("email").value;
    let qualification = document.getElementById("qualification").value;
    let dob = document.getElementById("dob").value;
    let address = document.getElementById("address").value;
    var gender = document.getElementsByName('gender');

      // Name
      if(fname == ""){
          document.getElementById("errorName").innerHTML = "first Name with Initials is required!";
          return false;
      }else if(!isNaN(fname)){
          document.getElementById("errorName").innerHTML = "A valid Name is required!";
          return false;
      } else {
          document.getElementById("errorName").innerHTML = "";
      }

            // Name
      if(lname == ""){
          document.getElementById("errorlName").innerHTML = "Last Name with Initials is required!";
          return false;
      }else if(!isNaN(lname)){
          document.getElementById("errorlName").innerHTML = "A valid Name is required!";
          return false;
      } else {
          document.getElementById("errorlName").innerHTML = "";
      }

      if(slmcNumber==""){
        document.getElementById("errorslmcNumber").innerHTML = "slmc Number is required!";
        return false; 
      }
      else if(slmcNumber.length<9){
          document.getElementById("errorslmcNumber").innerHTML = "Invalid slmc Number Number!";
          return false; 
        }else if(slmcNumber.length>12){
          document.getElementById("errorslmcNumber").innerHTML = "Invalid slmc Number Number! slmcNumber should not exeed 12";
          return false; 
        } else {
          document.getElementById("errorslmcNumber").innerHTML = "";
      }

      if(nic==""){
        document.getElementById("errornic").innerHTML = "NIC is required!";
        return false; 
      }
      else if(nic.length<9){
          document.getElementById("errornic").innerHTML = "Invalid Nic Number!";
          return false; 
        }else if(nic.length>12){
          document.getElementById("errornic").innerHTML = "Invalid Nic Number! NIC should not exeed 12";
          return false; 
        } else {
          document.getElementById("errornic").innerHTML = "";
      }

          // ContactNumber

    if(ContactNumber==""){
      document.getElementById("errorContactNumber").innerHTML = "ContactNumber is required!";
         return false;
    }else{
        if(ContactNumber.length<12){
          document.getElementById("errorContactNumber").innerHTML = "A valid Contact Number is required !!";
            return false;
        }if(ContactNumber.length>12){
          document.getElementById("errorContactNumber").innerHTML = "A valid Contact Number is required.Maximum length should be 12 !!";
            return false;
        }if(ContactNumber.length==12){
          document.getElementById("errorContactNumber").innerHTML = "";
        }   
    }  

    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(email==""){
      document.getElementById("erroremail").innerHTML = "Email Address is required!";
       return false;
    }else  if(!email.match(mailformat)){
        document.getElementById("erroremail").innerHTML = "valid email Address is required!";
        return false;       
    } else {
      document.getElementById("erroremail").innerHTML = "";
      // return false;       
  }  

    if(qualification==""){
      document.getElementById("errorqualification").innerHTML = "qualification is required!";
       return false;
    }else {
        document.getElementById("errorqualification").innerHTML = "";
        // return false;       
    } 
 
    if(dob==""){
      document.getElementById("errordob").innerHTML = "date of birth is required!";
       return false;
    }else {
        document.getElementById("errordob").innerHTML = "";
        // return false;       
    } 

    if(address==""){
      document.getElementById("erroraddress").innerHTML = "Address is required!";
       return false;
    }else {
        document.getElementById("erroraddress").innerHTML = "";
        // return false;       
    } 

        // Gender
        for(var i=0; i<gender.length;i++){
          if(gender[i].checked == true){
              genValue = true;    
          }
      }
      if(!genValue){
          document.getElementById("errorgender").innerHTML = "Choose your Gender!";
          return false;
      } else {
          document.getElementById("errorgender").innerHTML = "";
      }

  }


  // nurse

  function validateNurse(){
    let fname = document.getElementById("firstName").value;
    let lname = document.getElementById("lastName").value;
    let nic = document.getElementById("nic").value;
    let position = document.getElementById("position");
    let ContactNumber = document.getElementById("ContactNumber").value;
    let email = document.getElementById("email").value;
    let qualification = document.getElementById("qualification").value;
    let dob = document.getElementById("dob").value;
    let address = document.getElementById("address").value;
    var gender = document.getElementsByName('gender');

      // Name
      if(fname == ""){
          document.getElementById("errorName").innerHTML = "first Name with Initials is required!";
          return false;
      }else if(!isNaN(fname)){
          document.getElementById("errorName").innerHTML = "A valid Name is required!";
          return false;
      } else {
          document.getElementById("errorName").innerHTML = "";
      }

            // Name
      if(lname == ""){
          document.getElementById("errorlName").innerHTML = "Last Name with Initials is required!";
          return false;
      }else if(!isNaN(lname)){
          document.getElementById("errorlName").innerHTML = "A valid Name is required!";
          return false;
      } else {
          document.getElementById("errorlName").innerHTML = "";
      }

      var optionSelIndex = position.options[position.selectedIndex].value;
        // var optionSelectedText = position.options[e.selectedIndex].text;
        if (optionSelIndex == 0) {
          document.getElementById("errorposition").innerHTML = "Position is required!";
          return false; 
        }
        else {
          document.getElementById("errorposition").innerHTML = "";
        }


      if(nic==""){
        document.getElementById("errornic").innerHTML = "NIC is required!";
        return false; 
      }
      else if(nic.length<9){
          document.getElementById("errornic").innerHTML = "Invalid Nic Number!";
          return false; 
        }else if(nic.length>12){
          document.getElementById("errornic").innerHTML = "Invalid Nic Number! NIC should not exeed 12";
          return false; 
        } else {
          document.getElementById("errornic").innerHTML = "";
      }

          // ContactNumber

    if(ContactNumber==""){
      document.getElementById("errorContactNumber").innerHTML = "ContactNumber is required!";
         return false;
    }else{
        if(ContactNumber.length<12){
          document.getElementById("errorContactNumber").innerHTML = "A valid Contact Number is required !!";
            return false;
        }if(ContactNumber.length>12){
          document.getElementById("errorContactNumber").innerHTML = "A valid Contact Number is required.Maximum length should be 12 !!";
            return false;
        }if(ContactNumber.length==12){
          document.getElementById("errorContactNumber").innerHTML = "";
        }   
    }  

    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(email==""){
      document.getElementById("erroremail").innerHTML = "Email Address is required!";
       return false;
    }else  if(!email.match(mailformat)){
        document.getElementById("erroremail").innerHTML = "valid email Address is required!";
        return false;       
    } else {
      document.getElementById("erroremail").innerHTML = "";
      // return false;       
  }  

    if(qualification==""){
      document.getElementById("errorqualification").innerHTML = "qualification is required!";
       return false;
    }else {
        document.getElementById("errorqualification").innerHTML = "";
        // return false;       
    } 

    if(dob==""){
      document.getElementById("errordob").innerHTML = "date of birth is required!";
       return false;
    }else {
        document.getElementById("errordob").innerHTML = "";
        // return false;       
    } 

    if(address==""){
      document.getElementById("erroraddress").innerHTML = "Address is required!";
       return false;
    }else {
        document.getElementById("erroraddress").innerHTML = "";
        // return false;       
    } 

        // Gender
        for(var i=0; i<gender.length;i++){
          if(gender[i].checked == true){
              genValue = true;    
          }
      }
      if(!genValue){
          document.getElementById("errorgender").innerHTML = "Choose your Gender!";
          return false;
      } else {
          document.getElementById("errorgender").innerHTML = "";
      }

  }

  // phi

  function validatePhi(){
    let fname = document.getElementById("firstName").value;
    let lname = document.getElementById("lastName").value;
    let nic = document.getElementById("nic").value;
    // let position = document.getElementById("position");
    let ContactNumber = document.getElementById("ContactNumber").value;
    let email = document.getElementById("email").value;
    let qualification = document.getElementById("qualification").value;
    let dob = document.getElementById("dob").value;
    let address = document.getElementById("address").value;
    var gender = document.getElementsByName('gender');

      // Name
      if(fname == ""){
          document.getElementById("errorName").innerHTML = "first Name with Initials is required!";
          return false;
      }else if(!isNaN(fname)){
          document.getElementById("errorName").innerHTML = "A valid Name is required!";
          return false;
      } else {
          document.getElementById("errorName").innerHTML = "";
      }

            // Name
      if(lname == ""){
          document.getElementById("errorlName").innerHTML = "Last Name with Initials is required!";
          return false;
      }else if(!isNaN(lname)){
          document.getElementById("errorlName").innerHTML = "A valid Name is required!";
          return false;
      } else {
          document.getElementById("errorlName").innerHTML = "";
      }


      if(nic==""){
        document.getElementById("errornic").innerHTML = "NIC is required!";
        return false; 
      }
      else if(nic.length<9){
          document.getElementById("errornic").innerHTML = "Invalid Nic Number!";
          return false; 
        }else if(nic.length>12){
          document.getElementById("errornic").innerHTML = "Invalid Nic Number! NIC should not exeed 12";
          return false; 
        } else {
          document.getElementById("errornic").innerHTML = "";
      }

          // ContactNumber

    if(ContactNumber==""){
      document.getElementById("errorContactNumber").innerHTML = "ContactNumber is required!";
         return false;
    }else{
        if(ContactNumber.length<12){
          document.getElementById("errorContactNumber").innerHTML = "A valid Contact Number is required !!";
            return false;
        }if(ContactNumber.length>12){
          document.getElementById("errorContactNumber").innerHTML = "A valid Contact Number is required.Maximum length should be 10 !!";
            return false;
        }if(ContactNumber.length==12){
          document.getElementById("errorContactNumber").innerHTML = "";
        }   
    }  

    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(email==""){
      document.getElementById("erroremail").innerHTML = "Email Address is required!";
       return false;
    }else  if(!email.match(mailformat)){
        document.getElementById("erroremail").innerHTML = "valid email Address is required!";
        return false;       
    } else {
      document.getElementById("erroremail").innerHTML = "";
      // return false;       
  }  

    if(qualification==""){
      document.getElementById("errorqualification").innerHTML = "qualification is required!";
       return false;
    }else {
        document.getElementById("errorqualification").innerHTML = "";
        // return false;       
    } 

    if(dob==""){
      document.getElementById("errordob").innerHTML = "date of birth is required!";
       return false;
    }else {
        document.getElementById("errordob").innerHTML = "";
        // return false;       
    } 

      // Gender
      for(var i=0; i<gender.length;i++){
        if(gender[i].checked == true){
            genValue = true;    
        }
      }
      if(!genValue){
          document.getElementById("errorgender").innerHTML = "Choose your Gender!";
          return false;
      } else {
          document.getElementById("errorgender").innerHTML = "";
      }

    if(address==""){
      document.getElementById("erroraddress").innerHTML = "Address is required!";
       return false;
    }else {
        document.getElementById("erroraddress").innerHTML = "";
        // return false;       
    } 

  }


  // phi

  function validatePeople(){
    let name = document.getElementById("name").value;
    let nic = document.getElementById("nic").value;
    let ContactNumber = document.getElementById("ContactNumber").value;
    let email = document.getElementById("email").value;
    let dob = document.getElementById("dob").value;
    let address = document.getElementById("address").value;
    var gender = document.getElementsByName('gender');
    let province = document.getElementById("province");
    let district = document.getElementById("district");
    let ds = document.getElementById("ds");

      // Name
      if(name == ""){
          document.getElementById("errorName").innerHTML = "Name with Initials is required!";
          return false;
      }else if(!isNaN(name)){
          document.getElementById("errorName").innerHTML = "A valid Name is required!";
          return false;
      } else {
          document.getElementById("errorName").innerHTML = "";
      }

      if(nic==""){
        document.getElementById("errornic").innerHTML = "NIC is required!";
        return false; 
      }
      else if(nic.length<9){
          document.getElementById("errornic").innerHTML = "Invalid Nic Number!";
          return false; 
        }else if(nic.length>12){
          document.getElementById("errornic").innerHTML = "Invalid Nic Number! NIC should not exeed 12";
          return false; 
        } else {
          document.getElementById("errornic").innerHTML = "";
      }

          // ContactNumber

    if(ContactNumber==""){
      document.getElementById("errorContactNumber").innerHTML = "ContactNumber is required!";
         return false;
    }else{
        if(ContactNumber.length<12){
          document.getElementById("errorContactNumber").innerHTML = "A valid Contact Number is required !!";
            return false;
        }if(ContactNumber.length>12){
          document.getElementById("errorContactNumber").innerHTML = "A valid Contact Number is required.Maximum length should be 10 !!";
            return false;
        }if(ContactNumber.length==12){
          document.getElementById("errorContactNumber").innerHTML = "";
        }   
    }  

    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(email==""){
      document.getElementById("erroremail").innerHTML = "Email Address is required!";
       return false;
    }else  if(!email.match(mailformat)){
        document.getElementById("erroremail").innerHTML = "valid email Address is required!";
        return false;       
    } else {
      document.getElementById("erroremail").innerHTML = "";
      // return false;       
  }  

    if(dob==""){
      document.getElementById("errordob").innerHTML = "date of birth is required!";
       return false;
    }else {
        document.getElementById("errordob").innerHTML = "";
        // return false;       
    } 

    if(address==""){
      document.getElementById("erroraddress").innerHTML = "Address is required!";
       return false;
    }else {
        document.getElementById("erroraddress").innerHTML = "";
        // return false;       
    } 

      // Gender
      for(var i=0; i<gender.length;i++){
        if(gender[i].checked == true){
            genValue = true;    
        }
      }
      if(!genValue){
          document.getElementById("errorgender").innerHTML = "Choose your Gender!";
          return false;
      } else {
          document.getElementById("errorgender").innerHTML = "";
      }


      var optionSelIndex = province.options[province.selectedIndex].value;
        // var optionSelectedText = position.options[e.selectedIndex].text;
        if (optionSelIndex == 0) {
          document.getElementById("errorprovince").innerHTML = "Province is required!";
          return false; 
        }
        else {
          document.getElementById("errorprovince").innerHTML = "";
        }

        // var optionSelIndex = district.options[district.selectedIndex].value;
        // // var optionSelectedText = position.options[e.selectedIndex].text;
        // if (optionSelIndex == 0) {
        //   document.getElementById("errordistrict").innerHTML = "District is required!";
        //   return false; 
        // }
        // else {
        //   document.getElementById("errordistrict").innerHTML = "";
        // }

        // var optionSelIndex = ds.options[ds.selectedIndex].value;
        // // var optionSelectedText = position.options[e.selectedIndex].text;
        // if (optionSelIndex == 0) {
        //   document.getElementById("errords").innerHTML = "DS Division is required!";
        //   return false; 
        // }
        // else {
        //   document.getElementById("errords").innerHTML = "";
        // }

  }

  function validateSystem(){
    let name = document.getElementById("name").value;
    let nic = document.getElementById("nic").value;
    let ContactNumber = document.getElementById("ContactNumber").value;
    let email = document.getElementById("email").value;
    let address = document.getElementById("address").value;
    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;

      // Name
      if(name == ""){
          document.getElementById("errorName").innerHTML = "first Name with Initials is required!";
          return false;
      }else if(!isNaN(name)){
          document.getElementById("errorName").innerHTML = "A valid Name is required!";
          return false;
      } else {
          document.getElementById("errorName").innerHTML = "";
      }


      if(nic==""){
        document.getElementById("errornic").innerHTML = "NIC is required!";
        return false; 
      }
      else if(nic.length<9){
          document.getElementById("errornic").innerHTML = "Invalid Nic Number!";
          return false; 
        }else if(nic.length>12){
          document.getElementById("errornic").innerHTML = "Invalid Nic Number! NIC should not exeed 12";
          return false; 
        } else {
          document.getElementById("errornic").innerHTML = "";
      }

          // ContactNumber

    if(ContactNumber==""){
      document.getElementById("errorContactNumber").innerHTML = "ContactNumber is required!";
         return false;
    }else{
        if(ContactNumber.length<12){
          document.getElementById("errorContactNumber").innerHTML = "A valid Contact Number is required !!";
            return false;
        }if(ContactNumber.length>12){
          document.getElementById("errorContactNumber").innerHTML = "A valid Contact Number is required.Maximum length should be 10 !!";
            return false;
        }if(ContactNumber.length==12){
          document.getElementById("errorContactNumber").innerHTML = "";
        }   
    }  

    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(email==""){
      document.getElementById("erroremail").innerHTML = "Email Address is required!";
       return false;
    }else  if(!email.match(mailformat)){
        document.getElementById("erroremail").innerHTML = "valid email Address is required!";
        return false;       
    } else {
      document.getElementById("erroremail").innerHTML = "";
      // return false;       
  }  

 

    if(address==""){
      document.getElementById("erroraddress").innerHTML = "Address is required!";
       return false;
    }else {
        document.getElementById("erroraddress").innerHTML = "";
        // return false;       
    } 

    if(username==""){
      document.getElementById("errorusername").innerHTML = "Username is required!";
       return false;
    }else {
        document.getElementById("errorusername").innerHTML = "";
        // return false;       
    } 

    if(password==""){
      document.getElementById("errorpassword").innerHTML = "Password is required!";
       return false;
    }else {
        document.getElementById("errorpassword").innerHTML = "";
        // return false;       
    } 

    

  }

  
  function change() {
    if (document.getElementById('a').value == '1')
      document.getElementById("b").value = '1';
    else if (document.getElementById('a').value == '2')
      document.getElementById("b").value = '2';
    else if (document.getElementById('a').value == '3')
      document.getElementById("b").value = '3';
    else if (document.getElementById('a').value == '4')
      document.getElementById("b").value = '1';
    else if (document.getElementById('a').value == '5')
      document.getElementById("b").value = '2';
  };