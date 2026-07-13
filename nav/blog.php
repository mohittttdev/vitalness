<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>VitalNess | Premium Blog</title>

<!-- Google Font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<!-- Font Awesome -->
<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">

<link rel="stylesheet" href="blog.css">
<style>
/*=========================================
        GOOGLE FONT
=========================================*/

@import url('https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&display=swap');

/*=========================================
        ROOT VARIABLES
=========================================*/

:root{

    --primary:#22c55e;
    --primary-dark:#16a34a;
    --secondary:#06b6d4;

    --bg:#f8fffb;
    --bg2:#eefcf4;

    --white:#ffffff;
    --text:#111827;
    --text-light:#64748b;

    --card:rgba(255,255,255,.72);

    --border:rgba(34,197,94,.15);

    --shadow:0 15px 50px rgba(0,0,0,.08);
    --shadow-hover:0 25px 70px rgba(0,0,0,.15);

    --radius:22px;

    --transition:.4s ease;

}

/*=========================================
        DARK MODE
=========================================*/

body.dark{

    --bg:#08140f;

    --bg2:#102018;

    --card:rgba(255,255,255,.05);

    --text:#ffffff;

    --text-light:#cbd5e1;

    --border:rgba(255,255,255,.08);

    --shadow:0 20px 60px rgba(0,0,0,.45);

}

/*=========================================
        RESET
=========================================*/

*{

    margin:0;
    padding:0;
    box-sizing:border-box;

}

html{

    scroll-behavior:smooth;

}

body{

    font-family:'Outfit',sans-serif;

    background:var(--bg);

    color:var(--text);

    overflow-x:hidden;

    transition:.4s;

}

img{

    max-width:100%;

    display:block;

}

a{

    text-decoration:none;

    color:inherit;

}

button{

    font-family:inherit;

    cursor:pointer;

    border:none;

}

input{

    font-family:inherit;

    outline:none;

}

/*=========================================
        CUSTOM SCROLLBAR
=========================================*/

::-webkit-scrollbar{

    width:10px;

}

::-webkit-scrollbar-track{

    background:var(--bg2);

}

::-webkit-scrollbar-thumb{

    background:linear-gradient(var(--primary),var(--secondary));

    border-radius:20px;

}

::-webkit-scrollbar-thumb:hover{

    background:var(--primary-dark);

}

/*=========================================
        SELECTION
=========================================*/

::selection{

    background:var(--primary);

    color:#fff;

}

/*=========================================
        LOADER
=========================================*/

.loader{

    position:fixed;

    inset:0;

    background:var(--bg);

    display:flex;

    flex-direction:column;

    justify-content:center;

    align-items:center;

    gap:25px;

    z-index:99999;

}

.loader-circle{

    width:80px;

    height:80px;

    border-radius:50%;

    border:8px solid rgba(34,197,94,.15);

    border-top:8px solid var(--primary);

    animation:spin 1s linear infinite;

}

.loader h2{

    font-size:40px;

    font-weight:800;

}

.loader span{

    color:var(--primary);

}

@keyframes spin{

    from{

        transform:rotate(0deg);

    }

    to{

        transform:rotate(360deg);

    }

}

/*=========================================
        ANIMATED BACKGROUND
=========================================*/

.bg-gradient{

    position:fixed;

    border-radius:50%;

    filter:blur(120px);

    opacity:.25;

    z-index:-1;

}

.bg1{

    width:420px;

    height:420px;

    background:#22c55e;

    top:-120px;

    left:-120px;

    animation:float1 12s linear infinite alternate;

}

.bg2{

    width:350px;

    height:350px;

    background:#06b6d4;

    right:-80px;

    top:25%;

    animation:float2 15s linear infinite alternate;

}

.bg3{

    width:380px;

    height:380px;

    background:#4ade80;

    bottom:-100px;

    left:45%;

    animation:float3 18s linear infinite alternate;

}

@keyframes float1{

    from{

        transform:translateY(0);

    }

    to{

        transform:translateY(120px);

    }

}

@keyframes float2{

    from{

        transform:translateX(0);

    }

    to{

        transform:translateX(-140px);

    }

}

