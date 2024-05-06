function validateForm() {
  let email = document.querySelectorAll("input")[2].value;
  console.log(email);
  let password = document.querySelectorAll("input")[3].value;
  console.log(password);
  let fname = document.querySelectorAll("input")[0].value;
  console.log(fname);
  let phone = document.querySelectorAll("input")[1].value;
  console.log(phone);
  let RE1 = /\w+@(gmail|mail).(com|sy)/gi;
  console.log(email.match(RE1));
  let RE2 = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/gi;
  console.log(password.match(RE2));
  let RE3 = /(\(\+963\))[0-9]{9}/gi;
  console.log(phone.match(RE3));
  let RE4 = /^[a-z][a-zA-Z0-9!@#$%^&*]{2,}/gi;
  console.log(fname.match(RE4));
  if (
    fname == null ||
    fname == "" ||
    email == null ||
    email == "" ||
    phone == null ||
    phone == "" ||
    password == null ||
    password == ""
  ) {
    alert("Each field can't be blank");
    return false;
  }
  if (!RE4.test(fname)) {
    alert("name must start with an charater and be at least 3 charater");
    return false;
  }
  if (!RE3.test(phone)) {
    alert("phone must start with +963 and have 12 numbers");
    return false;
  }
  if (!RE1.test(email)) {
    alert("Enter a valid email EX:example@gmail.com");
    return false;
  }
  if (!RE2.test(password)) {
    alert(
      "password should contain at least one number and one special character"
    );
    return false;
  }
}

// let button = document.querySelector("button");
// console.log(button)
// button.onclick = validateForm();
