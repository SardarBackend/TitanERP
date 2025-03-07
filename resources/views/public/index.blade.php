<!DOCTYPE html>
<html lang="fa">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>چت آنلاین - سبک تلگرام</title>
  <link rel="stylesheet" href="{{ asset('./chat.css')}}">
</head>
<body>
    @php
    use App\Models\User;
    @endphp
  <div class="main-container">
    <!-- سایدبار -->
    <div class="sidebar">

        <div class="tabs">
            <div class="tab active" onclick="showChats('groups')">گروه‌ها</div>
            <div class="tab" onclick="showChats('conversations')">گفتگوها</div>
        </div>

        <ul id="group-list" class="chat-list">
            @foreach ( $Groups as $Group )
            <li class="chat-item">
                <img src="{{$Group->image}}" alt="تصویر گروه" class="chat-image">
                <div class="chat-details">
                    <h3>{{$Group->name}}</h3>
                    <p>آخرین پیام...</p>
                </div>
            </li>
            @endforeach
        </ul>

        <ul id="conversation-list" class="chat-list" style="display: none;">

            @foreach ( $conversationUser as $Conversation )
            @php
            $user = User::find($Conversation->user1_id == auth()->id() ? $Conversation->user2_id : $Conversation->user1_id);
            @endphp
            <a href="/chat-{{$conversation->id}}">
                <li class="chat-item">
                    <img src="{{$user->image}}" alt="تصویر کاربر" class="chat-image">
                    <div class="chat-details">
                        <h3></h3>
                        <p>{{$user->name}}</p>
                    </div>
                </li>
            </a>
            @endforeach


            {{-- <li class="chat-item">
                <img src="https://via.placeholder.com/40" alt="تصویر کاربر" class="chat-image">
                <div class="chat-details">
                    <h3>زهرا</h3>
                    <p>وقت داری صحبت کنیم؟</p>
                </div>
            </li> --}}


        </ul>

    </div>

    <!-- بخش چت -->
    <div class="chat-container">
      <!-- هدر چت -->
      <div class="chat-header">
        <div class="group-info">
          <img src="./images.png" alt="تصویر گروه" class="group-image">
          <h2>{{User::find($receiverId)->name}}</h2>
            </div >

            <span class="status">آنلاین</span>


        </div>

      <!-- بدنه چت -->
      <div class="chat-body">
        <!-- پیام‌های نمونه -->
        @foreach ($Messages as  $Message)
        @if ($Message->sender_id != auth()->id())
        <div class="message user">
            <div class="message-content">
                <p>{{$Message->content}}</p>
                <span class="time">{{$Message->updated_at}}</span>
            </div>
            <img src="./images.png" alt="کاربر" class="user-image">
        </div>

        @else

        <div class="message other">
          <img src="./images.png" alt="کاربر" class="user-image">
          <div class="message-content">
            <p>{{$Message->content}}</p>
            <span class="time">{{ jdate($Message->updated_at)->format('h:i A');}}</span>
          </div>
        </div>

        @endif


        @endforeach
      </div>

      <!-- فوتر چت -->

      <div class="chat-footer">
          <input id="conversation_id" type="text" value="{{$conversation->id}}" style="display: none" >
          <input id="receiver_id" type="text" value="{{$receiverId}}" style="display: none" >
          <input id="sender_id" type="text" value="{{auth()->id()}}" style="display: none" >
          <input id="message" type="text" placeholder="پیام خود را بنویسید..." class="message-input">
          <button onclick="sendMessage()"  class="send-btn">ارسال</button>
        </div>
    </div>
  </div>
  <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
  <script  src="./js.js"></script>
  <script>
      async function sendMessage() {
          let content = document.querySelector('#message').value;
          let receiverId = document.querySelector('#receiver_id').value;
          let senderId = document.querySelector('#sender_id').value;
          let conversationId = document.querySelector('#conversation_id').value;
          let csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute("content");

          try {
              let response = await fetch('/chat-post', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken,  // ارسال CSRF در هدر
            },
            body: JSON.stringify({
                conversation_id: conversationId,
                receiver_id: receiverId,
                sender_id: senderId,  // اضافه کردن sender_id
                content: content
            })
        });

        // بررسی وضعیت پاسخ
        if (!response.ok) {
            throw new Error(`HTTP error! Status: ${response.status}`);
        }

        let data = await response.json(); // دریافت JSON

        if (data.status === "success") {
            console.log("پیام با موفقیت ارسال شد!");
        } else {
            console.error("خطا در ارسال پیام:", data);
        }

    } catch (error) {
        console.error("مشکل در ارتباط با سرور:", error);
    }
}


