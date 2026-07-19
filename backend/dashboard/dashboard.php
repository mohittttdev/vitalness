<?php


session_start();

// Agar user login nahi hai

if (!isset($_SESSION['name'])) {

    header("Location: ../frontend/index.html");

    exit();

}

?>


<!DOCTYPE html>
<html>
<head>
    <title>DASHBOARD</title>
    <link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

   
   
<link rel="stylesheet" href="src/style.css">
</head>
<body>



<!-- NAVBAR -->
<nav>

    <!-- LEFT -->
    <div class="nav-left">

        <div class="logo">Vitalness</div>

        <ul class="nav-center">
            <li><a href="#">Home</a></li>
        <li class="dropdown">

    <a href="javascript:void(0)" class="recipe-btn">
        Recipes ▾
    </a>

    <ul class="dropdown-menu" id="recipeMenu">

        <li>
            <a href="vegetarian-recipes.html">
                Vegetarian or Non Vegetarian 
            </a>
        </li>

       

        <li>
            <a href="high-protein-recipes.html">
                High Protein
            </a>
        </li>

        <li>
            <a href="quick-easy-recipes.html">
                Quick & Easy
            </a>
        </li>

    </ul>

</li>
        <li class="dropdown">

    <a href="javascript:void(0)" class="mind-btn">
        Mindfulness ▾
    </a>

    <ul class="dropdown-menu" id="mindMenu">

        <li>
            <a href="guided-meditation.html">
                Guided Meditations
            </a>
        </li>

        <li>
            <a href="breathing-exercises.html">
                Breathing Exercises
            </a>
        </li>

        <li>
            <a href="stress-relief.html">
                Stress Relief
            </a>
        </li>

    </ul>

</li>
           
           <li class="dropdown">

    <a href="javascript:void(0)" class="program-btn">
        Program ▾
    </a>

    <ul class="dropdown-menu" id="programMenu">

        <li>
            <a href="weight-gain.html">
                Weight Gain or Weight Loss
            </a>
        </li>

       

        <li>
            <a href="muscle-gain.html">
                Muscle Gain
            </a>
        </li>

        <li>
            <a href="stamina.html">
                Stamina or  Endurance
            </a>
        </li>
   <li>
            <a href="stamina.html">
                Cardio
            </a>
        </li>

    </ul>

</li>

 <li><a href="#">Blog</a></li>
            <li class="dropdown">

    <a href="javascript:void(0)" class="expert-btn">
        Experts ▾
    </a>

    <ul class="dropdown-menu" id="expertMenu">

        <li>
            <a href="physiotherapist.html">Physiotherapist</a>
        </li>

        <li>
            <a href="rehab-specialist.html">Rehab Specialist</a>
        </li>

        <li>
            <a href="mindset-coach.html">Mindset / Wellness Coach</a>
        </li>

        <li>
            <a href="yoga-instructor.html">Certified Yoga Instructor</a>
        </li>


        <li>
            <a href="yoga-instructor.html"> Nutrition Advisor</a>
        </li> 
        <li>
            <a href="yoga-instructor.html">Strength And Conditioning Coach</a>
        </li> 
    </ul>

</li>
        </ul>

    </div>

    <!-- RIGHT -->
    <div class="nav-right">    
        
<!-- SEARCH BOX -->
<div class="search-box">
    <input type="text" placeholder="Search..." class="search-input" >
    <i class="fa-solid fa-magnifying-glass"></i>
</div>
  

<!-- LANGUAGE SELECTOR -->
<div class="language-box">
    <select id="languageSelect">
        <option value="en">English</option>
        <option value="hi">Hindi</option>
    </select>
</div>

        



    

    <div class="nav-right">

        <div class="profile-btn" onclick="openSidebar()">

            <img src="https://i.pravatar.cc/150?img=12">

        </div>

    </div>

</nav>


<!-- PREMIUM MEMBERSHIP SECTION -->

