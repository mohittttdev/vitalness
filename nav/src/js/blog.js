

/*====================================================
            DARK MODE
====================================================*/

const themeBtn = document.getElementById("themeToggle");

const body = document.body;

if(localStorage.getItem("theme") === "dark"){

    body.classList.add("dark");

    themeBtn.innerHTML =
    '<i class="fa-solid fa-sun"></i>';

}

themeBtn.addEventListener("click",()=>{

    body.classList.toggle("dark");

    if(body.classList.contains("dark")){

        localStorage.setItem("theme","dark");

        themeBtn.innerHTML =
        '<i class="fa-solid fa-sun"></i>';

    }

    else{

        localStorage.setItem("theme","light");

        themeBtn.innerHTML =
        '<i class="fa-solid fa-moon"></i>';

    }

});


/*====================================================
            NAVBAR SCROLL
====================================================*/

const navbar = document.querySelector(".navbar");

window.addEventListener("scroll",()=>{

    if(window.scrollY > 60){

        navbar.style.background =
        "rgba(8,20,15,.88)";

        navbar.style.backdropFilter =
        "blur(25px)";

    }

    else{

        navbar.style.background =
        "rgba(255,255,255,.12)";

    }

});


/*====================================================
            MOBILE MENU
====================================================*/

const menuBtn =
document.querySelector(".menu-btn");

const navLinks =
document.querySelector(".nav-links");

menuBtn.addEventListener("click",()=>{

    navLinks.classList.toggle("active");

    menuBtn.classList.toggle("active");

    if(menuBtn.classList.contains("active")){

        menuBtn.innerHTML =
        '<i class="fa-solid fa-xmark"></i>';

    }

    else{

        menuBtn.innerHTML =
        '<i class="fa-solid fa-bars"></i>';

    }

});


/*====================================================
            SEARCH
====================================================*/

const searchInput =
document.querySelector(".search-box input");

const cards =
document.querySelectorAll(".blog-card");

searchInput.addEventListener("keyup",()=>{

    let value =
    searchInput.value.toLowerCase();

    cards.forEach(card=>{

        let text =
        card.innerText.toLowerCase();

        if(text.includes(value)){

            card.style.display="block";

        }

        else{

            card.style.display="none";

        }

    });

});


/*====================================================
            SCROLL REVEAL
====================================================*/

const revealElements =
document.querySelectorAll(

".hero,.featured,.blog-card,.category-card,.video-card,.expert-card,.gallery img,.newsletter,.footer"

);

const observer =
new IntersectionObserver(entries=>{

entries.forEach(entry=>{

if(entry.isIntersecting){

entry.target.classList.add("show");

}

});

},{threshold:.2});

revealElements.forEach(el=>{

el.classList.add("hidden");

observer.observe(el);

});


/*====================================================
            COUNTER
====================================================*/

const counters =
document.querySelectorAll(".stat-card h2");

const speed = 80;

counters.forEach(counter=>{

const update=()=>{

const target =
parseInt(counter.innerText);

const count =
+counter.getAttribute("data-count") || 0;

const inc =
target/speed;

if(count<target){

counter.setAttribute(
"data-count",
Math.ceil(count+inc)
);

counter.innerText =
Math.ceil(count+inc);

setTimeout(update,25);

}

else{

counter.innerText=target+"+";

}

}

update();

});


/*====================================================
            BACK TO TOP
====================================================*/

const topBtn =
document.getElementById("backToTop");

window.addEventListener("scroll",()=>{

if(window.scrollY>500){

topBtn.classList.add("active");

}

else{

topBtn.classList.remove("active");

}

});

topBtn.addEventListener("click",()=>{

window.scrollTo({

top:0,

behavior:"smooth"

});

});


/*====================================================
            NEWSLETTER
====================================================*/

const newsletter =
document.querySelector(".newsletter-form");

newsletter.addEventListener("submit",(e)=>{

e.preventDefault();

const email =
newsletter.querySelector("input").value;

const pattern =
/^[^\s@]+@[^\s@]+\.[^\s@]+$/;

if(pattern.test(email)){

alert("🎉 Thank you for subscribing!");

newsletter.reset();

}

else{

alert("Please enter a valid email.");

}

});


/*====================================================
            SMOOTH SCROLL
====================================================*/

document.querySelectorAll('a[href^="#"]')
.forEach(anchor=>{

anchor.addEventListener("click",function(e){

e.preventDefault();

const target =
document.querySelector(
this.getAttribute("href")
);

if(target){

target.scrollIntoView({

behavior:"smooth"

});

}

});

});


/*====================================================
            IMAGE HOVER EFFECT
====================================================*/

document.querySelectorAll(".gallery img")
.forEach(img=>{

img.addEventListener("mouseenter",()=>{

img.style.transform="scale(1.08) rotate(1deg)";

});

img.addEventListener("mouseleave",()=>{

img.style.transform="scale(1)";

});

});


/*====================================================
            FLOATING CARDS
====================================================*/

window.addEventListener("mousemove",(e)=>{

const cards =
document.querySelectorAll(".floating-card");

cards.forEach((card,index)=>{

let speed=(index+1)*0.02;

let x=
(window.innerWidth/2-e.pageX)*speed;

let y=
(window.innerHeight/2-e.pageY)*speed;

card.style.transform=
`translate(${x}px,${y}px)`;

});

});


/*====================================================
            ACTIVE NAV LINK
====================================================*/

const sections =
document.querySelectorAll("section");

const navItems =
document.querySelectorAll(".nav-links a");

window.addEventListener("scroll",()=>{

let current="";

sections.forEach(section=>{

const top=section.offsetTop-120;

const height=section.clientHeight;

if(scrollY>=top){

current=section.getAttribute("id");

}

});

navItems.forEach(link=>{

link.classList.remove("active");

if(link.getAttribute("href")==="#"+current){

link.classList.add("active");

}

});

});