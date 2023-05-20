// la section de traif 
let tarifEle = document.querySelector('.tarif');
// console.log(tarifEle)
let tarifSisterEle = document.querySelector('.tarifSister');
// console.log(tarifSisterEle)
tarifEle.onmousemove=function(){
    tarifSisterEle.style.display = 'block';
}

tarifEle.onmouseout=function(){
    tarifSisterEle.style.display = 'none';
}


// La sectionde quelques mots
let moreEle = document.getElementById('more');
// console.log(moreEle)
let dotsEle = document.getElementById('dots');
// console.log(dotsEle)
let readEle = document.getElementById('read');

var i = 0;
function read(){
    if(!i){
        moreEle.style.display = 'inline';
        dotsEle.style.display = 'none';
        readEle.innerHTML = 'Lire mois';
        i = 1;
    } else{
        moreEle.style.display = 'none';
        dotsEle.style.display = 'inline';
        readEle.innerHTML = 'Lire plus';
        i = 0;
    }
}
// La section de voir Coordonnées

let detailEle = document.getElementById('detail');
let buttonEle = document.getElementById('button');
let retournerEle = document.getElementById('retourner');


buttonEle.addEventListener('click', (eo) =>{
    detailEle.style.display = 'block';
})

retournerEle.addEventListener('click', (eo) =>{
    detailEle.style.display = 'none';
})



