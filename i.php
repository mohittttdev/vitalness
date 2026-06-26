 <style>
.auth-card{
    width:900px;
    height:520px;

    display:flex;
    overflow:hidden;

    border-radius:25px;

    background:rgba(255,255,255,0.08);

    backdrop-filter:blur(20px);

    border:1px solid rgba(255,255,255,0.12);

    box-shadow:0 20px 50px rgba(0,0,0,0.4);

    padding:0;
}

/* LEFT FITNESS IMAGE */
.auth-image{
    width:50%;
    height:100%;
}

.auth-image img{
    width:100%;
    height:100%;
    object-fit:cover;
}

/* RIGHT FORM */
.auth-form{
    width:50%;
    padding:50px;
    color:white;

    display:flex;
    flex-direction:column;
    justify-content:center;
}

.auth-form h2{
    font-size:35px;
    margin-bottom:25px;
    color:#4da3ff;
}

.auth-form input{
    width:100%;
    padding:14px;
    margin-bottom:15px;

    border:none;
    outline:none;

    border-radius:12px;

    background:rgba(255,255,255,0.08);
    color:white;
}

.auth-form button{
    background:linear-gradient(135deg,#4da3ff,#2563eb);

    color:white;

    border:none;

    padding:14px;

    border-radius:12px;

    cursor:pointer;
}

.auth-form button:hover{
    transform:translateY(-3px);
}

/* MOBILE */
@media(max-width:768px){

    .auth-card{
        width:95%;
        height:auto;
        flex-direction:column;
    }

    .auth-image{
        width:100%;
        height:220px;
    }

    .auth-form{
        width:100%;
    }
}
 </style><div class="auth-card">



    <div class="auth-card">

    <!-- LEFT FITNESS IMAGE -->
    <div class="auth-image">
        <img src="https://images.unsplash.com/photo-1517836357463-d25dfeac3438?q=80&w=1600&auto=format&fit=crop">
    </div>

    <!-- RIGHT FORM -->
    <div class="auth-form">

        <h2>Create Account</h2>

        <input type="text" placeholder="Name">
        <input type="email" placeholder="Email">
        <input type="password" placeholder="Password">

        <button>Sign Up</button>

        <p style="margin-top:15px;">
            Already have account?
            <a href="#" style="color:#4da3ff;">Login</a>
        </p>

    </div>

</div>