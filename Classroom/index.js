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

function randomize() {
  let currentIndex = students.length,
    randomIndex = 0;
  while (currentIndex != 0) {
    randomIndex = Math.floor(Math.random() * currentIndex);
    currentIndex--;
    [students[currentIndex], students[randomIndex]] = [
      students[randomIndex],
      students[currentIndex],
    ];
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
