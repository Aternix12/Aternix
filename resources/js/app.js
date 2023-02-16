require('./bootstrap');

import 'overlayscrollbars/overlayscrollbars.css';
import { OverlayScrollbars } from 'overlayscrollbars';

const osInstance = OverlayScrollbars(document.querySelector('body'), {});

//Preloader
document.addEventListener("DOMContentLoaded", function (event) {
    $(window).on("load", async function () {
        const delay = ms => new Promise(res => setTimeout(res, ms));
        await delay(200);
        $(".container").fadeOut("slow");
    });
});

//ScrollAnimation
const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add('show');
        } else {
            entry.target.classList.remove('show');
        }
    });
});

const hiddenElements = document.querySelectorAll('.hidden');
hiddenElements.forEach((el) => observer.observe(el));

//Runechanger
var sPath = window.location.pathname;
var sPage = sPath.substring(sPath.lastIndexOf('/') + 1);
if(sPage == ""){
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
}


//Minecraft Live API
var obfuscators = [];
var styleMap = {
    '§4': 'font-weight:normal;text-decoration:none;color:#be0000',
    '§c': 'font-weight:normal;text-decoration:none;color:#fe3f3f',
    '§6': 'font-weight:normal;text-decoration:none;color:#d9a334',
    '§e': 'font-weight:normal;text-decoration:none;color:#fefe3f',
    '§2': 'font-weight:normal;text-decoration:none;color:#00be00',
    '§a': 'font-weight:normal;text-decoration:none;color:#3ffe3f',
    '§b': 'font-weight:normal;text-decoration:none;color:#3ffefe',
    '§3': 'font-weight:normal;text-decoration:none;color:#00bebe',
    '§1': 'font-weight:normal;text-decoration:none;color:#0000be',
    '§9': 'font-weight:normal;text-decoration:none;color:#3f3ffe',
    '§d': 'font-weight:normal;text-decoration:none;color:#fe3ffe',
    '§5': 'font-weight:normal;text-decoration:none;color:#be00be',
    '§f': 'font-weight:normal;text-decoration:none;color:#ffffff',
    '§7': 'font-weight:normal;text-decoration:none;color:#bebebe',
    '§8': 'font-weight:normal;text-decoration:none;color:#3f3f3f',
    '§0': 'font-weight:normal;text-decoration:none;color:#000000',
    '§l': 'font-weight:bold',
    '§n': 'text-decoration:underline;text-decoration-skip:spaces',
    '§o': 'font-style:italic',
    '§m': 'text-decoration:line-through;text-decoration-skip:spaces',
};
function obfuscate(string, elem) {
    var magicSpan,
        currNode,
        len = elem.childNodes.length;
    if (string.indexOf('<br>') > -1) {
        elem.innerHTML = string;
        for (var j = 0; j < len; j++) {
            currNode = elem.childNodes[j];
            if (currNode.nodeType === 3) {
                magicSpan = document.createElement('span');
                magicSpan.innerHTML = currNode.nodeValue;
                elem.replaceChild(magicSpan, currNode);
                init(magicSpan);
            }
        }
    } else {
        init(elem, string);
    }
    function init(el, str) {
        var i = 0,
            obsStr = str || el.innerHTML,
            len = obsStr.length;
        obfuscators.push(window.setInterval(function () {
            if (i >= len) i = 0;
            obsStr = replaceRand(obsStr, i);
            el.innerHTML = obsStr;
            i++;
        }, 0));
    }
    function randInt(min, max) {
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }
    function replaceRand(string, i) {
        var randChar = String.fromCharCode(randInt(64, 90)); /*Numbers: 48-57 Al:64-90*/
        return string.substr(0, i) + randChar + string.substr(i + 1, string.length);
    }
}
function applyCode(string, codes) {
    var len = codes.length;
    var elem = document.createElement('span'),
        obfuscated = false;
    for (var i = 0; i < len; i++) {
        elem.style.cssText += styleMap[codes[i]] + ';';
        if (codes[i] === '§k') {
            obfuscate(string, elem);
            obfuscated = true;
        }
    }
    if (!obfuscated) elem.innerHTML = string;
    return elem;
}
function parseStyle(string) {
    var codes = string.match(/§.{1}/g) || [],
        indexes = [],
        apply = [],
        tmpStr,
        indexDelta,
        noCode,
        final = document.createDocumentFragment(),
        len = codes.length,
        string = string.replace(/\n|\\n/g, '<br>');

    for (var i = 0; i < len; i++) {
        indexes.push(string.indexOf(codes[i]));
        string = string.replace(codes[i], '\x00\x00');
    }
    if (indexes[0] !== 0) {
        final.appendChild(applyCode(string.substring(0, indexes[0]), []));
    }
    for (var i = 0; i < len; i++) {
        indexDelta = indexes[i + 1] - indexes[i];
        if (indexDelta === 2) {
            while (indexDelta === 2) {
                apply.push(codes[i]);
                i++;
                indexDelta = indexes[i + 1] - indexes[i];
            }
            apply.push(codes[i]);
        } else {
            apply.push(codes[i]);
        }
        if (apply.lastIndexOf('§r') > -1) {
            apply = apply.slice(apply.lastIndexOf('§r') + 1);
        }
        tmpStr = string.substring(indexes[i], indexes[i + 1]);
        final.appendChild(applyCode(tmpStr, apply));
    }
    return final;
}
function clearObfuscators() {
    var i = obfuscators.length;
    for (; i--;) {
        clearInterval(obfuscators[i]);
    }
    obfuscators = [];
}
String.prototype.replaceColorCodes = function () {
    clearObfuscators();
    var outputString = parseStyle(String(this));
    return outputString;
};

/////////////////////////////////////////////////
function cutString(str, cutStart, cutEnd) {
    return str.substr(0, cutStart) + str.substr(cutEnd + 1);
}


function initServerData(serverIp, serverPort) {
    fetch('https://mcapi.us/server/status?ip=' + serverIp + '&port=' + serverPort)
        .then(response => response.json())
        .then(data => handleServerStatus(data));
}

initServerData("123.3.84.55", "26284");

function handleServerStatus(data) {
    const status = document.getElementById("server-status");
    if(status){
        if (data.status == 'error') {
            console.log(data.error);
            status.style = "color: red !important";
            status.innerHTML = "¤ Offline";
            return false;
        } else {
            status.style = "color: green !important";
            status.innerHTML = "¤ Online";
        }

        const motd = document.getElementById("motd");
        motd.append(data.motd.replaceColorCodes());


        const playerCounter = document.getElementById("player-count");
        playerCounter.innerHTML = data.players.now + "/" + data.players.max;

        const logo = document.getElementById("server-icon");
        logo.src = data.favicon;

        const name = document.getElementById("server-version");
        name.innerHTML = data.server.name;
    }
}

//For Cards
if (document.getElementById("cards")) {
    document.getElementById("cards").onmousemove = e => {
        for (const card of document.getElementsByClassName("card")) {
            const rect = card.getBoundingClientRect(),
                x = e.clientX - rect.left,
                y = e.clientY - rect.top;

            card.style.setProperty("--mouse-x", `${x}px`);
            card.style.setProperty("--mouse-y", `${y}px`);
        };
    }
}

