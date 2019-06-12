$('.scroll').on('click', function (e) {
    e.preventDefault();
    var offset = 60;        //60 represents the height of the navbar
    var target = this.hash;

    var x = document.getElementById("myTopnav");
    x.className = "topnav";
    document.getElementById("nav-container").style.height = "60px"; //close nav bar after chosing tab

    if ($(this).data('offset') != undefined) offset = $(this).data('offset');
    $('html, body').stop().animate({
        'scrollTop': $(target).offset().top - offset
    }, 500, 'swing', function () {
        //window.location.hash = target;    //prevents hash from showing on the url
    });
});

$('.scroll-people').on('click', function (e) {
    e.preventDefault();
    var offset = 60;        //60 represents the height of the navbar
    var target = this.hash;
    var x = document.getElementById("myTopnav");
    x.className = "topnav";
    document.getElementById("nav-container").style.height = "60px";
    
    $('html, body').stop().animate({
        'scrollTop': $(target).offset() - offset
    }, 500, 'swing', function () {
        //window.location.hash = target;    //prevents hash from showing on the url
    });
});

var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function () {
        this.classList.toggle("active");
        var collapsible_content = this.nextElementSibling;
        if (collapsible_content.style.maxHeight) {
            collapsible_content.style.maxHeight = null;
        } else {
            collapsible_content.style.maxHeight = collapsible_content.scrollHeight + "px";
        }
    });
}

function open_nav() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
        document.getElementById("nav-container").style.height = "484px";
        var no_show = document.getElementsByClassName("no-scroll");
        for (var i = 0; i < no_show.length; i++) {
            no_show[i].style.height = "60px";
        }
    } else {
        x.className = "topnav";
        document.getElementById("nav-container").style.height = "60px";
    }
}

function close_nav(){
    var x = document.getElementById("myTopnav");
    x.className = "topnav";
    document.getElementById("nav-container").style.height = "60px";
}