@keyframes float3{

    from{

        transform:translate(0);

    }

    to{

        transform:translate(80px,-100px);

    }

}

/*=========================================
        NAVBAR
=========================================*/

.navbar{

    position:fixed;

    top:0;

    left:0;

    width:100%;

    height:82px;

    padding:0 7%;

    display:flex;

    justify-content:space-between;

    align-items:center;

    background:rgba(255,255,255,.12);

    backdrop-filter:blur(18px);

    border-bottom:1px solid var(--border);

    z-index:999;

    transition:var(--transition);

}

.logo{

    display:flex;

    align-items:center;

    gap:10px;

    font-size:30px;

    font-weight:800;

}

.logo i{

    color:var(--primary);

}

.logo span{

    color:var(--primary);

}

.nav-links{

    display:flex;

    list-style:none;

    gap:34px;

}

.nav-links a{

    font-size:15px;

    font-weight:600;

    color:var(--text-light);

    position:relative;

    transition:.35s;

}

.nav-links a:hover,

.nav-links a.active{

    color:var(--primary);

}

.nav-links a::after{

    content:"";

    position:absolute;

    left:0;

    bottom:-8px;

    width:0;

    height:2px;

    background:var(--primary);

    transition:.35s;

}

.nav-links a:hover::after,

.nav-links a.active::after{

    width:100%;

}

.nav-right{

    display:flex;

    align-items:center;

    gap:14px;

}

.search-btn,

.theme-btn{

    width:48px;

    height:48px;

    border-radius:50%;

    background:var(--card);

    border:1px solid var(--border);

    color:var(--text);

    font-size:18px;

    transition:.35s;

}

.search-btn:hover,

.theme-btn:hover{

    background:var(--primary);

    color:#fff;

    transform:translateY(-3px);

}

.join-btn{

    padding:14px 28px;

    border-radius:50px;

    font-weight:600;

    color:#fff;

    background:linear-gradient(135deg,var(--primary),var(--primary-dark));

    box-shadow:var(--shadow);

    transition:.35s;

}

.join-btn:hover{

    transform:translateY(-4px);

    box-shadow:var(--shadow-hover);

}

.menu-btn{

    display:none;

    width:48px;

    height:48px;

    border-radius:50%;

    background:var(--card);

    border:1px solid var(--border);

    font-size:20px;

    color:var(--text);

}
/*=========================================
            HERO SECTION
=========================================*/

.hero{

    width:100%;
    min-height:100vh;

    padding:140px 7% 90px;

    display:grid;
    grid-template-columns:1fr 1fr;
    align-items:center;
    gap:70px;

    position:relative;

}

.hero-left{

    animation:fadeLeft 1s ease;

}

.hero-badge{

    display:inline-flex;
    align-items:center;
    gap:10px;

    padding:10px 20px;

    border-radius:50px;

    background:rgba(34,197,94,.12);

    color:var(--primary);

    font-weight:600;

    margin-bottom:25px;

    border:1px solid var(--border);

}

.hero h1{

    font-size:72px;
    line-height:1.08;
    font-weight:800;

    margin-bottom:25px;

}

.hero h1 span{

    color:var(--primary);

}

.hero p{

    font-size:18px;

    line-height:1.9;

    color:var(--text-light);

    max-width:600px;

    margin-bottom:40px;

}

/*=========================================
        HERO BUTTONS
=========================================*/

.hero-buttons{

    display:flex;
    gap:18px;
    flex-wrap:wrap;

}

.primary-btn{

    display:inline-flex;
    align-items:center;
    gap:10px;

    padding:16px 34px;

    border-radius:60px;

    background:linear-gradient(135deg,var(--primary),var(--primary-dark));

    color:#fff;

    font-weight:600;

    transition:.4s;

    box-shadow:var(--shadow);

}

.primary-btn:hover{

    transform:translateY(-6px);

    box-shadow:var(--shadow-hover);

}

.secondary-btn{

    display:inline-flex;
    align-items:center;
    justify-content:center;

    padding:16px 34px;

    border-radius:60px;

    border:2px solid var(--primary);

    color:var(--primary);

    font-weight:600;

    transition:.4s;

}

