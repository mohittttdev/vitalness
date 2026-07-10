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
/*=========================================
        VITALNESS AI ASSISTANT
        PART 2B-1
=========================================*/


/*==========================
      ONLINE STATUS
==========================*/

const statusDot = document.querySelector(".dot");
const statusText = document.querySelector(".status");

function updateStatus(){

    if(navigator.onLine){

        statusDot.style.background="#22c55e";

        statusText.lastChild.textContent=" Online";

    }else{

        statusDot.style.background="#ef4444";

        statusText.lastChild.textContent=" Offline";

    }

}

window.addEventListener("online",updateStatus);
window.addEventListener("offline",updateStatus);

updateStatus();


/*==========================
      SPEECH RECOGNITION
==========================*/

const SpeechRecognition=
window.SpeechRecognition||
window.webkitSpeechRecognition;

if(SpeechRecognition){

    const recognition=new SpeechRecognition();

    recognition.lang="en-US";

    recognition.continuous=false;

    recognition.interimResults=false;

    voiceBtn.addEventListener("click",()=>{

        recognition.start();

        voiceBtn.innerHTML='<i class="fa-solid fa-microphone-lines"></i>';

    });

    recognition.onresult=(e)=>{

        const speech=e.results[0][0].transcript;

        userInput.value=speech;

        sendMessage();

    };

    recognition.onend=()=>{

        voiceBtn.innerHTML='<i class="fa-solid fa-microphone"></i>';

    };

    recognition.onerror=()=>{

        voiceBtn.innerHTML='<i class="fa-solid fa-microphone"></i>';

    };

}else{

    voiceBtn.disabled=true;

    voiceBtn.title="Speech Recognition Not Supported";

}


/*==========================
      AI VOICE
==========================*/

function speak(text){

    if(!("speechSynthesis" in window)) return;

    window.speechSynthesis.cancel();

    const utterance=new SpeechSynthesisUtterance(text);

    utterance.lang="en-US";

    utterance.rate=1;

    utterance.pitch=1;

    speechSynthesis.speak(utterance);

}


/*==========================
      SMART DEMO REPLY
==========================*/

function getReply(message){

    message=message.toLowerCase();

    if(message.includes("diet")){

        return "🥗 A healthy diet should include vegetables, fruits, whole grains and lean protein.";

    }

    if(message.includes("workout")){

        return "💪 Start with 20–30 minutes of exercise daily. Combine cardio and strength training.";

    }

    if(message.includes("weight")){

        return "⚖️ Weight loss works best with a calorie deficit, regular exercise and proper sleep.";

    }

    if(message.includes("sleep")){

        return "😴 Aim for 7–8 hours of quality sleep every night.";

    }

    if(message.includes("water")){

        return "💧 Drink around 2–3 litres of water each day depending on your activity level.";

    }

    if(message.includes("protein")){

        return "🥚 Include eggs, milk, paneer, tofu, lentils or chicken for good protein intake.";

    }

    if(message.includes("hello")||
       message.includes("hi")){

        return "👋 Hello! How can I help you with your health today?";

    }

    return replies[Math.floor(Math.random()*replies.length)];

}
/*=========================================
        VITALNESS AI ASSISTANT
        PART 2B-2
=========================================*/


/*==========================
      AUTO FOCUS
==========================*/

aiToggle.addEventListener("click",()=>{

    setTimeout(()=>{

        if(aiContainer.classList.contains("active")){

            userInput.focus();

        }

    },300);

});


/*==========================
      ESC SHORTCUT
==========================*/

document.addEventListener("keydown",(e)=>{

    if(e.key==="Escape"){

        aiContainer.classList.remove("active");

        aiToggle.classList.remove("active");

        aiToggle.innerHTML='<i class="fa-solid fa-robot"></i>';

    }

});


/*==========================
      CTRL + /
==========================*/

document.addEventListener("keydown",(e)=>{

    if(e.ctrlKey && e.key==="/"){

        e.preventDefault();

        aiContainer.classList.add("active");

        aiToggle.classList.add("active");

        aiToggle.innerHTML='<i class="fa-solid fa-xmark"></i>';

        userInput.focus();

    }

});


/*==========================
      INPUT ANIMATION
==========================*/

userInput.addEventListener("input",()=>{

    if(userInput.value.length>0){

        sendBtn.style.transform="scale(1.08)";

        sendBtn.style.opacity="1";

    }

    else{

        sendBtn.style.transform="scale(1)";

        sendBtn.style.opacity=".85";

    }

});


/*==========================
      BUTTON RIPPLE
==========================*/

document.querySelectorAll("button").forEach(button=>{

button.addEventListener("click",function(e){

const ripple=document.createElement("span");

const rect=this.getBoundingClientRect();

const size=Math.max(rect.width,rect.height);

ripple.style.width=size+"px";

ripple.style.height=size+"px";

ripple.style.left=(e.clientX-rect.left-size/2)+"px";

ripple.style.top=(e.clientY-rect.top-size/2)+"px";

ripple.className="ripple";

this.appendChild(ripple);

setTimeout(()=>{

ripple.remove();

},600);

});

});


/*==========================
      AUTO SAVE
==========================*/

const observer=new MutationObserver(()=>{

saveChat();

});

observer.observe(chatBody,{

childList:true,

subtree:true

});


/*==========================
      INPUT LIMIT
==========================*/

const MAX_LENGTH=500;

userInput.addEventListener("input",()=>{

if(userInput.value.length>MAX_LENGTH){

userInput.value=userInput.value.substring(0,MAX_LENGTH);

}

});


/*==========================
      GREETING
==========================*/

setTimeout(()=>{

if(chatBody.children.length<=1){

typeMessage(

"😊 Welcome to VitalNess AI. Ask me anything about fitness, nutrition, workouts or healthy living."

);

}

},1500);


/*==========================
      RANDOM HEALTH TIP
==========================*/

const tips=[

"💧 Stay hydrated throughout the day.",

"🥗 Eat colorful vegetables daily.",

"🚶 Walk 8,000–10,000 steps daily.",

"😴 Sleep is as important as exercise.",

"🧘 Take 5 minutes to meditate every day."

];

setInterval(()=>{

if(aiContainer.classList.contains("active")){

console.log(

tips[Math.floor(Math.random()*tips.length)]

);

}

},120000);


/*==========================
      MOBILE FIX
==========================*/

window.addEventListener("resize",()=>{

scrollBottom();

});


/*==========================
      PAGE VISIBILITY
==========================*/

document.addEventListener("visibilitychange",()=>{

if(document.hidden){

speechSynthesis.cancel();

}

});


/*==========================
      END
==========================*/

console.log("✅ VitalNess AI Frontend Loaded Successfully");