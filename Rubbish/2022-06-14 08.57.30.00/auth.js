$('#dt').DataTable();
let login = sessionStorage.getItem("userLoggedin");
if (!login) {
  window.location.href = "../index.html";
}
