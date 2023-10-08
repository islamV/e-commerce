let add_adress = document.getElementById("add_adress"),
  add_payment = document.getElementById("add_payment"),
  add_detials_address = document.getElementById("add_detials_address"),
  add_detials_payment = document.getElementById("add_detials_payment"),
  exit = document.getElementById("exit"),
  exit_2 = document.getElementById("exit_2"),
  box_1 = document.getElementById("box_1"),
  box_2 = document.getElementById("box_2"),
  box_address = document.getElementById("box_address"),
  box_payment = document.getElementById("box_payment");

add_adress.onclick = function () {
  add_detials_address.style.display = "flex";
};

add_payment.onclick = function () {
  add_detials_payment.style.display = "flex";
};

exit.onclick = function () {
  add_detials_address.style.display = "none";
};

exit_2.onclick = function () {
  add_detials_payment.style.display = "none";
};

box_1.onclick = function () {
  box_address.style.display = "block";
  box_payment.style.display = "none";
};

box_2.onclick = function () {
  box_payment.style.display = "block";
  box_address.style.display = "none";
};
