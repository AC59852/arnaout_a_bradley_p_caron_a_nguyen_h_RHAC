
let nav = document.querySelector(".toggle-menu"),
navLines = document.querySelector(".navLines")
navBtns = document.querySelectorAll(".navBtn"),
navLines = document.querySelector(".navLines"),
helpButton = document.querySelectorAll(".helpBtn"),
main = document.querySelector("body");


helpButton.forEach(button => button.addEventListener("click", function() {
console.log("this worked");
this.classList.toggle("reveal");
}));

nav.addEventListener("click", function() {
this.classList.toggle("active");
document.querySelector("#menu").classList.toggle("open");
main.classList.toggle("noscroll");
});

navBtns.forEach(btn => btn.addEventListener("click", function() {
nav.classList.toggle("active");
document.querySelector("#menu").classList.toggle("open");
}));


// waypoint

    var waypoint = new Waypoint({
        element: document.querySelector('#hero'),
        handler: function(direction) {
            nav.classList.remove("navFill");
            console.log("hit the first waypoint");
        },
        offset: -120
    });

    var waypoint2 = new Waypoint({
        element: document.querySelector('#help'),
        handler: function(direction) {
            console.log("hit the second waypoint");
            nav.classList.add("navFill");
        },
        offset: 105
    });

