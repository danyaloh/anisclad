let sideMenuElement = document.querySelector('.menu');

let hamgerElement = document.querySelector('.hamburger');

hamgerElement.addEventListener('click', () => {
    let i = sideMenuElement.classList.contains('hidden')
    if(i) {
        sideMenuElement.classList.remove('hidden');  
    }else {
    sideMenuElement.classList.add('hidden');
    }
});