<section class="premium-hero">

    <div class="premium-bg-circle one"></div>
    <div class="premium-bg-circle two"></div>

    <div class="premium-container">

        <!-- LEFT -->

        <div class="premium-left">

            <span class="premium-badge">

                <i class="fa-solid fa-crown"></i>

                VITALNESS PREMIUM

            </span>

            <h1>

                Stay
                <span>Injury-Free</span>

                <br>

                Train Smarter

                <br>

                Live Healthier

            </h1>

            <p>

                Unlock the complete VitalNess Premium experience with
                AI-powered injury prevention, rehabilitation programs,
                expert physiotherapists, recovery tracking, premium
                workout plans and personalized health coaching.

            </p>

            <div class="premium-highlights">

                <div class="highlight">

                    <i class="fa-solid fa-shield-heart"></i>

                    <div>

                        <h4>Injury Prevention</h4>

                        <span>Reduce injury risk with smart assessments.</span>

                    </div>

                </div>

                <div class="highlight">

                    <i class="fa-solid fa-heart-pulse"></i>

                    <div>

                        <h4>Recovery Programs</h4>

                        <span>Recover faster with guided rehab plans.</span>

                    </div>

                </div>

                <div class="highlight">

                    <i class="fa-solid fa-user-doctor"></i>

                    <div>

                        <h4>Expert Support</h4>

                        <span>Certified physiotherapists & wellness experts.</span>

                    </div>

                </div>

            </div>

            <div class="premium-buttons">

                <a href="#" class="premium-btn">

                    Start Premium

                </a>

                <a href="#" class="premium-outline-btn">

                    Explore Benefits

                </a>

            </div>

            <div class="premium-stats">

                <div>

                    <h2>50K+</h2>

                    <p>Premium Members</p>

                </div>

                <div>

                    <h2>98%</h2>

                    <p>Recovery Success</p>

                </div>

                <div>

                    <h2>24/7</h2>

                    <p>Expert Support</p>

                </div>

            </div>

        </div>

        <!-- RIGHT -->

        <div class="premium-right">

            <div class="membership-card">

                <div class="popular">

                    MOST POPULAR

                </div>

                <h3>

                    VitalNess Pro+

                </h3>

                <div class="price">

                    ₹799

                    <span>/Month</span>

                </div>

                <ul>

                    <li>

                        <i class="fa-solid fa-check"></i>

                        AI Injury Risk Analysis

                    </li>

                    <li>

                        <i class="fa-solid fa-check"></i>

                        Personalized Recovery Plans

                    </li>

                    <li>

                        <i class="fa-solid fa-check"></i>

                        Premium Workout Library

                    </li>

                    <li>

                        <i class="fa-solid fa-check"></i>

                        Live Physiotherapist Sessions

                    </li>

                    <li>

                        <i class="fa-solid fa-check"></i>

                        Daily Progress Reports

                    </li>

                    <li>

                        <i class="fa-solid fa-check"></i>

                        AI Health Assistant

                    </li>

                    <li>

                        <i class="fa-solid fa-check"></i>

                        Nutrition Guidance

                    </li>

                </ul>

                <a href="#" class="premium-card-btn">

                    Upgrade Now

                </a>

            </div>

        </div>

    </div>

</section><!--==================================
        PREMIUM INJURY BENEFITS
===================================-->

<section class="premium-benefits">

    <div class="section-title">

        <span class="section-tag">
            🛡 PREMIUM BENEFITS
        </span>

        <h2>

            Why Choose
            <span>VitalNess Premium?</span>

        </h2>

        <p>

            Train confidently with advanced injury prevention,
            recovery guidance, AI health analysis and certified
            experts—all in one premium membership.

        </p>

    </div>

    <div class="benefits-grid">

        <!-- Card -->

        <div class="benefit-card">

            <div class="benefit-icon">

                <i class="fa-solid fa-shield-heart"></i>

            </div>

            <h3>

                AI Injury Detection

            </h3>

            <p>

                Smart movement analysis identifies potential
                injury risks before they become serious.

            </p>

            <span>

                Prevention First

            </span>

        </div>

        <!-- Card -->

        <div class="benefit-card">

            <div class="benefit-icon">

                <i class="fa-solid fa-user-doctor"></i>

            </div>

            <h3>

                Physiotherapist Support

            </h3>

            <p>

                Connect with certified physiotherapists for
                personalized recovery guidance.

            </p>

            <span>

                Certified Experts

            </span>

        </div>

        <!-- Card -->

        <div class="benefit-card">

            <div class="benefit-icon">

                <i class="fa-solid fa-heart-pulse"></i>

            </div>

            <h3>

                Injury Recovery Plans

            </h3>

            <p>

                Personalized rehabilitation programs for
                faster and safer recovery.

            </p>

            <span>

                Smart Rehab

            </span>

        </div>

        <!-- Card -->

        <div class="benefit-card">

            <div class="benefit-icon">

                <i class="fa-solid fa-dumbbell"></i>

            </div>

            <h3>

                Safe Workout Library

            </h3>

            <p>

                Hundreds of expert-designed workouts
                with injury-safe training techniques.

            </p>

            <span>

                Premium Training

            </span>

        </div>

        <!-- Card -->

        <div class="benefit-card">

            <div class="benefit-icon">

                <i class="fa-solid fa-chart-line"></i>

            </div>

            <h3>

                Recovery Analytics

            </h3>

            <p>

                Track flexibility, strength,
                recovery progress and mobility
                with AI-powered reports.

            </p>

            <span>

                Smart Reports

            </span>

        </div>

        <!-- Card -->

        <div class="benefit-card">

            <div class="benefit-icon">

                <i class="fa-solid fa-brain"></i>

            </div>

            <h3>

                Mental Wellness

            </h3>

            <p>

                Guided meditation, breathing
                exercises and stress management
                for complete recovery.

            </p>

            <span>

                Healthy Mind

            </span>

        </div>

    </div>