.secondary-btn:hover{

    background:var(--primary);

    color:#fff;

}

/*=========================================
            HERO STATS
=========================================*/

.hero-stats{

    display:flex;

    gap:20px;

    margin-top:60px;

    flex-wrap:wrap;

}

.stat-card{

    min-width:150px;

    padding:25px;

    background:var(--card);

    border-radius:20px;

    border:1px solid var(--border);

    backdrop-filter:blur(18px);

    box-shadow:var(--shadow);

    transition:.4s;

}

.stat-card:hover{

    transform:translateY(-8px);

}

.stat-card h2{

    font-size:34px;

    color:var(--primary);

}

.stat-card span{

    color:var(--text-light);

}

/*=========================================
        HERO IMAGE
=========================================*/

.hero-right{

    display:flex;
    justify-content:center;

    animation:fadeRight 1s ease;

}

.hero-image{

    position:relative;

    width:100%;
    max-width:620px;

}

.hero-image img{

    width:100%;

    height:700px;

    object-fit:cover;

    border-radius:35px;

    box-shadow:var(--shadow-hover);

}

/*=========================================
        FLOATING CARDS
=========================================*/

.floating-card{

    position:absolute;

    display:flex;
    align-items:center;
    gap:15px;

    padding:18px 22px;

    border-radius:18px;

    background:rgba(255,255,255,.75);

    backdrop-filter:blur(20px);

    border:1px solid rgba(255,255,255,.3);

    box-shadow:var(--shadow);

    animation:floating 5s ease-in-out infinite;

}

body.dark .floating-card{

    background:rgba(20,20,20,.75);

}

.floating-card i{

    width:50px;
    height:50px;

    display:grid;
    place-items:center;

    border-radius:50%;

    background:var(--primary);

    color:#fff;

    font-size:20px;

}

.floating-card h4{

    font-size:16px;

}

.floating-card p{

    margin-top:4px;

    font-size:14px;

    color:var(--text-light);

}

.card1{

    top:50px;

    left:-60px;

}

.card2{

    right:-40px;

    top:250px;

}

.card3{

    bottom:40px;

    left:-50px;

}

/*=========================================
        SEARCH SECTION
=========================================*/

.search-section{

    padding:90px 7%;

}

.search-box{

    max-width:900px;

    margin:auto;

    display:flex;
    align-items:center;

    gap:18px;

    padding:18px 22px;

    border-radius:70px;

    background:var(--card);

    backdrop-filter:blur(18px);

    border:1px solid var(--border);

    box-shadow:var(--shadow);

}

.search-box i{

    font-size:22px;

    color:var(--primary);

}

.search-box input{

    flex:1;

    border:none;

    background:transparent;

    color:var(--text);

    font-size:17px;

}

.search-box button{

    padding:15px 35px;

    border-radius:50px;

    background:linear-gradient(135deg,var(--primary),var(--primary-dark));

    color:#fff;

    font-weight:600;

    transition:.4s;

}

.search-box button:hover{

    transform:scale(1.05);

}

/*=========================================
        POPULAR TAGS
=========================================*/

.popular-tags{

    margin-top:35px;

    display:flex;
    justify-content:center;
    align-items:center;
    gap:15px;

    flex-wrap:wrap;

}

.popular-tags span{

    font-weight:700;

}

.popular-tags a{

    padding:10px 18px;

    border-radius:50px;

    background:var(--card);

    border:1px solid var(--border);

    color:var(--text-light);

    transition:.35s;

}

.popular-tags a:hover{

    background:var(--primary);

    color:#fff;

}

/*=========================================
            ANIMATIONS
=========================================*/

@keyframes fadeLeft{

    from{

        opacity:0;

        transform:translateX(-60px);

    }

    to{

        opacity:1;

        transform:none;

    }

}

@keyframes fadeRight{

    from{

        opacity:0;

        transform:translateX(60px);

    }

    to{

        opacity:1;

        transform:none;

    }

}

@keyframes floating{

    0%{

        transform:translateY(0);

    }

    50%{

        transform:translateY(-12px);

    }

    100%{

        transform:translateY(0);

    }

}
 </style>

</head>
<body>

<!--=========================================
                LOADER
==========================================-->

