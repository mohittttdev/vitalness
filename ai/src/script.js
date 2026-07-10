/*=========================================
        VITALNESS AI ASSISTANT
        PART 1
=========================================*/

const aiToggle = document.getElementById("aiToggle");
const aiContainer = document.getElementById("aiContainer");

const minimizeChat = document.getElementById("minimizeChat");
const clearChat = document.getElementById("clearChat");

const chatBody = document.getElementById("chatBody");

const sendBtn = document.getElementById("sendBtn");
const userInput = document.getElementById("userInput");

const typingArea = document.getElementById("typingArea");

const suggestions = document.querySelectorAll(".suggestion");


/*=========================================
        OPEN / CLOSE CHAT
=========================================*/

aiToggle.addEventListener("click", () => {

    aiContainer.classList.toggle("hidden");
    aiContainer.classList.toggle("show");

    aiToggle.classList.toggle("active");

});


/*=========================================
        MINIMIZE
=========================================*/

minimizeChat.addEventListener("click", () => {

    aiContainer.classList.remove("show");
    aiContainer.classList.add("hidden");

    aiToggle.classList.remove("active");

});


/*=========================================
        ENTER KEY
=========================================*/

userInput.addEventListener("keypress", function(e){

    if(e.key==="Enter"){

        sendMessage();

    }

});


/*=========================================
        SEND BUTTON
=========================================*/

sendBtn.addEventListener("click", sendMessage);


/*=========================================
        SUGGESTIONS
=========================================*/

suggestions.forEach(btn=>{

    btn.addEventListener("click",()=>{

        userInput.value=btn.innerText;

        sendMessage();

    });

});


/*=========================================
        SEND MESSAGE
=========================================*/

function sendMessage(){

    const text=userInput.value.trim();

    if(text==="") return;


    addUserMessage(text);

    userInput.value="";

    showTyping();


    setTimeout(()=>{

        hideTyping();

        addBotMessage("AI integration coming in next step... 🤖");

    },1500);

}


/*=========================================
        USER MESSAGE
=========================================*/

function addUserMessage(text){

    chatBody.innerHTML+=`

    <div class="message user">

        <div class="bubble">

            ${text}

        </div>

    </div>

    `;

    scrollBottom();

}


/*=========================================
        BOT MESSAGE
=========================================*/

function addBotMessage(text){

    chatBody.innerHTML+=`

    <div class="message bot">

        <div class="avatar">

            <i class="fa-solid fa-heart-pulse"></i>

        </div>

        <div class="bubble">

            ${text}

        </div>

    </div>

    `;

    scrollBottom();

}


/*=========================================
        TYPING
=========================================*/

function showTyping(){

    typingArea.classList.add("active");

    scrollBottom();

}

function hideTyping(){

    typingArea.classList.remove("active");

}


/*=========================================
        SCROLL
=========================================*/

function scrollBottom(){

    chatBody.scrollTop=chatBody.scrollHeight;

}


/*=========================================
        CLEAR CHAT
=========================================*/

clearChat.addEventListener("click",()=>{

    chatBody.innerHTML=`

    <div class="message bot">

        <div class="avatar">

            <i class="fa-solid fa-heart-pulse"></i>

        </div>

        <div class="bubble">

            👋 Chat cleared successfully.

        </div>

    </div>

    `;

});