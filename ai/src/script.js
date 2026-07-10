/*=========================================
        VITALNESS AI ASSISTANT
        PART 1A
=========================================*/

/*=============
    ELEMENTS
==============*/

const aiToggle = document.getElementById("aiToggle");
const aiContainer = document.getElementById("aiContainer");

const minimizeChat = document.getElementById("minimizeChat");
const clearChat = document.getElementById("clearChat");

const chatBody = document.getElementById("chatBody");

const sendBtn = document.getElementById("sendBtn");
const voiceBtn = document.getElementById("voiceBtn");

const userInput = document.getElementById("userInput");

const typingArea = document.getElementById("typingArea");

const suggestions = document.querySelector(".suggestions");

const suggestionBtns = document.querySelectorAll(".suggestion");


/*==========================
      DEMO RESPONSES
==========================*/

const replies = [

"🥗 Eat a balanced diet rich in fruits, vegetables and protein.",

"💧 Drink at least 2–3 litres of water every day.",

"🏃 Exercise for 30 minutes daily to stay fit.",

"😴 Sleep 7–8 hours every night for better recovery.",

"🧘 Yoga and meditation help reduce stress and improve focus.",

"❤️ Small healthy habits every day create long-term results.",

"🍎 Avoid sugary drinks and processed foods whenever possible.",

"🚶 Walk after meals to improve digestion."

];


/*==========================
        ESCAPE HTML
==========================*/

function escapeHTML(text){

    const div=document.createElement("div");

    div.innerText=text;

    return div.innerHTML;

}


/*==========================
        AUTO SCROLL
==========================*/

function scrollBottom(){

    chatBody.scrollTo({

        top:chatBody.scrollHeight,

        behavior:"smooth"

    });

}


/*==========================
      OPEN / CLOSE CHAT
==========================*/

aiToggle.addEventListener("click",()=>{

    aiContainer.classList.toggle("active");

    aiToggle.classList.toggle("active");

    if(aiContainer.classList.contains("active")){

        aiToggle.innerHTML='<i class="fa-solid fa-xmark"></i>';

    }

    else{

        aiToggle.innerHTML='<i class="fa-solid fa-robot"></i>';

    }

});


/*==========================
      MINIMIZE
==========================*/

minimizeChat.addEventListener("click",()=>{

    aiContainer.classList.remove("active");

    aiToggle.classList.remove("active");

    aiToggle.innerHTML='<i class="fa-solid fa-robot"></i>';

});


/*==========================
      ENTER KEY
==========================*/

userInput.addEventListener("keydown",(e)=>{

    if(e.key==="Enter"){

        e.preventDefault();

        sendMessage();

    }

});


/*==========================
      SEND BUTTON
==========================*/

sendBtn.addEventListener("click",sendMessage);


/*==========================
      SUGGESTIONS
==========================*/

suggestionBtns.forEach(btn=>{

    btn.addEventListener("click",()=>{

        userInput.value=btn.textContent.trim();

        sendMessage();

    });

});


/*==========================
      VOICE BUTTON
==========================*/

voiceBtn.addEventListener("click",()=>{

    alert("🎤 Voice Assistant Coming Soon");

});
/*=========================================
        VITALNESS AI ASSISTANT
        PART 1B
=========================================*/


/*==========================
      WELCOME MESSAGE
==========================*/

function loadWelcomeMessage(){

chatBody.innerHTML=`

<div class="message bot">

<div class="avatar">

<i class="fa-solid fa-heart-pulse"></i>

</div>

<div class="bubble">

<h3>👋 Hello!</h3>

<p>
I'm <strong>Vital AI</strong>,
your personal health assistant.
</p>

<p>I can help you with:</p>

<ul>

<li>🥗 Diet Plans</li>

<li>💪 Workout Plans</li>

<li>🧘 Yoga</li>

<li>😴 Sleep Tips</li>

<li>❤️ Healthy Lifestyle</li>

<li>🍎 Nutrition</li>

</ul>

</div>

</div>

`;

scrollBottom();

}


/*==========================
      USER MESSAGE
==========================*/

