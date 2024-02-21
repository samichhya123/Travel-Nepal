function validateForm() {
  var x = document.forms["myForm"]["name"].value;
  if (x == " ") {
    alert("Name must be filled out");
    return false;
  }
  var x = document.forms["myForm"]["email"].value;
  if ((x = " ")) {
    var patt = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
    var v = document.getElementById("email").value;
    if (v.match(patt)) {
      alert("valid Email");
    } else {
      alert("Invalid Email");
      document.getElementById("email").value = "";
      document.getElementById("email").focus();
    }
  }
  var x = document.forms["myForm"]["phone"].value;
  if (x == " ") {
    alert("Contact must be filled");
    let y = document.getElementById("phone");
    y.innerHTML = "No contact entered";
  } else if (x.length < 10 || x.length != 10) {
    let y = document.getElementById("phone");
    y.innerHTML = "Contact is too short";
  }
  var x = document.forms["myForm"]["password"].value;
  if (x == " ") {
    var patt = /[a-z]+[A-Z]+[0-9]$/;
    var v = document.getElementById("password").value;
    if (v.match(patt)) {
      alert("Password Valid");
    } else if (x.length < 8 || x.length != 8) {
      let y = document.getElementById("password");
      y.innerHTML = "Password is too short";
    } else {
      alert("Invalid password");
      document.getElementById("password").value = "";
      document.getElementById("password").focus();
    }
  }
  var s = document.getElementById("rbtn1");
  var n = document.getElementById("rbtn2");
  var v = documnet.getElementById("rbtn3");
  if (!s.checked && !n.checked && !v.checked) {
    alert("Please select your gender");
  } else {
    alert("Valid Input");
  }
  var ob = " ";
  var travelling = document.getElementById("hb1").checked;
  var cooking = document.getElementById("hb2").checked;
  var reading = document.getElementById("hb3").checked;
  if (travelling == true) {
    ob += "hobbies1:travelling selected!\n";
  }
  if (cooking == true) {
    ob += "hobbies2:cooking selected!\n";
  }
  if (reading == true) {
    ob += "hobbies3:reading selected!\n";
  }
  if (ob == " ") {
    alert("No hobbies selected");
  } else {
    alert(ob);
  }
  return false;
}
