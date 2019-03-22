function validateEmail(email) {
  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
}

function validate() {
  var $result = $("#result");
  var email = $("#email").val();
  $result.text("");

  if (validateEmail(email)) {
    $result.text("gerai");
    $result.css("color", "green");
  } else {
    $result.text("neteisingai įvestas elektroninis paštas");
    $result.css("color", "red");
  }
  return false;
}

function validatePhone(phone) {
  var check =  /(86|\+3706)\d{3}\d{4}/;
  return check.test(phone);
}

function validatep() {
  var $resulttwo = $("#resulttwo");
  var phone = $("#phone").val();
  $resulttwo.text("");

  if (validatePhone(phone)) {
    $resulttwo.text("gerai");
    $resulttwo.css("color", "green");
  } else {
    $resulttwo.text("neteisingai įvestas telefono numeris");
    $resulttwo.css("color", "red");
  }
  return false;
}

function validateDate(date) {
  var check = /.{2,}/;
  return check.test(date);
}

function validatedate() {
  var $resultthree = $("#resultthree");
  var date = $("#date").val();
  $resultthree.text("");

  if (validateDate(date)) {
    $resultthree.text("gerai");
    $resultthree.css("color", "green");
  } else {
    $resultthree.text("Įveskite jums tinkamą laiką");
    $resultthree.css("color", "red");
  }
  return false;
}

$("#validate").bind("click", validate);
$("#validate").bind("click", validatep);
$("#validate").bind("click", validatedate);
