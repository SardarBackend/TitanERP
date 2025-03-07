<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فرم ثبت درخواست پرسنلی</title>
    <link href="https://fonts.googleapis.com/css2?family=IRANSans:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'IRANSans', sans-serif;
            background: linear-gradient(135deg, #007bff, #6610f2);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
        }
        .container {
            background: white;
            padding: 50px;
            border-radius: 20px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
            width: 100%;
            max-width: 600px;
            text-align: center;
            position: relative;
            overflow: hidden;
            animation: fadeIn 1s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: scale(0.9); }
            to { opacity: 1; transform: scale(1); }
        }
        .container::before, .container::after {
            content: '';
            position: absolute;
            width: 120px;
            height: 120px;
            background: rgba(0, 123, 255, 0.2);
            border-radius: 50%;
            z-index: -1;
            animation: float 4s infinite alternate ease-in-out;
        }
        @keyframes float {
            from { transform: translateY(-10px); }
            to { transform: translateY(10px); }
        }
        .container::before { top: -60px; left: -60px; }
        .container::after { bottom: -60px; right: -60px; }
        h2 {
            color: #222;
            margin-bottom: 25px;
            font-size: 26px;
            font-weight: 700;
        }
        label {
            display: block;
            text-align: right;
            margin: 14px 0 6px;
            font-weight: bold;
            color: #333;
            font-size: 15px;
        }
        input, select, textarea {
            width: 100%;
            padding: 14px;
            margin-bottom: 20px;
            border: 2px solid #ccc;
            border-radius: 10px;
            font-size: 15px;
            transition: 0.3s;
            background: #f9f9f9;
        }
        input:focus, select:focus, textarea:focus {
            border-color: #007bff;
            outline: none;
            background: #fff;
            box-shadow: 0 0 8px rgba(0, 123, 255, 0.6);
        }
        button {
            background: linear-gradient(90deg, #007bff, #6610f2);
            color: white;
            border: none;
            padding: 16px;
            width: 100%;
            border-radius: 10px;
            cursor: pointer;
            font-size: 18px;
            font-weight: bold;
            transition: 0.3s;
            box-shadow: 0 7px 20px rgba(0, 0, 0, 0.3);
            position: relative;
            overflow: hidden;
        }
        button::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.2);
            transition: 0.4s;
        }
        button:hover::after {
            left: 100%;
        }
        button:hover {
            background: linear-gradient(90deg, #0056b3, #520dc2);
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>فرم ثبت درخواست پرسنلی</h2>
        <form id="request-form">
            <label for="request-title">عنوان درخواست:</label>
            <input type="text" id="request-title" name="request-title" required>

            <label for="type">نوع درخواست:</label>
            <select id="type" name="type">
                <option value="مرخصی">مرخصی</option>
                <option value="ماموریت">ماموریت</option>
                <option value="سایر">سایر</option>
            </select>

            <label for="details">توضیحات:</label>
            <textarea id="details" name="details" rows="6" required></textarea>

            <button type="submit">ارسال درخواست</button>
        </form>
    </div>
    <script>
        document.getElementById('request-form').addEventListener('submit', function(event) {
            event.preventDefault();
            let button = document.querySelector('button');
            button.innerHTML = 'در حال ارسال...';
            button.style.opacity = '0.7';
            setTimeout(() => {
                button.innerHTML = 'ارسال شد ✔';
                button.style.background = 'green';
                button.style.opacity = '1';
            }, 2000);
        });
    </script>
</body>
</html>
