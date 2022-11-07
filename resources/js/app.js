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

//Runechanger
const chars = Object.assign([], "ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890;][()!?&%$/<>+=ᚨᛒᚲᛞᛖᚠᚷᚺᛁᛃᚲᛚᛗᚾᛟᛈᚲᚱᛊᛏᚢᚢᚹᚲᛊᛁᛉ");

function getRandomInt(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min) + min); // The maximum is exclusive and the minimum is inclusive
}

String.prototype.replaceAt = function (index, replacement) {
    return this.substring(0, index) + replacement + this.substring(index + replacement.length);
}

function randChar(charIndex, element) {
    let runestext = element.textContent;
    let runchar = chars[getRandomInt(0, 74)];
    let replaced = runestext.replaceAt(charIndex, runchar);
    element.textContent = replaced;
}


$(document).ready(function () {
    function textMatrixTransform(fieldID, resultingText) {
        const runes = document.getElementById(fieldID);
        for (let i = 0; i < runes.textContent.length; i++) {
            let waitTime = getRandomInt(1500, 2000);
            let endTime = getRandomInt(0, 500);
            if (!(runes.textContent[i] == " ")) {
                setTimeout(
                    function (i) {
                        return function () {
                            var interval = setInterval(
                                function (i) {
                                    return function () {
                                        randChar(i, runes);
                                    };
                                }(i), 100)

                            setTimeout(
                                function () {
                                    return function () {
                                        clearInterval(interval);
                                        //Replace final character
                                        let runestext = runes.textContent;
                                        let replaced = runestext.replaceAt(i, resultingText[i]);
                                        runes.textContent = replaced;
                                    };
                                }(i), endTime + 1000);
                        };
                    }(i), waitTime);
            }
        }
    }
    textMatrixTransform("runes", "OUR PROJECTS");

});
