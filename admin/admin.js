let cards = document.querySelectorAll('.catalogcard');
for(i = 0; cards.length > i; i++){
    let card = cards[i];
    let button = card.querySelector('.button');
    button.addEventListener('click', () => {
        let hcontent = card.querySelector('.hiddencontent');
        hcontent.classList.add('show');
        card.style.borderColor = ('#d83541');
        let no = hcontent.querySelector('.no');
        no.addEventListener('click', () => {
            hcontent.classList.remove('show');   
            card.style.borderColor = ('black');
        });
});
}