
let nav = document.querySelector(".toggle-menu"),
navLines = document.querySelector(".navLines")
navBtns = document.querySelectorAll(".navBtn"),
navLines = document.querySelector(".navLines"),
helpButton = document.querySelectorAll(".helpBtn"),
main = document.querySelector("body"),
helpIcon = document.querySelectorAll(".helpImg"),
navWrapper = document.querySelector(".navWrapper");


helpButton.forEach(button => button.addEventListener("click", function(e) {
console.log("this worked");
this.classList.toggle("reveal");
helpIcon.classList.toggle("transform");
}));


nav.addEventListener("click", function() {
this.classList.toggle("active");
document.querySelector("#menu").classList.toggle("open");
main.classList.toggle("noscroll");
if (this.classList.contains("noBck")) {
    navLines.classList.toggle("navBck");
}
});

navBtns.forEach(btn => btn.addEventListener("click", function() {
nav.classList.toggle("active");
document.querySelector("#menu").classList.toggle("open");
main.classList.toggle("noscroll");
}));


// waypoint

    var waypoint = new Waypoint({
        element: document.querySelector('#hero'),
        handler: function(direction) {
            navWrapper.classList.remove("navFill");
            navLines.classList.remove("navBck");
            console.log("hit the first waypoint");
            nav.classList.remove("noBck");
        },
        offset: -120
    });

    var waypoint2 = new Waypoint({
        element: document.querySelector('#help'),
        handler: function(direction) {
            console.log("hit the second waypoint");
            navLines.classList.add("navBck");
            navWrapper.classList.add("navFill");
            nav.classList.add("noBck");
        },
        offset: 105
    });

    var waypoint3 = new Waypoint({
        element: document.querySelector('#aboutSection'),
        handler: function(direction) {
            console.log("hit the third waypoint");
            navLines.classList.add("navBck");
            navWrapper.classList.add("navFill");
            nav.classList.add("noBck");
        },
        offset: 100
    });

    var waypoint4 = new Waypoint({
        element: document.querySelector('#actionSection'),
        handler: function(direction) {
            console.log("hit the fourth waypoint");
            navLines.classList.add("navBck");
            navWrapper.classList.add("navFill");
            nav.classList.add("noBck");
        },
        offset: -125
    });
    

    var waypoint5 = new Waypoint({
        element: document.querySelector('#partners'),
        handler: function(direction) {
            console.log("hit fifth waypoint");
            navLines.classList.add("navBck");
            navWrapper.classList.add("navFill");
            nav.classList.add("noBck");
        },
        offset: -255
    });