</section>


<!--==================================
        RECOVERY TIMELINE
===================================-->

<section class="recovery-process">

    <div class="section-title">

        <span class="section-tag">

            ❤️ RECOVERY PROCESS

        </span>

        <h2>

            Recover Smarter

            <span>Every Week</span>

        </h2>

    </div>

    <div class="timeline">

        <div class="timeline-item">

            <div class="number">

                01

            </div>

            <div class="content">

                <h3>

                    Injury Assessment

                </h3>

                <p>

                    AI scans your symptoms and identifies
                    recovery requirements.

                </p>

            </div>

        </div>

        <div class="timeline-item">

            <div class="number">

                02

            </div>

            <div class="content">

                <h3>

                    Expert Consultation

                </h3>

                <p>

                    Certified physiotherapists review
                    your condition and goals.

                </p>

            </div>

        </div>

        <div class="timeline-item">

            <div class="number">

                03

            </div>

            <div class="content">

                <h3>

                    Recovery Program

                </h3>

                <p>

                    Receive a personalized rehabilitation
                    and mobility improvement plan.

                </p>

            </div>

        </div>

        <div class="timeline-item">

            <div class="number">

                04

            </div>

            <div class="content">

                <h3>

                    Return Stronger

                </h3>

                <p>

                    Safely return to training with
                    AI monitoring and weekly progress reports.

                </p>

            </div>

        </div>

    </div>

</section>
<!--==================================
        PREMIUM PLANS
===================================-->

<section class="premium-plans">

    <div class="section-title">

        <span class="section-tag">
            💎 MEMBERSHIP PLANS
        </span>

        <h2>
            Choose Your
            <span>Perfect Plan</span>
        </h2>

        <p>
            Whether you're starting your fitness journey or recovering from an
            injury, VitalNess has a membership tailored to your needs.
        </p>

    </div>

    <div class="plans-grid">

        <!-- STARTER -->

        <div class="plan-card">

            <div class="plan-header">

                <h3>Starter</h3>

                <p>For Beginners</p>

            </div>

            <div class="plan-price">

                ₹299

                <span>/Month</span>

            </div>

            <ul>

                <li><i class="fa-solid fa-check"></i> Beginner Workout Library</li>

                <li><i class="fa-solid fa-check"></i> Basic Meal Plans</li>

                <li><i class="fa-solid fa-check"></i> BMI Calculator</li>

                <li><i class="fa-solid fa-check"></i> Health Blog Access</li>

                <li><i class="fa-solid fa-check"></i> Community Support</li>

            </ul>

            <a href="#" class="plan-btn">

                Get Started

            </a>

        </div>

        <!-- PRO -->

        <div class="plan-card popular">

            <div class="popular-badge">

                ⭐ MOST POPULAR

            </div>

            <div class="plan-header">

                <h3>VitalNess Pro</h3>

                <p>Best For Active Members</p>

            </div>

            <div class="plan-price">

                ₹799

                <span>/Month</span>

            </div>

            <ul>

                <li><i class="fa-solid fa-check"></i> AI Injury Detection</li>

                <li><i class="fa-solid fa-check"></i> Personalized Diet Plans</li>

                <li><i class="fa-solid fa-check"></i> Premium Workout Library</li>

                <li><i class="fa-solid fa-check"></i> Recovery Tracking</li>

                <li><i class="fa-solid fa-check"></i> Live Expert Sessions</li>

                <li><i class="fa-solid fa-check"></i> Smart Health Reports</li>

                <li><i class="fa-solid fa-check"></i> AI Health Assistant</li>

            </ul>

            <a href="#" class="plan-btn active">

                Upgrade Now

            </a>

        </div>

        <!-- ELITE -->

        <div class="plan-card">

            <div class="plan-header">

                <h3>Elite Care</h3>

                <p>Complete Transformation</p>

            </div>

            <div class="plan-price">

                ₹1499

                <span>/Month</span>

            </div>

            <ul>

                <li><i class="fa-solid fa-check"></i> Everything in Pro</li>

                <li><i class="fa-solid fa-check"></i> 1-on-1 Physiotherapist</li>

                <li><i class="fa-solid fa-check"></i> Weekly Recovery Sessions</li>

                <li><i class="fa-solid fa-check"></i> Personal Trainer</li>

                <li><i class="fa-solid fa-check"></i> Injury Rehabilitation</li>

                <li><i class="fa-solid fa-check"></i> Priority Support</li>

                <li><i class="fa-solid fa-check"></i> Premium Certifications</li>

            </ul>

            <a href="#" class="plan-btn">

                Join Elite

            </a>

        </div>

    </div>