<div class="loader">

    <div class="loader-circle"></div>

    <h2>Vital<span>Ness</span></h2>

</div>

<!--=========================================
                BACKGROUND
==========================================-->

<div class="bg-gradient bg1"></div>
<div class="bg-gradient bg2"></div>
<div class="bg-gradient bg3"></div>

<!--=========================================
                NAVBAR
==========================================-->

<nav class="navbar">

    <a href="#" class="logo">

        <i class="fa-solid fa-heart-pulse"></i>

        <span>Vital</span>Ness

    </a>

    <ul class="nav-links">

        <li><a href="#">Home</a></li>

        <li><a href="#" class="active">Blog</a></li>

        <li><a href="#">Recipes</a></li>

        <li><a href="#">Workout</a></li>

        <li><a href="#">Weight Loss</a></li>

        <li><a href="#">Contact</a></li>

    </ul>

    <div class="nav-right">

        <button class="search-btn">

            <i class="fa-solid fa-magnifying-glass"></i>

        </button>

        <button id="themeToggle" class="theme-btn">

            <i class="fa-solid fa-moon"></i>

        </button>

        <a href="#" class="join-btn">

            Join Free

        </a>

        <button class="menu-btn">

            <i class="fa-solid fa-bars"></i>

        </button>

    </div>

</nav>

<!--=========================================
            HERO SECTION
==========================================-->

<section class="hero">

<div class="hero-left">

<div class="hero-badge">

<i class="fa-solid fa-fire"></i>

Trending Health Blog

</div>

<h1>

Transform Your

<span>Health</span>

With Expert

Advice

</h1>

<p>

Explore evidence-based fitness tips, healthy recipes,
weight loss guides, workout plans, nutrition advice,
and wellness articles written to help you become the
best version of yourself.

</p>

<div class="hero-buttons">

<a href="#blogs" class="primary-btn">

Explore Blogs

<i class="fa-solid fa-arrow-right"></i>

</a>

<a href="#featured" class="secondary-btn">

Watch Stories

</a>

</div>

<div class="hero-stats">

<div class="stat-card">

<h2>120+</h2>

<span>Expert Articles</span>

</div>

<div class="stat-card">

<h2>50K+</h2>

<span>Monthly Readers</span>

</div>

<div class="stat-card">

<h2>98%</h2>

<span>Positive Reviews</span>

</div>

</div>

</div>

<!--=========================-->

<div class="hero-right">

<div class="hero-image">

<img src="https://images.unsplash.com/photo-1517836357463-d25dfeac3438?w=1200&q=80&auto=format&fit=crop"
alt="Fitness">

<!-- Floating Cards -->

<div class="floating-card card1">

<i class="fa-solid fa-heart-pulse"></i>

<div>

<h4>Heart Rate</h4>

<p>78 BPM</p>

</div>

</div>

<div class="floating-card card2">

<i class="fa-solid fa-fire"></i>

<div>

<h4>Calories</h4>

<p>528 kcal</p>

</div>

</div>

<div class="floating-card card3">

<i class="fa-solid fa-dumbbell"></i>

<div>

<h4>Workout</h4>

<p>45 Minutes</p>

</div>

</div>

</div>

</div>

</section>

<!--=========================================
            SEARCH SECTION
==========================================-->

<section class="search-section">

<div class="search-box">

<i class="fa-solid fa-magnifying-glass"></i>

<input
type="text"
placeholder="Search articles, nutrition, recipes, workouts...">

<button>

Search

</button>

</div>

<div class="popular-tags">

<span>Popular :</span>

<a href="#">Weight Loss</a>

<a href="#">Protein</a>

<a href="#">Muscle Gain</a>

<a href="#">Yoga</a>

<a href="#">Healthy Diet</a>

<a href="#">Cardio</a>

</div>

</section>

<!--=========================================
        FEATURED ARTICLE
==========================================-->

<section class="featured" id="featured">

<div class="featured-image">

<img src="https://images.unsplash.com/photo-1490645935967-10de6ba17061?w=1200&q=80&auto=format&fit=crop"
alt="Featured">

<div class="featured-badge">

Editor's Choice

</div>

</div>

<div class="featured-content">

