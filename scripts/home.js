
let curh = window.innerHeight * 0.01;
let nvh = curh/5.7;
console.log(`curh : \n` + curh);  
console.log(`nvh : \n` + nvh);
if(nvh > 1) nvh -= 1;
nvh = (nvh > 1) ? nvh : 1;
document.documentElement.style.setProperty('--vh', `${curh/(nvh)}px`);



window.addEventListener('resize', () => {
    let curh = window.innerHeight * 0.01;
    let nvh = curh/5.7;
    console.log(`curh : \n` + curh);  
    console.log(`nvh : \n` + nvh);
    document.documentElement.style.setProperty('--vh', `${curh/nvh}px`);
});


/* Mouse Effect on Features */
let mouseEffect = document.querySelector('.mouseEffect');
if(mouseEffect){
    mouseEffect.addEventListener("mousemove", e => {
        let rect = e.target.getBoundingClientRect();
        let x = e.clientX - rect.left;
        let y = e.clientY - rect.top;
        console.log(`X : `+ x);
        console.log(`Y : `+ y);
        mouseEffect.style.setProperty('--x', x + 'px');
        mouseEffect.style.setProperty('--y', y + 'px');
      });
}

let mouseEffect2 = document.querySelector('.mouseEffect2');
if(mouseEffect2){
    mouseEffect2.addEventListener("mousemove", e => {
        let rect = e.target.getBoundingClientRect();
        let x = e.clientX - rect.left;
        let y = e.clientY - rect.top;
        console.log(`X : `+ x);
        console.log(`Y : `+ y);
        mouseEffect2.style.setProperty('--x', x + 'px');
        mouseEffect2.style.setProperty('--y', y + 'px');
      });
}

let mouseEffect3 = document.querySelector('.mouseEffect3');
if(mouseEffect3){
    mouseEffect3.addEventListener("mousemove", e => {
        let rect = e.target.getBoundingClientRect();
        let x = e.clientX - rect.left;
        let y = e.clientY - rect.top;
        console.log(`X : `+ x);
        console.log(`Y : `+ y);
        mouseEffect3.style.setProperty('--x', x + 'px');
        mouseEffect3.style.setProperty('--y', y + 'px');
      });
}

let mouseEffect4 = document.querySelector('.mouseEffect4');
if(mouseEffect4){
    mouseEffect4.addEventListener("mousemove", e => {
        let rect = e.target.getBoundingClientRect();
        let x = e.clientX - rect.left;
        let y = e.clientY - rect.top;
        console.log(`X : `+ x);
        console.log(`Y : `+ y);
        mouseEffect4.style.setProperty('--x', x + 'px');
        mouseEffect4.style.setProperty('--y', y + 'px');
      });
}

