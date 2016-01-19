var menuOpen = false;

function toggleMenu(divName) {
    if (menuOpen == false) {
        slideMenuIn(divName);
    } else {
        slideMenuOut(divName);
    }
}

function slideMenuIn(divName) {
    var div = document.getElementById(divName);
    var currentPos = parseInt(div.style.top);
    var finalPos = 0;
    var distance = Math.abs(finalPos - currentPos);
    var ratio = 5;
    var speed = 50;
    var move = distance / ratio;

    if (distance >= ratio) {
        div.style.top = (currentPos + move) + 'px';
        setTimeout(function() {
            slideMenuIn(divName);
        }, speed);
    } else {
        div.style.top = finalPos + 'px';
        menuOpen = true;
    }
}

function slideMenuOut(divName) {
    var div = document.getElementById(divName);
    var currentPos = parseInt(div.style.top);
    var finalPos = -310;
    var distance = Math.abs(finalPos - currentPos);
    var ratio = 5;
    var speed = 50;
    var move = distance / ratio;

    if (distance >= ratio) {
        div.style.top = (currentPos - move) + 'px';
        setTimeout(function() {
            slideMenuOut(divName);
        }, speed);
    } else {
        div.style.top = finalPos + 'px';
        menuOpen = false;
    }
}
