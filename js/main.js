// var icon = document.getElementById('menu-btn');
// var show = document.getElementById('Toggle');

// icon.onclick = () => {
//     show.classList.add('active');
// }
// let menu = document.querySelector('#menu-btn');
// let navbar = document.querySelector('.header .bar');

// menu.onclick = () =>{
//    menu.classList.toggle('fa-times');
//    navbar.classList.toggle('active');
// };

window.onscroll = () =>{

    if(window.scrollY > 60){
      document.querySelector('#scroll-top').classList.add('show');
    }else{
      document.querySelector('#scroll-top').classList.remove('show');
    }
  
  }