<?php


session_start();

// Agar user login nahi hai

if (!isset($_SESSION['kashish'])) {

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
<section class="premium-section">

    <!-- BACKGROUND GLOW -->
    <div class="premium-glow"></div>

    <div class="premium-container">

        <!-- LEFT CONTENT -->
        <div class="premium-left">

            <span class="premium-tag">
                 VITALNESS PREMIUM
            </span>

            <h2>
                Unlock The <span>Premium</span><br>
                Fitness Experience
            </h2>

            <p>
                Access advanced workout programs, AI diet plans,
                personal coaching, premium trackers and exclusive
                transformation tools with VitalNess Pro.
            </p>

            <!-- FEATURES -->
            <div class="premium-features">

                <div class="premium-feature">
                    <i class="fa-solid fa-circle-check"></i>
                    <span>Unlimited Workout Programs</span>
                </div>

                <div class="premium-feature">
                    <i class="fa-solid fa-circle-check"></i>
                    <span>Personal Diet Plans</span>
                </div>

                <div class="premium-feature">
                    <i class="fa-solid fa-circle-check"></i>
                    <span>Advanced BMI & Calorie Tracker</span>
                </div>

                <div class="premium-feature">
                    <i class="fa-solid fa-circle-check"></i>
                    <span>Premium Meditation Sessions</span>
                </div>

                <div class="premium-feature">
                    <i class="fa-solid fa-circle-check"></i>
                    <span>Expert Live Guidance</span>
                </div>

            </div>

            <!-- BUTTONS -->
            <div class="premium-buttons">

                <a href="#" class="premium-btn">
                    🚀 Upgrade Now
                </a>

                <a href="#" class="premium-outline-btn">
                    View Plans
                </a>

            </div>

        </div>

        <!-- RIGHT CARD -->
        <div class="premium-right" id="bounce-heading">

            <div class="premium-card">

                <div class="premium-top">
                    <span>Most Popular</span>
                </div>

                <h3>VitalNess Pro</h3>

                <div class="premium-price">
                    ₹499
                    <span>/month</span>
                </div>

                <ul>

                    <li>
                        <i class="fa-solid fa-check"></i>
                        AI Fitness Dashboard
                    </li>

                    <li>
                        <i class="fa-solid fa-check"></i>
                        Smart Health Reports
                    </li>

                    <li>
                        <i class="fa-solid fa-check"></i>
                        Premium Workout Videos
                    </li>

                    <li>
                        <i class="fa-solid fa-check"></i>
                        Daily Diet Tracking
                    </li>

                    <li>
                        <i class="fa-solid fa-check"></i>
                        24/7 Expert Support
                    </li>

                </ul>

                <a href="#" class="premium-card-btn">
                    Start Premium
                </a>

            </div>

        </div>

    </div>

</section>
<!-- FEATURES -->

<section class="features" id="features">

    <h2 class="title">
        Exclusive Features
    </h2>

    <div class="grid">

        <div class="card">

            <i class="fa-solid fa-wand-magic-sparkles"></i>

            <h3>AI Design</h3>

            <p>
                Generate stunning layouts instantly with
                next-generation AI design tools.
            </p>

        </div>

        <div class="card">

            <i class="fa-solid fa-mobile-screen"></i>

            <h3>Responsive UI</h3>

            <p>
                Modern responsive interfaces optimized
                for every device.
            </p>

        </div>

        <div class="card">

            <i class="fa-solid fa-rocket"></i>

            <h3>Fast Workflow</h3>

            <p>
                Ultra smooth animations and lightning fast
                performance system.
            </p>

        </div>

        <div class="card">

            <i class="fa-solid fa-lock"></i>

            <h3>Secure Dashboard</h3>

            <p>
                Only authenticated users can access
                premium dashboard features.
            </p>

        </div>

    </div>

</section>


<!-- CONTACT / FITNESS FORM -->
<section class="section" id="contact-form">

  <h2>📩 Get Personalized Fitness Plan</h2>
  <p>Fill the form and we will suggest diet + workout plan for you</p>

  <div class="grid">

    <div class="card" style="grid-column: span 2;">
      
      <input type="text" placeholder="Your Name">
      <input type="text" placeholder="Age">
      <input type="text" placeholder="Weight (kg)">
      <input type="text" placeholder="Height (cm)">
      
      <select>
        <option>Fitness Goal</option>
        <option>Weight Loss</option>
        <option>Muscle Gain</option>
        <option>General Fitness</option>
      </select>

      <button>Get Plan</button>

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


<!-- OVERLAY -->

<div class="sidebar-overlay" id="overlay"
onclick="closeSidebar()"></div>




<!-- SIDEBAR -->

<div class="profile-sidebar"
id="profileSidebar">

    <div class="sidebar-cover"></div>

    <div class="sidebar-profile">

        <img src="https://i.pravatar.cc/150?img=12">

        <h2>
            <?php echo $_SESSION['kashish']; ?>
        </h2>

        <p>
            VitalNess Premium User
        </p>

    </div>

    <div class="sidebar-menu">

        <a href="#">
            <i class="fa-solid fa-user"></i>
            My Profile
        </a>

        <a href="#">
            <i class="fa-solid fa-dumbbell"></i>
            My Workouts
        </a>

        <a href="#">
            <i class="fa-solid fa-chart-line"></i>
            Analytics
        </a>

        <a href="#">
            <i class="fa-solid fa-heart-pulse"></i>
            Health Reports
        </a>

        <a href="#">
            <i class="fa-solid fa-gear"></i>
            Settings
        </a>

        <a href="../logout.php">
            <i class="fa-solid fa-right-from-bracket"></i>
            Logout
        </a>

    </div>

    <div class="sidebar-premium" id ="bounce-heading"
    
 >

        <h3>
            Upgrade Premium 🚀
        </h3>

        <p>
            Unlock more advanced features.
        </p>

        <button>
            Upgrade Now
        </button>

    </div>

</div>
<!-- LOGIN SUCCESS POPUP -->

<div id="loginPopup" class="popup-container">

    <div class="popup-box">

        <div class="check-icon">✓</div>

        <h2>Login Successful</h2>

        <p>Welcome Back</p>

    </div>

</div>
<!-- SIGNUP SUCCESS POPUP -->

<div id="signupPopup" class="popup-container">

    <div class="popup-box">

        <div class="check-icon">✓</div>

        <h2>Signup Successful</h2>

        <p>Your account has been created</p>

    </div>

</div>




<script src="src/script.js"></script>
</body>
</html>