</section>

<!--==================================
        PLAN COMPARISON
===================================-->

<section class="plan-comparison">

    <div class="section-title">

        <span class="section-tag">

            📊 COMPARE PLANS

        </span>

        <h2>

            Compare Membership

            <span>Features</span>

        </h2>

    </div>

    <div class="comparison-table">

        <table>

            <thead>

                <tr>

                    <th>Features</th>

                    <th>Starter</th>

                    <th>Pro</th>

                    <th>Elite</th>

                </tr>

            </thead>

            <tbody>

                <tr>

                    <td>Workout Programs</td>

                    <td>✔</td>

                    <td>✔</td>

                    <td>✔</td>

                </tr>

                <tr>

                    <td>AI Injury Detection</td>

                    <td>—</td>

                    <td>✔</td>

                    <td>✔</td>

                </tr>

                <tr>

                    <td>Recovery Plans</td>

                    <td>Basic</td>

                    <td>Advanced</td>

                    <td>Premium</td>

                </tr>

                <tr>

                    <td>Physiotherapist</td>

                    <td>—</td>

                    <td>Monthly</td>

                    <td>Weekly</td>

                </tr>

                <tr>

                    <td>Diet Plans</td>

                    <td>✔</td>

                    <td>Personalized</td>

                    <td>Fully Customized</td>

                </tr>

                <tr>

                    <td>AI Health Assistant</td>

                    <td>—</td>

                    <td>✔</td>

                    <td>✔</td>

                </tr>

                <tr>

                    <td>Priority Support</td>

                    <td>—</td>

                    <td>✔</td>

                    <td>24×7 VIP</td>

                </tr>

            </tbody>

        </table>

    </div>

</section>
<!--==================================
        SUCCESS STORIES
===================================-->

<section class="premium-testimonials">

    <div class="section-title">

        <span class="section-tag">
            ⭐ SUCCESS STORIES
        </span>

        <h2>
            Real People,
            <span>Real Results</span>
        </h2>

        <p>
            Thousands of members trust VitalNess Premium for injury prevention,
            rehabilitation, and long-term fitness success.
        </p>

    </div>

    <div class="testimonial-grid">

        <!-- Card -->

        <div class="testimonial-card">

            <div class="stars">

                ⭐⭐⭐⭐⭐

            </div>

            <p>

                "After my knee injury, the AI recovery plan and physiotherapist
                guidance helped me return to training in just 8 weeks."

            </p>

            <div class="user">

                <img src="https://i.pravatar.cc/100?img=12">

                <div>

                    <h4>Rahul Sharma</h4>

                    <span>Premium Member</span>

                </div>

            </div>

        </div>

        <!-- Card -->

        <div class="testimonial-card">

            <div class="stars">

                ⭐⭐⭐⭐⭐

            </div>

            <p>

                "The recovery tracker kept me motivated every day. I avoided
                another shoulder injury because of the personalized exercises."

            </p>

            <div class="user">

                <img src="https://i.pravatar.cc/100?img=18">

                <div>

                    <h4>Priya Verma</h4>

                    <span>Elite Member</span>

                </div>

            </div>

        </div>

        <!-- Card -->

        <div class="testimonial-card">

            <div class="stars">

                ⭐⭐⭐⭐⭐

            </div>

            <p>

                "Worth every rupee. Premium workouts, recovery plans and expert
                support are all available in one place."

            </p>

            <div class="user">

                <img src="https://i.pravatar.cc/100?img=33">

                <div>

                    <h4>Aman Gupta</h4>

                    <span>Pro Member</span>

                </div>

            </div>

        </div>

    </div>

