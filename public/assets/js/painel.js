let list = document.querySelectorAll(".navigation li");

function activeLink() {
  list.forEach((item) => {
    item.classList.remove("hovered");
  });
  this.classList.add("hovered");
}

list.forEach((item) => item.addEventListener("mouseover", activeLink));

// Menu Toggle
let toggle = document.querySelector(".toggle");
let navigation = document.querySelector(".navigation");
let main = document.querySelector(".main");

// Adicione a classe "active" à classe ".navigation" e ".main" para deixar a sidebar fechada por padrão
navigation.classList.add("active");
main.classList.add("active");

toggle.onclick = function () {
  navigation.classList.toggle("active");
  main.classList.toggle("active");
};