function addUserMessage(text){

chatBody.insertAdjacentHTML("beforeend",`

<div class="message user">

<div class="bubble">

${escapeHTML(text)}

<div class="message-time">

${new Date().toLocaleTimeString([],{

hour:"2-digit",

minute:"2-digit"

})}

</div>

</div>

</div>

`);

scrollBottom();

}


/*==========================
      BOT MESSAGE
==========================*/

function addBotMessage(text){

chatBody.insertAdjacentHTML("beforeend",`

<div class="message bot">

<div class="avatar">

<i class="fa-solid fa-heart-pulse"></i>

</div>

<div class="bubble">

${text}

<div class="message-time">

${new Date().toLocaleTimeString([],{

hour:"2-digit",

minute:"2-digit"

})}

</div>

</div>

</div>

`);

scrollBottom();

}


/*==========================
      TYPING
==========================*/

function showTyping(){

typingArea.classList.add("active");

scrollBottom();

}

function hideTyping(){

typingArea.classList.remove("active");

}


/*==========================
      SEND MESSAGE
==========================*/

function sendMessage(){

const text=userInput.value.trim();

if(text==="") return;

addUserMessage(text);

userInput.value="";

if(suggestions){

suggestions.style.display="none";

}

showTyping();

setTimeout(()=>{

hideTyping();

const reply=replies[Math.floor(Math.random()*replies.length)];

addBotMessage(reply);

},1200);

}


/*==========================
      CLEAR CHAT
==========================*/

clearChat.addEventListener("click",()=>{

const ok=confirm("Do you want to clear all chats?");

if(!ok) return;

loadWelcomeMessage();

if(suggestions){

suggestions.style.display="flex";

}

});


/*==========================
      INITIAL LOAD
==========================*/

window.addEventListener("load",()=>{

loadWelcomeMessage();

});
/*=========================================
        VITALNESS AI ASSISTANT
        PART 2A
=========================================*/


/*==========================
      SAVE CHAT
==========================*/

function saveChat(){

localStorage.setItem(

"vitalness-chat",

chatBody.innerHTML

);

}


/*==========================
      LOAD CHAT
==========================*/

function loadChat(){

const history=

localStorage.getItem(

"vitalness-chat"

);

if(history){

chatBody.innerHTML=history;

scrollBottom();

}

else{

loadWelcomeMessage();

}

}


/*==========================
      TYPE EFFECT
==========================*/

function typeMessage(text){

const wrapper=document.createElement("div");

wrapper.className="message bot";

wrapper.innerHTML=`

<div class="avatar">

<i class="fa-solid fa-heart-pulse"></i>

</div>

<div class="bubble">

<span class="typing-text"></span>

<div class="message-time">

${new Date().toLocaleTimeString([],{

hour:"2-digit",

minute:"2-digit"

})}

</div>

<div class="message-actions">

<button class="copy-btn">

<i class="fa-regular fa-copy"></i>

</button>

<button class="like-btn">

👍

</button>

<button class="dislike-btn">

👎

</button>

</div>

</div>

`;

chatBody.appendChild(wrapper);

const target=

wrapper.querySelector(".typing-text");

let i=0;

const timer=setInterval(()=>{

target.innerHTML+=text.charAt(i);

scrollBottom();

i++;

if(i>=text.length){

clearInterval(timer);

saveChat();

}

},18);

}


/*==========================
      COPY
==========================*/

chatBody.addEventListener("click",(e)=>{

const btn=e.target.closest(".copy-btn");

if(!btn) return;

const bubble=

btn.closest(".bubble");

const txt=

bubble.querySelector(".typing-text")?.innerText ||

bubble.innerText;

navigator.clipboard.writeText(txt);

btn.innerHTML="✅";

setTimeout(()=>{

btn.innerHTML='<i class="fa-regular fa-copy"></i>';

},1200);

});


/*==========================
      LIKE
==========================*/

chatBody.addEventListener("click",(e)=>{

const btn=e.target.closest(".like-btn");

if(!btn) return;

btn.innerHTML="💚";

});


/*==========================
      DISLIKE
==========================*/

chatBody.addEventListener("click",(e)=>{

const btn=e.target.closest(".dislike-btn");

if(!btn) return;

btn.innerHTML="😔";

});