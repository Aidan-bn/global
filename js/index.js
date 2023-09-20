//for hamburger menu
const menu = document.getElementById('menu');
const hamburger = document.getElementById('hamburger');
const closeButton = document.getElementById('close');
const menuList = document.querySelectorAll('.menu-item');

menu.addEventListener('click', () => {
    // alert('nimesahau vyote');
    hamburger.style.display = 'flex';
})

closeButton.addEventListener('click', () => {
    hamburger.style.display = 'none';
})

menuList.forEach((element) => {
    element.addEventListener('click', () => {
        hamburger.style.display = 'none';
    })
});

let i = 0;
let images = [];
let time = 2000;

images[0] = './asset/slides/1.png';
images[1] = './asset/slides/2.png';
images[2] = './asset/slides/1.png';
images[3] = './asset/slides/2.png';
images[4] = './asset/slides/1.png';

slider = () => {
    document.slides.src = images[i];
    if(i < images.length - 1){
        i++;
    } else {
        i = 0;
    }
    setTimeout("slider()", time);
}
window.onload = slider;

