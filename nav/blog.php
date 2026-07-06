<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>VitalNess Blog</title>
<style> 
    /*=========================================
        GOOGLE FONT
=========================================*/

@import url('https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap');


/*=========================================
        ROOT VARIABLES
=========================================*/

:root{

    --primary:#22c55e;
    --primary-dark:#16a34a;

    --bg:#f7fff9;
    --bg2:#ecfdf3;

    --text:#0f172a;
    --muted:#64748b;

    --card:rgba(255,255,255,.75);
    --border:rgba(34,197,94,.15);

    --shadow:0 20px 60px rgba(0,0,0,.08);

    --radius:22px;

}


/*=========================================
        DARK MODE
=========================================*/

body.dark{

    --bg:#06140d;
    --bg2:#0b1f14;

    --text:#ffffff;
    --muted:#cbd5e1;

    --card:rgba(255,255,255,.06);

    --border:rgba(255,255,255,.08);

}


/*=========================================
        GLOBAL RESET
=========================================*/

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Outfit',sans-serif;
}

body{
    background:var(--bg);
    color:var(--text);
    overflow-x:hidden;
    transition:.4s;
}

a{
    text-decoration:none;
    color:inherit;
}


/*=========================================
        NAVBAR
=========================================*/

.navbar{

    position:fixed;
    top:0;
    left:0;
    width:100%;
    padding:18px 7%;

    display:flex;
    justify-content:space-between;
    align-items:center;

    background:rgba(255,255,255,.08);
    backdrop-filter:blur(15px);

    border-bottom:1px solid var(--border);

    z-index:999;

}

.logo{

    font-size:24px;
    font-weight:800;
}

.logo span{
    color:var(--primary);
}

.nav-links{
    display:flex;
    gap:25px;
    list-style:none;
}

.nav-links a{
    font-weight:500;
    color:var(--muted);
    transition:.3s;
}

.nav-links a:hover{
    color:var(--primary);
}

.nav-btn{

    padding:10px 22px;
    border-radius:50px;
    border:none;

    background:linear-gradient(135deg,var(--primary),var(--primary-dark));
    color:white;
    cursor:pointer;

    transition:.3s;
}

.nav-btn:hover{
    transform:translateY(-3px);
}


/*=========================================
        HERO SECTION
=========================================*/

.hero{

    min-height:100vh;
    display:grid;
    grid-template-columns:1fr 1fr;
    align-items:center;
    padding:120px 7% 80px;

    position:relative;
    gap:50px;

}

.hero h1{

    font-size:64px;
    line-height:1.1;
}

.hero h1 span{
    color:var(--primary);
}

.hero p{

    margin:20px 0;
    color:var(--muted);
    max-width:500px;
    line-height:1.8;
}

.btn{

    padding:14px 28px;
    border-radius:50px;
    border:none;

    background:linear-gradient(135deg,var(--primary),var(--primary-dark));
    color:white;
    cursor:pointer;

    transition:.3s;
}

.btn:hover{
    transform:translateY(-5px);
}


/*=========================================
        HERO VIDEO
=========================================*/

.hero-video{

    width:100%;
    height:500px;
    object-fit:cover;

    border-radius:30px;
    box-shadow:var(--shadow);
}


/*=========================================
        BLOG SECTION
=========================================*/

.blog-section{

    padding:100px 7%;
    background:var(--bg2);
}

.section-title{

    text-align:center;
    font-size:42px;
    margin-bottom:60px;
}

.blog-grid{

    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(280px,1fr));
    gap:30px;
}


/*=========================================
        BLOG CARD
=========================================*/

.blog-card{

    background:var(--card);
    border:1px solid var(--border);
    border-radius:var(--radius);
    overflow:hidden;

    transition:.4s;
    backdrop-filter:blur(15px);

    box-shadow:var(--shadow);
}

.blog-card:hover{
    transform:translateY(-10px);
}

.blog-card img{

    width:100%;
    height:200px;
    object-fit:cover;
}

.blog-content{
    padding:20px;
}

.blog-category{

    display:inline-block;
    padding:5px 12px;
    background:rgba(34,197,94,.15);
    color:var(--primary);
    border-radius:50px;
    font-size:12px;
    margin-bottom:10px;
}

.blog-title{
    font-size:20px;
    margin-bottom:10px;
}

.blog-text{
    color:var(--muted);
    font-size:14px;
    line-height:1.7;
}


/*=========================================
        NEWSLETTER
=========================================*/

.newsletter{

    padding:100px 7%;
    text-align:center;
}

.newsletter input{

    padding:14px 20px;
    width:300px;
    border-radius:50px;
    border:1px solid var(--border);
    outline:none;

    margin-top:20px;
}

.newsletter button{

    padding:14px 24px;
    border:none;

    background:linear-gradient(135deg,var(--primary),var(--primary-dark));
    color:white;

    border-radius:50px;
    margin-left:10px;

    cursor:pointer;
}


