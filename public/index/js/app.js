/* Theme Name: Landsay - Responsive Landing page template
  File Description: Main JS file of the template
*/

//
/********************* Menu sticky js ************************/
//

function windowScroll() {
  const navbar = document.getElementById("navbar");
  if (
    document.body.scrollTop >= 50 ||
    document.documentElement.scrollTop >= 50
  ) {
    navbar.classList.add("nav-sticky");
  } else {
    navbar.classList.remove("nav-sticky");
  }
}
window.addEventListener("scroll", (ev) => {
  ev.preventDefault();
  windowScroll();
});

//
/********************* scroll top js ************************/
//

var mybutton = document.getElementById("back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 100 ||
    document.documentElement.scrollTop > 100
  ) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

//
/********************* Swicher js ************************/
//

function toggleSwitcher() {
  var i = document.getElementById("style-switcher");
  if (i.style.left === "-189px") {
    i.style.left = "-0px";
  } else {
    i.style.left = "-189px";
  }
}

function setColor(theme) {
  document.getElementById("color-opt").href = assets + "/css/colors/" + theme + ".css";
  document.getElementById("meditating").src = assets + "/images/home/Open Doodles - Meditating.svg"
  document.getElementById("levitate").src = assets + "/images/home/Open Doodles - Levitate.svg"
  document.getElementById("chilling").src = assets + "/images/home/Open Doodles - Chilling.svg"
  document.getElementById("palette").style = "background-color: rgba(255,255,255,0);color: black; border-right: 1px solid black; border-top: 1px solid black; border-bottom: 1px solid black;"
  document.getElementById("pricebox2").style = "box-shadow: rgba(0, 0, 0, 0.4) 0px 8px 24px; background-color: #FFF;"
  document.getElementById("pricebox3").style = "box-shadow: rgba(0, 0, 0, 0.4) 0px 8px 24px; background-color: #FFF;"
  document.getElementById("pricebox").style = "box-shadow: rgba(0, 0, 0, 0.4) 0px 8px 24px; background-color: #FFF;";
}

function setDark(theme = "dark") {
  document.getElementById("color-opt").href = assets + "/css/colors/" + theme + ".css";
  document.getElementById("meditating").src = assets + "/images/home/Open Doodles - Meditating Light.svg"
  document.getElementById("levitate").src = assets + "/images/home/Open Doodles - Levitate Light.svg"
  document.getElementById("chilling").src = assets + "/images/home/Open Doodles - Chilling Light.svg"
  document.getElementById("palette").style = "background-color: rgba(242, 56, 73,1);color: white; border-right: 1px solid white; border-top: 1px solid white; border-bottom: 1px solid white;"
  document.getElementById("pricebox2").style = "box-shadow: rgba(242, 56, 73, 0.4) 0px 8px 24px; background-color: #202124;"
  document.getElementById("pricebox3").style = "box-shadow: rgba(244, 185, 66, 0.4) 0px 8px 24px; background-color: #202124;"
  document.getElementById("pricebox").style = "box-shadow: rgba(73, 198, 229, 0.4) 0px 8px 24px; background-color: #202124;";
  document.getElementById("style-switcher").style = "color: black;"
}

//
/********************* Page Load js ************************/
//

window.onload = function loader() {
  setTimeout(() => {
    document.getElementById("preloader").style.visibility = "hidden";
    document.getElementById("preloader").style.opacity = "0";
  }, 350);
};
