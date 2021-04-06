var change_info = document.getElementById("change_info");
var change_password = document.getElementById("change_password");
var list_developer = document.getElementById("list_developer");
// var list_techno = document.getElementById("list_techno");
var list_html = document.getElementById("list_html");
var list_dev_0 = document.getElementById("list_dev_0");
var list_dev_1 = document.getElementById("list_dev_1");
var list_thechnolo = document.getElementById("list_thechnolo");

// button
var dashboard = document.getElementById("dashboard");
var change_in = document.getElementById("change_in");
var change_pss = document.getElementById("change_pss");
var list_dev = document.getElementById("list_dev");
var list_html_but = document.getElementById("list_html_but");
var list_1 = document.getElementById("list_1");
var list_0 = document.getElementById("list_0");
var list_thech = document.getElementById("list_thech");

// styles
list_html.style.display = "none";
change_info.style.display = "none";
change_password.style.display = "none";
list_developer.style.display = "none";
// list_techno.style.display = "none";
list_dev_0.style.display = "none";
list_dev_1.style.display = "none";
list_thechnolo.style.display = "none";
// event
change_in.addEventListener("click", function () {
  list_thechnolo.style.display = "none";

  list_html.style.display = "none";
  change_info.style.display = "block";
  change_password.style.display = "none";
  list_developer.style.display = "none";
  // list_techno.style.display = "none";
  list_dev_0.style.display = "none";
  list_dev_1.style.display = "none";
});
change_pss.addEventListener("click", function () {
  list_thechnolo.style.display = "none";

  list_html.style.display = "none";
  change_info.style.display = "none";
  change_password.style.display = "block";
  list_developer.style.display = "none";
  // list_techno.style.display = "none";
  list_dev_0.style.display = "none";
  list_dev_1.style.display = "none";
});
list_dev.addEventListener("click", function () {
  list_thechnolo.style.display = "none";

  list_html.style.display = "none";
  change_info.style.display = "none";
  change_password.style.display = "none";
  list_developer.style.display = "block";
  // list_techno.style.display = "none";
  list_dev_0.style.display = "none";
  list_dev_1.style.display = "none";
});
list_html_but.addEventListener("click", function () {
  list_thechnolo.style.display = "none";

  list_html.style.display = "block";
  change_info.style.display = "none";
  change_password.style.display = "none";
  list_developer.style.display = "none";
  // list_techno.style.display = "none";
  list_dev_0.style.display = "none";
  list_dev_1.style.display = "none";
});
list_1.addEventListener("click", function () {
  list_thechnolo.style.display = "none";

  list_html.style.display = "none";
  change_info.style.display = "none";
  change_password.style.display = "none";
  list_developer.style.display = "none";
  // list_techno.style.display = "none";
  list_dev_0.style.display = "none";
  list_dev_1.style.display = "block";
});
list_0.addEventListener("click", function () {
  list_thechnolo.style.display = "none";

  list_html.style.display = "none";
  change_info.style.display = "none";
  change_password.style.display = "none";
  list_developer.style.display = "none";
  // list_techno.style.display = "none";
  list_dev_0.style.display = "block";
  list_dev_1.style.display = "none";
});
list_thech.addEventListener("click", function () {
  list_thechnolo.style.display = "block";

  list_html.style.display = "none";
  change_info.style.display = "none";
  change_password.style.display = "none";
  list_developer.style.display = "none";
  // list_techno.style.display = "none";
  list_dev_0.style.display = "none";
  list_dev_1.style.display = "none";
});