<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فرم ثبت شکایت</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <style>
        body {
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            font-family: 'Arial', sans-serif;
        }
        .card {
            background: rgba(255, 255, 255, 0.2);
            border-radius: 15px;
            backdrop-filter: blur(10px);
            padding: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }
        .btn-primary {
            background: #ff4081;
            border: none;
            transition: all 0.3s;
        }
        .btn-primary:hover {
            background: #e60073;
            transform: scale(1.05);
        }
        .form-control {
            background: rgba(255, 255, 255, 0.9);
            border: none;
            color: black;
            border-radius: 8px;
            padding: 10px;
        }
        .form-control::placeholder {
            color: rgba(0, 0, 0, 0.6);
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg animate__animated animate__fadeIn">
                    <h2 class="text-center mb-4">فرم ثبت شکایت</h2>
                    <form action="" method="POST" id="complaintForm">
                        @csrf
                        <div class="mb-3">
                            <input type="hidden" value="{{auth()->id()}}" name="user_id">
                            <label for="name" class="form-label">نام شرکت :</label>
                            <input type="text" name="business_id" class="form-control" id="name" required placeholder="نام خود را وارد کنید">
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">عنوان شکایت:</label>
                            <input type="text" name="subject" class="form-control" id="subject" required placeholder="عنوان را وارد کنید">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">متن شکایت:</label>
                            <textarea name="content" class="form-control" id="message" rows="5" required placeholder="متن شکایت خود را بنویسید"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">ارسال شکایت</button>
                    </form>
                    <p id="responseMessage" class="text-success text-center mt-3 d-none animate__animated animate__fadeInUp">شکایت شما با موفقیت ارسال شد.</p>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
