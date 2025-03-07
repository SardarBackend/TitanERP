// document.addEventListener('DOMContentLoaded', () => {
//     const input = document.querySelector('.message-input');
//     const sendBtn = document.querySelector('.send-btn');
//     const chatBody = document.querySelector('.chat-body');

//     sendBtn.addEventListener('click', sendMessage);
//     input.addEventListener('keydown', (e) => {
//       if (e.key === 'Enter') {
//         sendMessage();
//       }
//     });

//     function sendMessage() {
//       const messageText = input.value.trim();
//       if (!messageText) return;

//       const messageElement = document.createElement('div');
//       messageElement.classList.add('message', 'user');

//       messageElement.innerHTML = `
//         <div class="message-content">
//           <p>${messageText}</p>
//           <span class="time">${new Date().toLocaleTimeString([], { hour: '2-digit', minute: '2-digit' })}</span>
//         </div>
//         <img src="https://via.placeholder.com/40" alt="کاربر" class="user-image">
//       `;

//       chatBody.appendChild(messageElement);
//       chatBody.scrollTop = chatBody.scrollHeight;
//       input.value = '';
//     }
//   });




function showChats(type) {
    let groupList = document.getElementById("group-list");
    let conversationList = document.getElementById("conversation-list");
    let tabs = document.querySelectorAll(".tab");

    if (type === "groups") {
        groupList.style.display = "block";
        conversationList.style.display = "none";
    } else {
        groupList.style.display = "none";
        conversationList.style.display = "block";
    }

    tabs.forEach(tab => tab.classList.remove("active"));
    document.querySelector(`.tab[onclick="showChats('${type}')"]`).classList.add("active");
}
