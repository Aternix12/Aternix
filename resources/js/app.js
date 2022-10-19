require('./bootstrap');

import 'overlayscrollbars/overlayscrollbars.css';
import { OverlayScrollbars } from 'overlayscrollbars';

const osInstance = OverlayScrollbars(document.querySelector('body'), {});

//Preloader
document.addEventListener("DOMContentLoaded", function(event){
    $(window).on("load", async function () {
            const delay = ms => new Promise(res => setTimeout(res, ms));
            await delay(200);
            $(".container").fadeOut("slow");
    });
  });

//ScrollAnimation
const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if(entry.isIntersecting){
            entry.target.classList.add('show');
        } else {
            entry.target.classList.remove('show');
        }
    });
});

const hiddenElements = document.querySelectorAll('.hidden');
hiddenElements.forEach((el) => observer.observe(el));