<span class="category">

Nutrition

</span>

<h2>

The Ultimate Healthy Eating Guide
For Better Energy & Long-Term Fitness

</h2>

<p>

Discover science-backed nutrition strategies that help
boost metabolism, improve recovery, support weight loss,
and maintain overall wellness.

</p>

<div class="article-meta">

<div>

<i class="fa-solid fa-user"></i>

Admin

</div>

<div>

<i class="fa-solid fa-calendar"></i>

June 2026

</div>

<div>

<i class="fa-solid fa-clock"></i>

8 Min Read

</div>

</div>

<a href="#" class="read-btn">

Read Full Article

<i class="fa-solid fa-arrow-right"></i>

</a>

</div>

</section>
<!--=========================================
        TRENDING ARTICLES
==========================================-->

<section class="trending-section" id="blogs">

    <div class="section-heading">

        <span>Latest Articles</span>

        <h2>Trending Health Blogs</h2>

        <p>
            Discover premium articles curated by fitness experts,
            nutritionists and wellness coaches.
        </p>

    </div>

    <div class="trending-grid">

        <!-- Card 1 -->

        <article class="blog-card">

            <div class="blog-image">

                <img src="https://images.unsplash.com/photo-1517836357463-d25dfeac3438?w=900&q=80&auto=format&fit=crop">

                <span class="blog-tag">
                    Fitness
                </span>

            </div>

            <div class="blog-body">

                <div class="blog-meta">

                    <span>
                        <i class="fa-solid fa-calendar"></i>
                        Jul 2026
                    </span>

                    <span>
                        <i class="fa-solid fa-clock"></i>
                        5 min
                    </span>

                </div>

                <h3>

                    7 Morning Habits That Instantly Boost Your Energy

                </h3>

                <p>

                    Learn simple daily routines that improve focus,
                    metabolism and overall productivity.

                </p>

                <a href="#" class="read-link">

                    Read More

                    <i class="fa-solid fa-arrow-right"></i>

                </a>

            </div>

        </article>

        <!-- Card 2 -->

        <article class="blog-card">

            <div class="blog-image">

                <img src="https://images.unsplash.com/photo-1490645935967-10de6ba17061?w=900&q=80&auto=format&fit=crop">

                <span class="blog-tag">
                    Nutrition
                </span>

            </div>

            <div class="blog-body">

                <div class="blog-meta">

                    <span>

                        <i class="fa-solid fa-user"></i>

                        Admin

                    </span>

                    <span>

                        <i class="fa-solid fa-clock"></i>

                        8 min

                    </span>

                </div>

                <h3>

                    Best High Protein Foods For Muscle Recovery

                </h3>

                <p>

                    Improve muscle repair using healthy protein-rich
                    meals and recovery strategies.

                </p>

                <a href="#" class="read-link">

                    Read More

                    <i class="fa-solid fa-arrow-right"></i>

                </a>

            </div>

        </article>

        <!-- Card 3 -->

        <article class="blog-card">

            <div class="blog-image">

                <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?w=900&q=80&auto=format&fit=crop">

                <span class="blog-tag">
                    Healthy Diet
                </span>

            </div>

            <div class="blog-body">

                <div class="blog-meta">

                    <span>

                        <i class="fa-solid fa-eye"></i>

                        15K Views

                    </span>

                    <span>

                        <i class="fa-solid fa-clock"></i>

                        7 min

                    </span>

                </div>

                <h3>

                    Healthy Meal Planning Made Easy

                </h3>

                <p>

                    Weekly meal planning tips for busy professionals
                    and students.

                </p>

                <a href="#" class="read-link">

                    Read More

                    <i class="fa-solid fa-arrow-right"></i>

                </a>

            </div>

        </article>

    </div>

</section>

<!--=========================================
        HEALTH CATEGORIES
==========================================-->

