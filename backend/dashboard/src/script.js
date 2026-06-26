const params = new URLSearchParams(window.location.search);

/* LOGIN POPUP */

if(params.get('login') === 'success'){

    const popup = document.getElementById('loginPopup');

    popup.style.display = 'flex';

    setTimeout(() => {

        popup.style.display = 'none';

        window.history.replaceState(
            {},
            document.title,
            window.location.pathname
        );

    }, 2500);
}


/* SIGNUP POPUP */

if(params.get('signup') === 'success'){

    const popup = document.getElementById('signupPopup');

    popup.style.display = 'flex';

    setTimeout(() => {

        popup.style.display = 'none';

        window.history.replaceState(
            {},
            document.title,
            window.location.pathname
        );

    }, 2500);
}


/* SIDEBAR OPEN */

function openSidebar(){

    document
    .getElementById("profileSidebar")
    .classList.add("active");

    document
    .getElementById("overlay")
    .classList.add("active");
}


/* SIDEBAR CLOSE */

function closeSidebar(){

    document
    .getElementById("profileSidebar")
    .classList.remove("active");

    document
    .getElementById("overlay")
    .classList.remove("active");
}