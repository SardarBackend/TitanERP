<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ارسال رزومه</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <style>
        body {
            font-family: 'Tahoma', sans-serif;
            overflow: hidden;
            background: linear-gradient(135deg, #1e3c72, #2a5298, #4e4376);
            animation: bgAnimation 10s infinite alternate;
        }
        @keyframes bgAnimation {
            0% { background-position: left; }
            100% { background-position: right; }
        }
        #formContainer {
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
        }
        input[type="tel"] {
            direction: ltr;
            text-align: right;
        }
    </style>
</head>
<body class="flex items-center justify-center h-screen">
    <div id="formContainer" class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md opacity-0 translate-y-10">
        <h2 class="text-3xl font-bold text-center mb-6 text-gray-800 animate-pulse">📄 ارسال رزومه</h2>
        <form action="" method="POST" id="resumeForm" class="space-y-4">
            <input type="text" placeholder="نام شرکت" class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-500 transition-all duration-300 transform hover:scale-105" required>
            <input type="tel" placeholder="شماره تماس" class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-500 transition-all duration-300 transform hover:scale-105" required>
            <textarea placeholder="پیام شما" class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-500 transition-all duration-300 transform hover:scale-105"></textarea>
            <input type="file" id="resumeFile" class="w-full p-3 border rounded-lg focus:ring-2 focus:ring-blue-500 transition-all duration-300 transform hover:scale-105" accept=".pdf,.doc,.docx" required>
            <button type="submit" class="w-full bg-blue-600 text-white p-3 rounded-lg hover:bg-blue-700 transition-all duration-300 transform hover:scale-110">🚀 ارسال</button>
        </form>
        <p id="successMessage" class="text-green-600 text-center mt-4 hidden">✅ رزومه شما با موفقیت ارسال شد!</p>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            anime({
                targets: "#formContainer",
                opacity: [0, 1],
                translateY: [50, 0],
                duration: 1500,
                easing: "easeOutElastic"
            });
        });

        document.getElementById('resumeForm').addEventListener('submit', function(event) {
            event.preventDefault();
            document.getElementById('successMessage').classList.remove('hidden');
            anime({
                targets: "#successMessage",
                opacity: [0, 1],
                scale: [0.5, 1.2],
                duration: 700,
                easing: "easeOutBounce"
            });
            setTimeout(() => {
                anime({
                    targets: "#successMessage",
                    opacity: [1, 0],
                    scale: [1.2, 0.8],
                    duration: 500,
                    easing: "easeInExpo"
                });
                document.getElementById('resumeForm').reset();
            }, 3000);
        });
    </script>
</body>
</html>