</script>

<!-- مقداردهی conversationId و userId در جاوااسکریپت -->
<script>
    const conversationId = @json($conversation->id);
    const userId = @json(auth()->id());
</script>
<script>

    const div = document.querySelector('.chat-body');
    // اتصال به Pusher
    var pusher = new Pusher('fshhedr9icy2ktqx1pt4', {
        wsHost: 'localhost', // یا آدرس سرور
        wsPort: 8080,
        wssPort: 8080,
        forceTLS: false,
        encrypted: false,
        disableStats: true,
        authEndpoint: "/broadcasting/auth", // مسیر برای احراز هویت
    });


    // ایجاد کانال Presence
    const channel = pusher.subscribe('presence-chat.{{$conversation->id}}');



    function isUserOnline(userId) {
        const member = channel.members.get(member => member.id === userId);
        return member !== undefined;
    }


    // گوش دادن به رویداد "پیام جدید"
    channel.bind('MessageSent', function (data) {
        const messageDiv = document.createElement('div');
        messageDiv.classList.add('message');
        console.log(`✅ `);
        if (data.sender_id == {{auth()->id()}}) {
            messageDiv.classList.add('other');
            messageDiv.innerHTML = `
                <img src="./images.png" alt="کاربر" class="user-image">
                <div class="message-content">
                    <p>${data.content}</p>
                    <span class="time">${data.created_at}</span>
                </div>
            `;
        } else {
            messageDiv.classList.add('user');
            messageDiv.innerHTML = `
                <div class="message-content">
                    <p>${data.content}</p>
                    <span class="time">${data.created_at}</span>
                </div>
                <img src="/storage/${data.profile_image}" alt="کاربر" class="user-image">
            `;
        }

        div.appendChild(messageDiv);
    });

    const elem = document.querySelector('.status')

    channel.bind('pusher:member_added', function (member) {
        elem.style.display = 'block'
        // console.log(`✅ کاربر ${member.info.name} آنلاین شد.`);
        // اینجا می‌توانید وضعیت آنلاین کاربر را در UI نمایش دهید.
    });


    channel.bind('pusher:member_removed', function (member) {
        elem.style.display = 'none'
        // console.log(`❌ کاربر ${member.info.name} آفلاین شد.`);
        // اینجا می‌توانید وضعیت آفلاین شدن کاربر را در UI نمایش دهید.
    });

</script>





</body>
</html>

{{-- <script>
    const div = document.querySelector('.chat-body')
    // اتصال به Pusher
    var pusher = new Pusher('fshhedr9icy2ktqx1pt4', {
        wsHost: 'localhost', // یا آدرس سرور
        wsPort: 8080,
        wssPort: 8080,
        forceTLS: false,
        encrypted: false,
        disableStats: true,
        authEndpoint: "/broadcasting/auth", // این مسیر برای احراز هویت مهم است
    });


    const channel = pusher.subscribe('chat.{{$conversation->id}}');

    // گوش دادن به یک رویداد
    channel.bind('MessageSent', function (data) {
        // console.log(data)
        if(data.sender_id == {{auth()->id()}} ){
            div.innerHTML += '<div class="message other"><img src="./images.png" alt="کاربر" class="user-image"><div class="message-content"><p>'+ data.content +'</p><span class="time">' +  data.created_at + '</span></div></div>'
        }else{
            div.innerHTML += '<div class="message user"><div class="message-content"><p>'+ data.content +'</p><span class="time">' +  data.created_at + '</span></div><img src=/storage/'+ data.created_at +' alt="کاربر" class="user-image"></div>'
        }
        // مدیریت داده‌های دریافت‌شده
    });
    // const channel = pusher.subscribe('chat');

    // handleEmojiClickedEvent(data);
    // function handleEmojiClickedEvent(data) {
    //     alert(`Emoji clicked: ${data.message}`);
    // }
</script> --}}
