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