/*=========================================
        FOOTER
=========================================*/

footer{

    background:#0b1f14;
    color:white;

    padding:80px 7% 30px;
}

.footer-content{

    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(200px,1fr));
    gap:40px;
    margin-bottom:40px;
}

.footer-section h3,
.footer-section h4{
    margin-bottom:15px;
}

.footer-section ul{
    list-style:none;
}

.footer-section ul li{
    margin-bottom:10px;
}

.footer-section ul li a{
    color:#cbd5e1;
    transition:.3s;
}

.footer-section ul li a:hover{
    color:var(--primary);
}

.footer-bottom{

    display:flex;
    justify-content:space-between;
    align-items:center;

    border-top:1px solid rgba(255,255,255,.1);
    padding-top:20px;
}

.social-links a{
    margin-left:15px;
    color:#cbd5e1;
}

.social-links a:hover{
    color:var(--primary);
}


/*=========================================
        RESPONSIVE
=========================================*/

@media(max-width:992px){

.hero{
    grid-template-columns:1fr;
    text-align:center;
}

.hero h1{
    font-size:42px;
}

.hero p{
    margin:auto;
}

.hero-video{
    height:350px;
}

.nav-links{
    display:none;
}

}

@media(max-width:600px){

.hero h1{
    font-size:34px;
}

.newsletter input{
    width:100%;
    margin-bottom:10px;
}

.newsletter button{
    width:100%;
    margin-left:0;
}

.footer-bottom{
    flex-direction:column;
    gap:15px;
}
}
</style>

</head>

<body>

<!-- ================= NAVBAR ================= -->

<nav class="navbar">

    <div class="logo">
        <span>Vital</span>Ness
    </div>

    <ul class="nav-links">
        <li><a href="#">Home</a></li>
        <li><a href="#">Blogs</a></li>
        <li><a href="#">Workouts</a></li>
        <li><a href="#">Nutrition</a></li>
        <li><a href="#">Contact</a></li>
    </ul>

    <button class="nav-btn">Join Now</button>

</nav>


<!-- ================= HERO ================= -->

<section class="hero">

    <div class="hero-content">

        <span class="badge">🔥 Health • Fitness • Wellness</span>

        <h1>
            Build A <span>Healthy</span><br>
            Lifestyle
        </h1>

        <p>
            Discover fitness routines, nutrition guides,
            and wellness tips that help you stay stronger,
            healthier, and more energetic every day.
        </p>

        <div class="hero-actions">
            <button class="btn primary">Explore Blogs</button>
            <button class="btn secondary">Watch Demo</button>
        </div>

    </div>

    <div class="hero-media">

        <div class="video-wrapper">

            <video autoplay muted loop playsinline>
                <source src="istockphoto-538828082-640_adpp_is.mp4">
            </video>

        </div>

    </div>

</section>


<!-- ================= BLOGS ================= -->

<section class="blog-section">

    <div class="section-header">

        <h2>Latest Articles</h2>
        <p>Fresh health & fitness insights to upgrade your lifestyle</p>

    </div>

    <div class="blog-grid">

        <!-- CARD 1 -->
        <div class="blog-card">

            <div class="img-box">
                <img src="https://images.unsplash.com/photo-1490645935967-10de6ba17061?q=80&w=1200&auto=format&fit=crop">
                <span class="tag">Nutrition</span>
            </div>

            <div class="blog-content">

                <h3>Best Foods For Muscle Recovery</h3>

                <p>
                    Learn how protein, hydration, and balanced meals
                    improve recovery and boost muscle growth.
                </p>

                <a href="#">Read More →</a>

            </div>

        </div>


        <!-- CARD 2 -->
        <div class="blog-card">

            <div class="img-box">
                <img src="https://images.unsplash.com/photo-1518611012118-696072aa579a?q=80&w=1200&auto=format&fit=crop">
                <span class="tag">Fitness</span>
            </div>

            <div class="blog-content">

                <h3>Morning Workout Benefits</h3>

                <p>
                    Starting your day with exercise improves energy,
                    focus, metabolism, and overall health.
                </p>

                <a href="#">Read More →</a>

            </div>

        </div>


        <!-- CARD 3 -->
        <div class="blog-card">

            <div class="img-box">
                <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?q=80&w=1200&auto=format&fit=crop">
                <span class="tag">Wellness</span>
            </div>

            <div class="blog-content">

                <h3>Healthy Eating Made Simple</h3>

                <p>
                    Simple habits and meal planning strategies
                    for maintaining a healthy lifestyle.
                </p>

                <a href="#">Read More →</a>

            </div>

        </div>

    </div>

</section>


<!-- ================= NEWSLETTER ================= -->

<section class="newsletter">

    <div class="newsletter-box">

        <h2>Stay Updated</h2>

        <p>Get weekly fitness & nutrition tips directly in your inbox</p>

        <div class="input-box">

            <input type="email" placeholder="Enter your email">

            <button>Subscribe</button>

        </div>

    </div>