<section class="categories">

    <div class="section-heading">

        <span>Explore</span>

        <h2>Browse By Category</h2>

    </div>

    <div class="category-grid">

        <a href="#" class="category-card">

            <i class="fa-solid fa-dumbbell"></i>

            <h4>Workout</h4>

            <p>58 Articles</p>

        </a>

        <a href="#" class="category-card">

            <i class="fa-solid fa-apple-whole"></i>

            <h4>Nutrition</h4>

            <p>74 Articles</p>

        </a>

        <a href="#" class="category-card">

            <i class="fa-solid fa-weight-scale"></i>

            <h4>Weight Loss</h4>

            <p>42 Articles</p>

        </a>

        <a href="#" class="category-card">

            <i class="fa-solid fa-bowl-food"></i>

            <h4>Weight Gain</h4>

            <p>31 Articles</p>

        </a>

        <a href="#" class="category-card">

            <i class="fa-solid fa-person-running"></i>

            <h4>Cardio</h4>

            <p>26 Articles</p>

        </a>

        <a href="#" class="category-card">

            <i class="fa-solid fa-spa"></i>

            <h4>Yoga</h4>

            <p>33 Articles</p>

        </a>

        <a href="#" class="category-card">

            <i class="fa-solid fa-brain"></i>

            <h4>Mental Health</h4>

            <p>18 Articles</p>

        </a>

        <a href="#" class="category-card">

            <i class="fa-solid fa-heart-pulse"></i>

            <h4>Wellness</h4>

            <p>45 Articles</p>

        </a>

    </div>

</section>

<!--=========================================
        POPULAR TAGS
==========================================-->

<section class="popular-section">

    <div class="section-heading">

        <span>Popular Searches</span>

        <h2>Trending Topics</h2>

    </div>

    <div class="tag-cloud">

        <a href="#">#Protein</a>

        <a href="#">#HealthyDiet</a>

        <a href="#">#WeightLoss</a>

        <a href="#">#Gym</a>

        <a href="#">#Yoga</a>

        <a href="#">#Workout</a>

        <a href="#">#BMI</a>

        <a href="#">#Fitness</a>

        <a href="#">#MuscleGain</a>

        <a href="#">#Recipes</a>

        <a href="#">#Cardio</a>

        <a href="#">#Meditation</a>

    </div>

</section>
<!--=========================================
        FEATURED VIDEOS
==========================================-->

<section class="videos-section">

    <div class="section-heading">

        <span>Watch & Learn</span>

        <h2>Latest Health Videos</h2>

        <p>
            Learn fitness, nutrition and healthy lifestyle through
            expert video guides.
        </p>

    </div>

    <div class="video-grid">

        <!-- Video 1 -->

        <div class="video-card">

            <div class="video-image">

                <img src="https://images.unsplash.com/photo-1518611012118-696072aa579a?w=1200&q=80&auto=format&fit=crop">

                <div class="play-btn">

                    <i class="fa-solid fa-play"></i>

                </div>

            </div>

            <div class="video-content">

                <span>Workout</span>

                <h3>20 Minute Fat Burning Home Workout</h3>

                <p>

                    Burn calories without gym equipment.

                </p>

            </div>

        </div>

        <!-- Video 2 -->

        <div class="video-card">

            <div class="video-image">

                <img src="https://images.unsplash.com/photo-1490645935967-10de6ba17061?w=1200&q=80&auto=format&fit=crop">

                <div class="play-btn">

                    <i class="fa-solid fa-play"></i>

                </div>

            </div>

            <div class="video-content">

                <span>Nutrition</span>

                <h3>Healthy Eating For Everyday Life</h3>

                <p>

                    Build healthy eating habits easily.

                </p>

            </div>

        </div>

        <!-- Video 3 -->

        <div class="video-card">

            <div class="video-image">

                <img src="https://images.unsplash.com/photo-1506126613408-eca07ce68773?w=1200&q=80&auto=format&fit=crop">

                <div class="play-btn">

                    <i class="fa-solid fa-play"></i>

                </div>

            </div>

            <div class="video-content">

                <span>Yoga</span>

                <h3>Morning Yoga For Beginners</h3>

                <p>

                    Increase flexibility and reduce stress.

                </p>

            </div>

        </div>

    </div>

</section>

<!--=========================================
            EXPERT TIPS
==========================================-->

