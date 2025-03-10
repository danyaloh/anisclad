let quest1 = document.querySelector('.quest1');
let quest11 = document.querySelector('.quest1-1');
let quest2 = document.querySelector('.quest2');
let quest21 = document.querySelector('.quest2-1');
let quest3 = document.querySelector('.quest3');
let quest31 = document.querySelector('.quest3-1');
let quest4 = document.querySelector('.quest4');
let quest41 = document.querySelector('.quest4-1');
let quest5 = document.querySelector('.quest5');
let quest51 = document.querySelector('.quest5-1');
let i = document.querySelector('.message__close');
let q = document.querySelector('.message ');
if (i == undefined) {

}else {
  i.addEventListener('click', () => {
    q.style.display = 'none';
  
  });
}
quest1.addEventListener('click', () => { 
    let contains = quest11.classList.contains('inactive');
    if (contains) {
      quest11.classList.remove('inactive');
      quest11.classList.add('border');
    }
    else {
      quest11.classList.add('inactive');
      quest11.classList.remove('border');
    };
});
quest2.addEventListener('click', () => { 
  let contains = quest21.classList.contains('inactive');
  if (contains) {
    quest21.classList.remove('inactive');
    quest21.classList.add('border');
  }
  else {
    quest21.classList.add('inactive');
    quest31.classList.remove('border');
  };
});
quest3.addEventListener('click', () => { 
  let contains = quest31.classList.contains('inactive');
  if (contains) {
    quest31.classList.remove('inactive');
    quest31.classList.add('border');
  }
  else {
    quest31.classList.add('inactive');
    quest31.classList.remove('border');
  };
});
quest4.addEventListener('click', () => { 
  let contains = quest41.classList.contains('inactive');
  if (contains) {
    quest41.classList.remove('inactive');
    quest41.classList.add('border');
  }
  else {
    quest41.classList.add('inactive');
    quest41.classList.remove('border');
  };
});
quest5.addEventListener('click', () => { 
  let contains = quest51.classList.contains('inactive');
  if (contains) {
    quest51.classList.remove('inactive');
    quest51.classList.add('border');
  }
  else {
    quest51.classList.add('inactive');
    quest51.classList.remove('border');
  };
});