const selector = document.querySelector("select");
const patchA = document.querySelector(".a");
const patchB = document.querySelector(".b");
const patchC = document.querySelector(".c");
const patchD = document.querySelector(".d");

selector.addEventListener("change", () => {
  switch (selector.value) {
    case "7.29d":
      resetActiveClass();
      patchD.classList.add("active");
      break;
    case "7.29c":
      resetActiveClass();
      patchC.classList.add("active");
      break;
    case "7.29b":
      resetActiveClass();
      patchB.classList.add("active");
      break;
    case "7.29a":
      resetActiveClass();
      patchA.classList.add("active");
      break;
    default:
      break;
  }
});

const resetActiveClass = () => {
  activeClass = document.querySelector(".active");
  activeClass.classList.remove("active");
};
