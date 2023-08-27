let login = sessionStorage.getItem("AdminLoggedin");
console.log(login);
if (login == "true") {
  console.log("Admin Login Successfull");
}
else{
  window.location.href = "../index.html";
}