<section class="experts">

    <div class="section-heading">

        <span>Meet Experts</span>

        <h2>Health Professionals</h2>

    </div>

    <div class="expert-grid">

        <div class="expert-card">

            <img src="https://randomuser.me/api/portraits/women/44.jpg">

            <h3>Dr. Sarah Johnson</h3>

            <span>Nutrition Expert</span>

            <p>

                Specialized in sports nutrition and healthy eating.

            </p>

        </div>

        <div class="expert-card">

            <img src="https://randomuser.me/api/portraits/men/32.jpg">

            <h3>Michael Lee</h3>

            <span>Fitness Coach</span>

            <p>

                Certified personal trainer with 10+ years experience.

            </p>

        </div>

        <div class="expert-card">

            <img src="https://randomuser.me/api/portraits/women/65.jpg">

            <h3>Emma Wilson</h3>

            <span>Yoga Instructor</span>

            <p>

                Helping thousands improve flexibility & mindfulness.

            </p>

        </div>

    </div>

</section>

<!--=========================================
            BMI CTA
==========================================-->

<section class="bmi-section">

    <div class="bmi-content">

        <span>Free Tool</span>

        <h2>

            Check Your BMI
            In Seconds

        </h2>

        <p>

            Know whether your weight is healthy and receive
            personalized recommendations.

        </p>

        <a href="#" class="primary-btn">

            Calculate BMI

            <i class="fa-solid fa-arrow-right"></i>

        </a>

    </div>

    <div class="bmi-image">

        <img src="https://images.unsplash.com/photo-1517838277536-f5f99be501cd?w=1200&q=80&auto=format&fit=crop">

    </div>

</section>

<!--=========================================
        AI HEALTH ASSISTANT
==========================================-->

<section class="ai-section">

    <div class="ai-card">

        <div class="ai-left">

            <span class="ai-badge">

                🤖 AI Powered

            </span>

            <h2>

                Meet Your
                AI Health Assistant

            </h2>

            <p>

                Ask anything about nutrition, workouts,
                weight loss, weight gain, calories,
                BMI, healthy recipes and wellness.

            </p>

            <div class="ai-buttons">

                <a href="#" class="primary-btn">

                    Start Chat

                </a>

                <a href="#" class="secondary-btn">

                    Learn More

                </a>

            </div>

        </div>

        <div class="ai-right">

            <img src="https://images.unsplash.com/photo-1531746790731-6c087fecd65a?w=900&q=80&auto=format&fit=crop">

        </div>

    </div>

</section>

<!--=========================================
        INSTAGRAM GALLERY
==========================================-->

<section class="gallery">

    <div class="section-heading">

        <span>Community</span>

        <h2>Healthy Lifestyle Gallery</h2>

    </div>

    <div class="gallery-grid">

        <img src="https://images.unsplash.com/photo-1517836357463-d25dfeac3438?w=700&q=80&auto=format&fit=crop">

        <img src="https://images.unsplash.com/photo-1490645935967-10de6ba17061?w=700&q=80&auto=format&fit=crop">

        <img src="https://images.unsplash.com/photo-1512621776951-a57141f2eefd?w=700&q=80&auto=format&fit=crop">

        <img src="https://images.unsplash.com/photo-1506126613408-eca07ce68773?w=700&q=80&auto=format&fit=crop">

        <img src="https://images.unsplash.com/photo-1518611012118-696072aa579a?w=700&q=80&auto=format&fit=crop">

        <img src="https://images.unsplash.com/photo-1517838277536-f5f99be501cd?w=700&q=80&auto=format&fit=crop">

    </div>

</section>
<!--=========================================
            NEWSLETTER
==========================================-->

<section class="newsletter">

    <div class="newsletter-container">

        <span class="section-badge">
            Weekly Wellness
        </span>

        <h2>

            Subscribe To Our
            Premium Newsletter

        </h2>

        <p>

            Get the latest fitness tips, healthy recipes,
            workout plans, AI health updates and wellness
            guides delivered directly to your inbox.

        </p>

        <form class="newsletter-form">

            <input
                type="email"
                placeholder="Enter your email address"
                required>

            <button type="submit">

                Subscribe Now

                <i class="fa-solid fa-paper-plane"></i>

            </button>

        </form>

        <div class="newsletter-features">

            <div>

                <i class="fa-solid fa-check"></i>

                Weekly Articles

            </div>

            <div>

                <i class="fa-solid fa-check"></i>

                Healthy Recipes

            </div>

            <div>

                <i class="fa-solid fa-check"></i>

                Fitness Tips

            </div>

            <div>

                <i class="fa-solid fa-check"></i>

                No Spam

            </div>

        </div>

    </div>