</section>

<!--==================================
            FAQ
===================================-->

<section class="premium-faq">

    <div class="section-title">

        <span class="section-tag">

            ❓ FAQ

        </span>

        <h2>

            Frequently Asked

            <span>Questions</span>

        </h2>

    </div>

    <div class="faq-container">

        <div class="faq-item">

            <h3>

                Is Premium suitable for beginners?

            </h3>

            <p>

                Yes. Every workout and recovery plan is customized according to
                your fitness level.

            </p>

        </div>

        <div class="faq-item">

            <h3>

                Can I cancel anytime?

            </h3>

            <p>

                Absolutely. You can upgrade, downgrade or cancel your
                subscription whenever you want.

            </p>

        </div>

        <div class="faq-item">

            <h3>

                Will I get injury recovery guidance?

            </h3>

            <p>

                Yes. Premium members receive personalized recovery programs,
                physiotherapist guidance and AI-based recovery monitoring.

            </p>

        </div>

        <div class="faq-item">

            <h3>

                Do I get access to AI Health Assistant?

            </h3>

            <p>

                Yes. Pro and Elite members receive unlimited access to the
                VitalNess AI Health Assistant.

            </p>

        </div>

    </div>

</section>

<!--==================================
        FINAL CTA
===================================-->

<section class="premium-final-cta">

    <div class="cta-box">

        <span class="section-tag">

            🚀 START TODAY

        </span>

        <h2>

            Ready To Become

            <span>Stronger & Injury-Free?</span>

        </h2>

        <p>

            Join thousands of members who are already transforming their lives
            with AI-powered fitness, injury prevention, expert physiotherapists,
            personalized recovery plans and premium health tools.

        </p>

        <div class="cta-buttons">

            <a href="#" class="premium-btn">

                Join Premium

            </a>

            <a href="#" class="premium-outline-btn">

                Compare Plans

            </a>

        </div>

        <div class="trust-badges">

            <div>

                🛡 Secure Payment

            </div>

            <div>

                ❤️ 7-Day Money Back

            </div>

            <div>

                👨‍⚕ Certified Experts

            </div>

            <div>

                ⭐ 50,000+ Happy Members

            </div>

        </div>

    </div>

</section>

<!-- FOOTER -->

<footer>
    <!-- Footer -->
    <div class="footer-content">

        <!-- Brand Section -->
        <div class="footer-section">
            <h3>VitalNess</h3>
            <p>
                Empowering healthier lives with smart fitness tracking,
                personalized diet plans, workouts, and wellness solutions.
            </p>
        </div>

        <!-- Company -->
        <div class="footer-section">
            <h4>Company</h4>
            <ul>
                <li><a href="about.html">About Us</a></li>
                <li><a href="team.html">Our Team</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </div>

        <!-- Features -->
        <div class="footer-section">
            <h4>Features</h4>
            <ul>
                <li><a href="#">BMI Calculator</a></li>
                <li><a href="#">Workout Plans</a></li>
                <li><a href="#">Diet Tracking</a></li>
                <li><a href="#">Health Tips</a></li>
            </ul>
        </div>

        <!-- Legal -->
        <div class="footer-section">
            <h4>Legal</h4>
            <ul>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms & Conditions</a></li>
                <li><a href="#">Cookies Policy</a></li>
            </ul>
        </div>

    </div>

    <!-- Bottom Footer -->
    <div class="footer-bottom">
        <p>&copy; 2026 VitalNess. All rights reserved.</p>

        <div class="social-links">
            <a href="https://x.com/">Twitter</a>
            <a href="https://www.youtube.com/">YouTube</a>
            <a href="https://www.linkedin.com/">LinkedIn</a>
        </div>
    </div>
</footer>


<!-- =========================
        SIDEBAR OVERLAY
