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

images[0] = './asset/slides/poster-1.jpg';
images[1] = './asset/slides/poster-2.jpg';
images[2] = './asset/slides/poster-3.jpg';
images[3] = './asset/slides/poster-4.jpg';
images[4] = './asset/slides/poster-5.jpg';
images[5] = './asset/slides/poster-6.jpg';
images[6] = './asset/slides/poster-7.jpg';
images[7] = './asset/slides/poster-8.jpg';
images[8] = './asset/slides/poster-9.jpg';
images[9] = './asset/slides/poster-10.jpg';

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

const cardParagraphSurvey = document.getElementById('card-p-survey');
const cardParagraphPlots = document.getElementById('card-p-plots');
const cardParagraphCustomers = document.getElementById('card-p-customers');
const cardParagraphPartners = document.getElementById('card-p-partner');

//const cardItem = document.getElementsByClassName('card-item');


const landSurvey = document.getElementById('land-survey');
const sellingPlots = document.getElementById('selling-plots');
const customers = document.getElementById('customers');
const partners = document.getElementById('partners');

landSurvey.addEventListener('click', () => {
    cardParagraphSurvey.style.display = 'block';
    cardParagraphPlots.style.display = 'none';
    cardParagraphCustomers.style.display = 'none';
    cardParagraphPartners.style.display = 'none';
})

sellingPlots.addEventListener('click', () => {
    cardParagraphSurvey.style.display = 'none';
    cardParagraphPlots.style.display = 'block';
    cardParagraphCustomers.style.display = 'none';
    cardParagraphPartners.style.display = 'none';
});

customers.addEventListener('click', () => {
    cardParagraphSurvey.style.display = 'none';
    cardParagraphPlots.style.display = 'none';
    cardParagraphCustomers.style.display = 'block';
    cardParagraphPartners.style.display = 'none';
});

partners.addEventListener('click', () => {
    cardParagraphSurvey.style.display = 'none';
    cardParagraphPlots.style.display = 'none';
    cardParagraphCustomers.style.display = 'none';
    cardParagraphPartners.style.display = 'block';
});

