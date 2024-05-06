function validateForm() {
  let email = document.querySelectorAll("input")[0].value;
  console.log(email);
  let password = document.querySelectorAll("input")[1].value;
  console.log(password);
  let RE1 = /\w+@(gmail|mail).(com|sy)/gi;
  console.log(email.match(RE1));
  let RE2 = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/gi;
  console.log(password.match(RE2));
  if (email == null || email == "" || password == null || password == "") {
    alert("Each field can't be blank");
    return false;
  }
  if (!RE1.test(email)) {
    alert("Enter a valid email EX:example@gmail.com");
    return false;
  }
  if (!RE2.test(password)) {
    alert(
      "password should contain at least one number and one special character "
    );
    return false;
  }
}
// let button = document.querySelector("button");
// console.log(button)
// button.onclick = validateForm();
