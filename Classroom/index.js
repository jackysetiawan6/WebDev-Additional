let students = [
  "Abdhy",
  "Aryo",
  "Athalia",
  "Bella",
  "Daniel",
  "Delvin",
  "Dustin",
  "Eva",
  "Ferren",
  "Ghoran",
  "Gladys",
  "Grace",
  "Hans",
  "Yoga",
  "Ichsan",
  "Jacky",
  "Jekis",
  "Jason",
  "Justin",
  "Jennifer",
  "Jesslyn",
  "Joel",
  "Karina",
  "Kezia",
  "Marlene",
  "Marvel",
  "Matthew",
  "Ruth",
  "Ryan",
  "Mika",
  "Shamgar",
  "Stefanie",
  "Stephen",
  "Tristan",
  "Ziven",
];

let couples = [
  ["Ghoran", "Athalia"],
  ["Hans", "Karina"],
  ["Ryan", "Grace"],
  ["Matthew", "Jesslyn"],
];

function setCouple() {
  for (let couple of couples) {
    let randomCouple = couple.slice().sort(() => Math.random() - 0.5);
    couple.splice(0, couple.length, ...randomCouple);
    let indices = [];
    for (let student of couple) {
      indices.push(students.indexOf(student));
      students.splice(students.indexOf(student), 1);
    }
    couple.indices = indices;
  }
}

function applyCouple() {
  for (let couple of couples) {
    if (Math.random() < 0.2) {
      let index = Math.floor(Math.random() * (students.length + 1));
      students.splice(index, 0, ...couple);
    } else {
      let index1 = Math.floor(Math.random() * (students.length + 1));
      let index2 = Math.floor(Math.random() * (students.length + 1));
      while (Math.abs(index1 - index2) < 2) {
        index2 = Math.floor(Math.random() * (students.length + 1));
      }
      students.splice(Math.min(index1, index2), 0, couple[0]);
      students.splice(Math.max(index1, index2), 0, couple[1]);
    }
  }
}

function randomize() {
  setCouple();
  for (let i = students.length - 1; i > 0; i--) {
    let j = Math.floor(Math.random() * (i + 1));
    let temp = students[i];
    students[i] = students[j];
    students[j] = temp;
  }
  applyCouple();
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

console.log(students);

const button = document.getElementById("start-button");
const desks = document.querySelectorAll(".desk");

button.addEventListener("click", () => {
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
