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
    localStorage.setItem('color', theme)
    document.getElementById("palette").style = "background-color: rgba(255,255,255,0);color: black; border-right: 1px solid black; border-top: 1px solid black; border-bottom: 1px solid black;"
    if (document.getElementById("meditating")) {
        document.getElementById("meditating").src = assets + "/images/home/Open Doodles - Meditating.svg"
        document.getElementById("levitate").src = assets + "/images/home/Open Doodles - Levitate.svg"
        document.getElementById("chilling").src = assets + "/images/home/Open Doodles - Chilling.svg"
        document.getElementById("pricebox2").style = "box-shadow: rgba(0, 0, 0, 0.4) 0px 8px 24px; background-color: #FFF;"
        document.getElementById("pricebox3").style = "box-shadow: rgba(0, 0, 0, 0.4) 0px 8px 24px; background-color: #FFF;"
        document.getElementById("pricebox").style = "box-shadow: rgba(0, 0, 0, 0.4) 0px 8px 24px; background-color: #FFF;";
    } else {
        document.getElementById("Messy").src = assets + "/images/home/Open Doodles - Messy.svg"
    }

}

function setDark(theme = "dark") {
    document.getElementById("color-opt").href = assets + "/css/colors/" + theme + ".css";
    localStorage.setItem('color', 'dark');
    document.getElementById("palette").style = "background-color: rgba(242, 56, 73,1);color: white; border-right: 1px solid white; border-top: 1px solid white; border-bottom: 1px solid white;"
    document.getElementById("style-switcher").style = "color: black;"
    if (document.getElementById("meditating")) {
        document.getElementById("meditating").src = assets + "/images/home/Open Doodles - Meditating Light.svg"
        document.getElementById("levitate").src = assets + "/images/home/Open Doodles - Levitate Light.svg"
        document.getElementById("chilling").src = assets + "/images/home/Open Doodles - Chilling Light.svg"
        document.getElementById("pricebox2").style = "box-shadow: rgba(242, 56, 73, 0.4) 0px 8px 24px; background-color: #202124;"
        document.getElementById("pricebox3").style = "box-shadow: rgba(244, 185, 66, 0.4) 0px 8px 24px; background-color: #202124;"
        document.getElementById("pricebox").style = "box-shadow: rgba(73, 198, 229, 0.4) 0px 8px 24px; background-color: #202124;";
    } else {
        document.getElementById("Messy").src = assets + "/images/home/Open Doodles - Messy Light.svg"
    }
}

if (localStorage.getItem('color') == 'default') {
    document.getElementById("color-opt").href = assets + "/css/colors/default.css";
} else {
    if (localStorage.getItem('color') == 'green') {
        document.getElementById("color-opt").href = assets + "/css/colors/green.css";
    }else {
        if (localStorage.getItem('color') == 'warning') {
            document.getElementById("color-opt").href = assets + "/css/colors/warning.css";
        } else {
            if (localStorage.getItem('color') == 'blue') {
                document.getElementById("color-opt").href = assets + "/css/colors/blue.css";
            } else {
                if (localStorage.getItem('color') == 'info') {
                    document.getElementById("color-opt").href = assets + "/css/colors/info.css";
                } else {
                    if (localStorage.getItem('color') == 'purple') {
                        document.getElementById("color-opt").href = assets + "/css/colors/purple.css";
                    } else {
                        if (localStorage.getItem('color') == 'light') {
                            document.getElementById("color-opt").href = assets + "/css/colors/light.css";
                        } else {
                            if (localStorage.getItem('color') == 'dark') {
                                document.getElementById("color-opt").href = assets + "/css/colors/dark.css";
                                setDark();
                            }
                        }
                    }
                }
            }
        }
    }
}