</section>


<!-- ================= FOOTER ================= -->

<footer class="footer">

    <div class="footer-grid">

        <div class="footer-col">

            <h3>VitalNess</h3>

            <p>
                Empowering healthier lives with smart fitness tracking,
                workouts, and wellness solutions.
            </p>

        </div>

        <div class="footer-col">
            <h4>Company</h4>
            <a href="#">About Us</a>
            <a href="#">Team</a>
            <a href="#">Contact</a>
        </div>

        <div class="footer-col">
            <h4>Features</h4>
            <a href="#">BMI Calculator</a>
            <a href="#">Workout Plans</a>
            <a href="#">Diet Tracking</a>
        </div>

        <div class="footer-col">
            <h4>Legal</h4>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms</a>
            <a href="#">Cookies</a>
        </div>

    </div>

    <div class="footer-bottom">

        <p>© 2026 VitalNess. All rights reserved.</p>

        <div class="socials">
            <a href="#">Twitter</a>
            <a href="#">YouTube</a>
            <a href="#">LinkedIn</a>
        </div>

    </div>

</footer>
<script>


    /*=========================================
        VITALNESS BLOG JS
=========================================*/


/*=========================================
        DARK MODE TOGGLE (AUTO BUTTON)
=========================================*/

const themeBtn = document.createElement("button");

themeBtn.innerText = "🌙";

themeBtn.style.position = "fixed";
themeBtn.style.bottom = "20px";
themeBtn.style.right = "20px";
themeBtn.style.zIndex = "9999";
themeBtn.style.padding = "12px 16px";
themeBtn.style.borderRadius = "50px";
themeBtn.style.border = "none";
themeBtn.style.cursor = "pointer";
themeBtn.style.background = "#22c55e";
themeBtn.style.color = "#fff";

document.body.appendChild(themeBtn);

themeBtn.addEventListener("click", () => {

    document.body.classList.toggle("dark");

    themeBtn.innerText = document.body.classList.contains("dark") ? "☀️" : "🌙";

});


/*=========================================
        SMOOTH SCROLL
=========================================*/

document.querySelectorAll('a[href^="#"]').forEach(anchor => {

    anchor.addEventListener("click", function(e){

        e.preventDefault();

        const target = document.querySelector(this.getAttribute("href"));

        if(target){

            target.scrollIntoView({
                behavior:"smooth"
            });

        }

    });

});


/*=========================================
        NAVBAR SCROLL EFFECT
=========================================*/

const navbar = document.querySelector(".navbar");

window.addEventListener("scroll", () => {

    if(window.scrollY > 50){

        navbar.style.background = "rgba(0,0,0,.4)";
        navbar.style.backdropFilter = "blur(20px)";

    } else {

        navbar.style.background = "rgba(255,255,255,.08)";
    }

});


/*=========================================
        BLOG CARD ANIMATION (SCROLL REVEAL)
=========================================*/

const cards = document.querySelectorAll(".blog-card");

const observer = new IntersectionObserver((entries) => {

    entries.forEach(entry => {

        if(entry.isIntersecting){

            entry.target.style.opacity = 1;
            entry.target.style.transform = "translateY(0)";

        }

    });

}, { threshold: 0.2 });


cards.forEach(card => {

    card.style.opacity = 0;
    card.style.transform = "translateY(50px)";
    card.style.transition = "0.6s ease";

    observer.observe(card);

});


/*=========================================
        NEWSLETTER VALIDATION
=========================================*/

const input = document.querySelector(".newsletter input");
const btn = document.querySelector(".newsletter button");

btn.addEventListener("click", () => {

    const email = input.value;

    if(!email.includes("@") || email.length < 5){

        alert("Please enter a valid email!");

        return;

    }

    btn.innerText = "Subscribed ✔";

    btn.style.background = "#16a34a";

    input.value = "";

});


/*=========================================
        HERO BUTTON EFFECT
=========================================*/

const heroBtn = document.querySelector(".btn");

heroBtn.addEventListener("click", () => {

    alert("Redirecting to blog section 🚀");

    document.querySelector(".blog-section")
    .scrollIntoView({ behavior: "smooth" });

});


/*=========================================
        PARALLAX HERO (OPTIONAL FEEL)
=========================================*/

window.addEventListener("scroll", () => {

    const heroVideo = document.querySelector(".hero-video");

    if(heroVideo){

        heroVideo.style.transform = `translateY(${window.scrollY * 0.2}px)`;

    }

});


/*=========================================
        AUTO ACTIVE ANIMATIONS
=========================================*/

window.addEventListener("load", () => {

    document.body.style.opacity = "0";

    setTimeout(() => {

        document.body.style.transition = "1s";
        document.body.style.opacity = "1";

    }, 100);

});
</script>
</body>
</html>