========================= -->
<div class="sidebar-overlay" id="overlay" onclick="closeSidebar()"></div>

<!-- =========================
        PROFILE SIDEBAR
========================= -->
<aside class="profile-sidebar" id="profileSidebar">

    <!-- Cover -->
    <div class="sidebar-cover">
        <div class="cover-overlay"></div>
    </div>

    <!-- User Profile -->
    <div class="sidebar-profile">

        <div class="profile-image">

            <img src="https://i.pravatar.cc/150?img=12" alt="Profile">

            <span class="online-status"></span>

        </div>

        <div class="profile-details">

            <h2>
                <?php echo $_SESSION['name']; ?>
            </h2>

            <p>
                <?php echo $_SESSION['email']; ?>
            </p>

            <div class="profile-badge">
                <i class="fa-solid fa-shield-heart"></i>
                Active Member
            </div>

        </div>

    </div>

    <!-- Divider -->
    <div class="sidebar-divider"></div>

    <!-- Navigation -->
    <nav class="sidebar-menu">

        <a href="#" class="active">

            <div class="menu-icon">
                <i class="fa-solid fa-user"></i>
            </div>

            <div class="menu-text">
                <span>My Profile</span>
                <small>Personal Information</small>
            </div>

            <i class="fa-solid fa-angle-right menu-arrow"></i>

        </a>

        <a href="#">

            <div class="menu-icon">
                <i class="fa-solid fa-dumbbell"></i>
            </div>

            <div class="menu-text">
                <span>My Workouts</span>
                <small>Training History</small>
            </div>

            <i class="fa-solid fa-angle-right menu-arrow"></i>

        </a>

        <a href="#">

            <div class="menu-icon">
                <i class="fa-solid fa-chart-line"></i>
            </div>

            <div class="menu-text">
                <span>Analytics</span>
                <small>Performance Stats</small>
            </div>

            <i class="fa-solid fa-angle-right menu-arrow"></i>

        </a>

        <a href="#">

            <div class="menu-icon">
                <i class="fa-solid fa-heart-pulse"></i>
            </div>

            <div class="menu-text">
                <span>Health Reports</span>
                <small>Medical & Fitness</small>
            </div>

            <i class="fa-solid fa-angle-right menu-arrow"></i>

        </a>

        <a href="#">

            <div class="menu-icon">
                <i class="fa-solid fa-gear"></i>
            </div>

            <div class="menu-text">
                <span>Settings</span>
                <small>Account Preferences</small>
            </div>

            <i class="fa-solid fa-angle-right menu-arrow"></i>

        </a>

        <a href="../logout.php" class="logout-btn">

            <div class="menu-icon">
                <i class="fa-solid fa-right-from-bracket"></i>
            </div>

            <div class="menu-text">
                <span>Logout</span>
                <small>Secure Sign Out</small>
            </div>

            <i class="fa-solid fa-angle-right menu-arrow"></i>

        </a>

    </nav>

    <!-- Premium Card -->
    <div class="sidebar-premium" id="bounce-heading">

        <div class="premium-icon">
            <i class="fa-solid fa-crown"></i>
        </div>

        <h3>Upgrade to Premium</h3>

        <p>
            Unlock AI Coach, Diet Plans, Advanced Analytics,
            Premium Workouts and Exclusive Features.
        </p>

        <button class="premium-btn">
            <i class="fa-solid fa-bolt"></i>
            Upgrade Now
        </button>

    </div>

</aside>

<!-- =========================
        LOGIN SUCCESS POPUP
========================= -->

<div id="loginPopup" class="popup-container">

    <div class="popup-box">

        <div class="popup-icon success">

            <div class="check-icon">
                <i class="fa-solid fa-check"></i>
            </div>

        </div>

        <h2>Login Successful</h2>

        <p>
            Welcome Back,
            <strong><?php echo $_SESSION['name']; ?></strong>
        </p>

    </div>

</div>

<!-- =========================
        SIGNUP SUCCESS POPUP
========================= -->

<div id="signupPopup" class="popup-container">

    <div class="popup-box">

        <div class="popup-icon success">

            <div class="check-icon">
                <i class="fa-solid fa-check"></i>
            </div>

        </div>

        <h2>Signup Successful</h2>

        <p>
            Your account has been created successfully.
        </p>

    </div>

</div>




<script src="src/script.js"></script>
</body>
</html>