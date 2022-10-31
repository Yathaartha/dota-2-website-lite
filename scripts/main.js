const topBtn = document.getElementById("returnTop"); //scroll to top button

function scrollToTop() {
  if (
    //displays the scroll to top button
    document.body.scrollTop > 300 ||
    document.documentElement.scrollTop > 300
  ) {
    topBtn.style.display = "initial";
  } else {
    topBtn.style.display = "none";
  }
}

document.addEventListener("scroll", scrollToTop);

topBtn.addEventListener("click", () => {
  //behavior of the scroll to top button
  window.scrollTo(0, 0);
});
