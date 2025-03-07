<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فرم ثبت شرکت - ERP</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .fade-in { animation: fadeIn 1s ease-in-out; }
        .glow-border { box-shadow: 0px 0px 15px rgba(128, 90, 213, 0.5); }
    </style>
</head>
<body class="bg-gradient-to-r from-indigo-500 to-purple-700 flex items-center justify-center min-h-screen">
<div class="bg-white shadow-2xl rounded-2xl p-8 w-full max-w-2xl fade-in">
    <h2 class="text-3xl font-bold text-gray-800 text-center mb-6">ثبت شرکت در TitanERP </h2>
    <form action="#" method="POST" enctype="multipart/form-data" class="space-y-6">
        <div>
            <label class="block text-gray-700 font-medium mb-1">نام شرکت</label>
            <input type="text" name="company_name" class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-4 focus:ring-purple-500 glow-border transition duration-300">
        </div>
        <div>
            <label class="block text-gray-700 font-medium mb-1">ایمیل</label>
            <input type="email" name="email" class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-4 focus:ring-purple-500 glow-border transition duration-300">
        </div>
        <div>
            <label class="block text-gray-700 font-medium mb-1">شماره تماس</label>
            <input type="tel" name="phone" class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-4 focus:ring-purple-500 glow-border transition duration-300">
        </div>
        <div>
            <label class="block text-gray-700 font-medium mb-1">آدرس</label>
            <textarea name="address" rows="3" class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-4 focus:ring-purple-500 glow-border transition duration-300"></textarea>
        </div>
        <div>
            <label class="block text-gray-700 font-medium mb-1">نوع شرکت</label>
            <select name="company_type" class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-4 focus:ring-purple-500 glow-border transition duration-300">
                <option value="private">خصوصی</option>
                <option value="public">دولتی</option>
                <option value="startup">استارتاپ</option>
            </select>
        </div>
        <div>
            <label class="block text-gray-700 font-medium mb-1">سال تأسیس</label>
            <input type="number" name="established_year" class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-4 focus:ring-purple-500 glow-border transition duration-300" placeholder="مثال: 1402">
        </div>
        <div>
            <label class="block text-gray-700 font-medium mb-1">وبسایت شرکت</label>
            <input type="url" name="website" class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-4 focus:ring-purple-500 glow-border transition duration-300" placeholder="https://example.com">
        </div>
        <div>
            <label class="block text-gray-700 font-medium mb-1">توضیحات اضافی</label>
            <textarea name="description" rows="4" class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-4 focus:ring-purple-500 glow-border transition duration-300" placeholder="توضیحات بیشتر در مورد شرکت..."></textarea>
        </div>
        <div>
            <label class="block text-gray-700 font-medium mb-1">آپلود لوگوی شرکت</label>
            <input type="file" name="company_logo" accept="image/*" class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-4 focus:ring-purple-500 glow-border transition duration-300">
        </div>
        <div class="flex items-center space-x-2">
            <input type="checkbox" id="terms" name="terms" class="w-5 h-5 text-purple-600 border rounded focus:ring-4 focus:ring-purple-500">
            <label for="terms" class="text-gary-700 ">  تمام  <a class="text-blue-700 " href="/asdasd">قوانین</a> را قبول دارم</label>
        </div>
        <div class="text-center">
            <button type="submit" class="bg-gradient-to-r from-purple-500 to-blue-600 text-white px-8 py-3 rounded-lg hover:scale-110 transform transition duration-300 shadow-lg">ثبت شرکت</button>
        </div>
    </form>
</div>
</body>
</html>

