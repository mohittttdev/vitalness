/* FAQ TOGGLE */

// const faqItems = document.querySelectorAll(".faq-item");

// faqItems.forEach(item => {
//     const question = item.querySelector(".faq-question");

//     question.addEventListener("click", () => {

//         item.classList.toggle("active");

//         const icon = question.querySelector("span");

//         if(item.classList.contains("active")){
//             icon.innerHTML = "+";
//         } else {
//             icon.innerHTML = "+";
//         }

//     });
// });

//  FAQ Toggle
const faqItems = document.querySelectorAll(".faq-item");

faqItems.forEach(item => {
    const question = item.querySelector(".faq-question");

    question.addEventListener("click", () => {
        item.classList.toggle("active");
    });
});

// for experts 
const expertBtn = document.querySelector(".expert-btn");
const expertMenu = document.getElementById("expertMenu");

expertBtn.addEventListener("click", () => {
    expertMenu.classList.toggle("show");
});

/* outside click close */
document.addEventListener("click", (e) => {

    if (
        !expertBtn.contains(e.target) &&
        !expertMenu.contains(e.target)
    ) {
        expertMenu.classList.remove("show");
    }

});
//  program 
const programBtn = document.querySelector(".program-btn");
const programMenu = document.getElementById("programMenu");

programBtn.addEventListener("click", () => {
    programMenu.classList.toggle("show");
});

/* outside click close */
document.addEventListener("click", (e) => {

    if (
        !programBtn.contains(e.target) &&
        !programMenu.contains(e.target)
    ) {
        programMenu.classList.remove("show");
    }

});
// //  mindfulness
// const mindBtn = document.querySelector(".mind-btn");
// const mindMenu = document.getElementById("mindMenu");

// mindBtn.addEventListener("click", () => {
//     mindMenu.classList.toggle("show");
// });

// /* outside click close */
// document.addEventListener("click", (e) => {

//     if (
//         !mindBtn.contains(e.target) &&
//         !mindMenu.contains(e.target)
//     ) {
//         mindMenu.classList.remove("show");
//     }

// });
// // recipes
// const recipeBtn = document.querySelector(".recipe-btn");
// const recipeMenu = document.getElementById("recipeMenu");

// recipeBtn.addEventListener("click", () => {
//     recipeMenu.classList.toggle("show");
// });

// /* outside click close */
// document.addEventListener("click", (e) => {

//     if (
//         !recipeBtn.contains(e.target) &&
//         !recipeMenu.contains(e.target)
//     ) {
//         recipeMenu.classList.remove("show");
//     }

// });
// language
const languageSelect = document.getElementById("languageSelect");

languageSelect.addEventListener("change", () => {

    const lang = languageSelect.value;

    const elements = document.querySelectorAll("[data-en]");

    elements.forEach((element) => {

        element.innerText =
        element.getAttribute(`data-${lang}`);

    });

});

// login/sign Form
const authModal = document.getElementById("authModal");

const signupForm = document.querySelector(".signup-form");

const loginForm = document.querySelector(".login-form");


function openLogin(){

    authModal.classList.add("active");

    loginForm.classList.add("active");

    signupForm.classList.remove("active");
}

function openSignup(){

    authModal.classList.add("active");

    signupForm.classList.add("active");

    loginForm.classList.remove("active");
}

function closeAuth(){

    authModal.classList.remove("active");
}


// SHOW LOGIN INSIDE MODAL
function showLogin(event) {

    event.preventDefault();

    loginForm.classList.add("active");

    signupForm.classList.remove("active");
}


// SHOW SIGNUP INSIDE MODAL
function showSignup(event) {

    event.preventDefault();

    signupForm.classList.add("active");

    loginForm.classList.remove("active");
}

// OUTSIDE CLICK CLOSE
window.onclick = function(e){

    const modal = document.getElementById("authModal");

    if(e.target === modal){
        modal.classList.remove("active");
    }
};


const searchInput = document.getElementById("searchInput");

searchInput.addEventListener("keydown", function(e) {

    if (e.key !== "Enter") return;

    const keyword = this.value.toLowerCase().trim();

    if (!keyword) return;

    const allElements = document.querySelectorAll(
        "section, .section, div, h1, h2, h3, p, li"
    );

    let found = false;

    allElements.forEach(element => {

        element.style.backgroundColor = "";
        element.style.boxShadow = "";

        if (
            !found &&
            element.innerText &&
            element.innerText.toLowerCase().includes(keyword)
        ) {

            found = true;

            element.scrollIntoView({
                behavior: "smooth",
                block: "center"
            });

            element.style.backgroundColor =
            "rgba(0,229,255,0.2)";

            element.style.boxShadow =
            "0 0 20px #00e5ff";

            setTimeout(() => {

                element.style.backgroundColor = "";
                element.style.boxShadow = "";

            }, 4000);
        }
    });

    if (!found) {
        alert("No Result Found");
    }

});

document.getElementById("languageSelect")
.addEventListener("change", function () {

    let lang = this.value;

    let check = setInterval(() => {

        let combo =
        document.querySelector(".goog-te-combo");

        if(combo){

            combo.value = lang;
            combo.dispatchEvent(
                new Event("change")
            );

            clearInterval(check);
        }

    }, 500);

});
// function openLogin() {
//     authModal.style.display = "flex";
//     loginForm.classList.add("active");
//     signupForm.classList.remove("active");
// }

// function openSignup() {
//     authModal.style.display = "flex";
//     signupForm.classList.add("active");
//     loginForm.classList.remove("active");
// }

// function closeAuth() {
//     authModal.style.display = "none";
// }

// function showLogin(e) {
//     e.preventDefault();
//     loginForm.classList.add("active");
//     signupForm.classList.remove("active");
// }

// function showSignup(e) {
//     e.preventDefault();
//     signupForm.classList.add("active");
//     loginForm.classList.remove("active");
// }