</section>

<!--=========================================
            FOLLOW US
==========================================-->

<section class="follow-us">

    <h2>

        Join 50,000+ Healthy People

    </h2>

    <p>

        Follow VitalNess for daily health inspiration.

    </p>

    <div class="social-grid">

        <a href="#">

            <i class="fab fa-instagram"></i>

            Instagram

        </a>

        <a href="#">

            <i class="fab fa-youtube"></i>

            YouTube

        </a>

        <a href="#">

            <i class="fab fa-facebook-f"></i>

            Facebook

        </a>

        <a href="#">

            <i class="fab fa-linkedin-in"></i>

            LinkedIn

        </a>

        <a href="#">

            <i class="fab fa-x-twitter"></i>

            Twitter

        </a>

    </div>

</section>

<!--=========================================
                FOOTER
==========================================-->

<footer class="footer">

<div class="footer-container">

<div class="footer-about">

<div class="footer-logo">

<i class="fa-solid fa-heart-pulse"></i>

<span>Vital</span>Ness

</div>

<p>

VitalNess helps people build healthier lifestyles
through fitness, nutrition, AI health guidance,
healthy recipes and wellness education.

</p>

<div class="footer-social">

<a href="#"><i class="fab fa-facebook-f"></i></a>

<a href="#"><i class="fab fa-instagram"></i></a>

<a href="#"><i class="fab fa-youtube"></i></a>

<a href="#"><i class="fab fa-linkedin-in"></i></a>

<a href="#"><i class="fab fa-x-twitter"></i></a>

</div>

</div>

<!--========================-->

<div class="footer-links">

<h3>Quick Links</h3>

<a href="#">Home</a>

<a href="#">Blog</a>

<a href="#">Recipes</a>

<a href="#">Workout</a>

<a href="#">Weight Loss</a>

<a href="#">Weight Gain</a>

<a href="#">AI Assistant</a>

</div>

<!--========================-->

<div class="footer-links">

<h3>Health Topics</h3>

<a href="#">Nutrition</a>

<a href="#">BMI Calculator</a>

<a href="#">Calories</a>

<a href="#">Yoga</a>

<a href="#">Meditation</a>

<a href="#">Diet Plans</a>

<a href="#">Fitness Tips</a>

</div>

<!--========================-->

<div class="footer-links">

<h3>Resources</h3>

<a href="#">Help Center</a>

<a href="#">FAQs</a>

<a href="#">Privacy Policy</a>

<a href="#">Terms & Conditions</a>

<a href="#">Cookie Policy</a>

<a href="#">Support</a>

</div>

<!--========================-->

<div class="footer-links">

<h3>Contact</h3>

<p>

<i class="fa-solid fa-location-dot"></i>

India

</p>

<p>

<i class="fa-solid fa-envelope"></i>

support@vitalness.com

</p>

<p>

<i class="fa-solid fa-phone"></i>

+91 98765 43210

</p>

<a href="#" class="footer-btn">

Contact Us

</a>

</div>

</div>

<div class="footer-bottom">

<p>

© 2026 <strong>VitalNess</strong>.
All Rights Reserved.

</p>

<div class="bottom-links">

<a href="#">Privacy</a>

<a href="#">Terms</a>

<a href="#">Cookies</a>

<a href="#">Sitemap</a>

</div>

</div>

</footer>

<!--=========================================
            BACK TO TOP
==========================================-->

<button id="backToTop">

<i class="fa-solid fa-arrow-up"></i>

</button>

<!--=========================================
                BLOG JS
==========================================-->

<script src="blog.js"></script>

</body>
</html>

<!--=========================================
            END PART 3
==========================================-->

<!--=========================================
        END OF PART 2
==========================================-->

<!--=========================================
        PART 1 END
==========================================-->

<script src="blog.js"></script>

</body>
</html>