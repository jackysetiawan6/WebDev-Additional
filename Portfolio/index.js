function disableRightClick() {
  document.addEventListener("contextmenu", function (e) {
    e.preventDefault();
  });
}
function setActiveNavItem(navItem) {
  const navItems = document.querySelectorAll(".nav-item");
  navItems.forEach(function (item) {
    item.classList.remove("active");
  });
  navItem.classList.add("active");
}
function clickToScroll() {
  const navItems = document.querySelectorAll(".nav-item");
  navItems.forEach(function (item) {
    item.addEventListener("click", function () {
      const sectionId = this.getAttribute("id");
      const section = document.getElementById(sectionId + "-section");
      section.scrollIntoView({ behavior: "smooth" });
      setActiveNavItem(this);
    });
  });
}
disableRightClick();
clickToScroll();
