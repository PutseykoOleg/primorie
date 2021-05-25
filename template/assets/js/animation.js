function setVisibility(elem){
    let windowTop = $(window).scrollTop()
    let windowHeight = $(window).height()
    let elemTop = $(elem).offset().top
    let elemHeight = $(elem).outerHeight()

    if(windowTop + windowHeight >= elemTop && windowTop + windowHeight - elemHeight * 2 <= elemTop + windowHeight - elemHeight){
        elem.classList.remove('hidden')
        elem.classList.add('visible')
    } else {
        elem.classList.remove('visible')
        elem.classList.add('hidden')
    }
};

$(window).scroll(function(){
    let birds = document.getElementsByClassName('bird')
    for(let i = 0; i < birds.length; i++){
        setVisibility(birds[i])
    }
});

$(document).ready(function(){
    let birds = document.getElementsByClassName('bird')
    for(let i = 0; i < birds.length; i++){
        setVisibility(birds[i])
    }
});