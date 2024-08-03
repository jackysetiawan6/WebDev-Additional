let original = [
  "Adan",
  "Agnes",
  "Alvin",
  "Anet",
  "Angel",
  "Billy",
  "Bintang",
  "Bryan",
  "Caca",
  "Carol",
  "Desy",
  "Diana",
  "Dyta",
  "Eci",
  "El",
  "Erlin",
  "Evelyn",
  "Febe",
  "Flo",
  "Gading",
  "Grace",
  "Howard",
  "Ican",
  "Itin",
  "Ivi",
  "Jaxine",
  "Jeni",
  "Joana",
  "Jov",
  "Kay",
  "Kirana",
  "Lisa",
  "Nanda",
  "Nicho",
  "Paula",
  "Rei",
  "Sansan",
  "Shania",
  "Syeba",
  "Tesa",
  "Theo",
  "Vina",
  "Vini",
  "Yogi",
  "Yola",
];

let students = [];

let curriculum = ["Itin", "Ican"];
const button = document.getElementById("start-button");
const desks = Array.from(document.querySelectorAll(".desk"));

function randomize() {
  for (let i = students.length - 1; i > 0; i--) {
    let j = Math.floor(Math.random() * (i + 1));
    let temp = students[i];
    students[i] = students[j];
    students[j] = temp;
  }
}

function setPosition() {
  let number = 1;
  desks.forEach((desk) => {
    if (desk.classList.contains("hide") | desk.classList.contains("skip"))
      return;
    desk.textContent = students[number - 1];
    number++;
  });
}

button.addEventListener("click", () => {
  students = [...original];
  let starter = desks.findIndex((desk) => desk.id === "starter");
  curriculum.forEach((name) => {
    let index = students.findIndex((student) => student === name);
    console.log(index, name);
    if (index > -1) students.splice(index, 1);
    desks[starter].classList.add("skip");
    desks[starter].textContent = name;
    starter++;
  });
  if (button.classList.contains("active")) return;
  button.style.backgroundColor = "darkred";
  button.textContent = "Wait";
  button.classList.add("active");
  const afterLoop = () => {
    button.style.backgroundColor = "green";
    button.textContent = "Random";
    button.classList.remove("active");
  };
  for (let i = 0; i < 50; i++) {
    setTimeout(() => {
      randomize();
      setPosition();
      if (i === 49) {
        afterLoop();
      }
    }, i * 50);
  }
});
