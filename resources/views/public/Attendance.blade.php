<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>اعلام حضور و خروج کارکنان</title>
    <script src="https://cdn.tailwindcss.com"></script>


</head>
<body class="bg-gradient-to-r from-teal-400 via-blue-500 to-indigo-600 min-h-screen flex items-center justify-center">

<div class="container mx-auto px-6 py-12 flex justify-between items-center w-full">
    <!-- باکس‌ها کنار هم -->
    <div class="flex gap-8 w-3/4">

        <!-- باکس اعلام حضور -->
        <div class="bg-white shadow-2xl rounded-lg p-8 w-96 transform transition-transform hover:scale-105 hover:shadow-2xl hover:shadow-blue-500/50 duration-300 ease-in-out">
            <h2 class="text-2xl font-semibold text-center text-gray-800 mb-6">اعلام حضور</h2>

            <form action="#">
                <div class="mb-6">
                    <label for="attendance-time" class="block text-lg text-gray-700">ساعت حضور</label>
                    <input type="time" id="attendance-time" name="attendance-time" value="{{ now()->format('H:i') }}" class="w-full px-4 py-3 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300 shadow-sm">
                </div>

                <div class="mb-6">
                    <label for="attendance-comment" class="block text-lg text-gray-700">توضیحات اضافی</label>
                    <textarea id="attendance-comment" name="attendance-comment" rows="4" class="w-full px-4 py-3 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300 shadow-sm" placeholder="در صورت نیاز توضیحات اضافی را وارد کنید"></textarea>
                </div>

                <button type="submit" class="w-full bg-blue-600 text-white py-3 rounded-md hover:bg-blue-700 transition duration-300 ease-in-out transform hover:scale-105 shadow-md">ثبت حضور</button>
            </form>
        </div>

        <!-- باکس اعلام خروج -->
        <div class="bg-white shadow-2xl rounded-lg p-8 w-96 transform transition-transform hover:scale-105 hover:shadow-2xl hover:shadow-red-500/50 duration-300 ease-in-out">
            <h2 class="text-2xl font-semibold text-center text-gray-800 mb-6">اعلام خروج</h2>

            <form action="#">
                <div class="mb-6">
                    <label for="departure-time" class="block text-lg text-gray-700">ساعت خروج</label>
                    <input type="time" id="departure-time" name="departure-time" value="{{ now()->format('H:i') }}" class="w-full px-4 py-3 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500 transition duration-300 shadow-sm">
                </div>

                <div class="mb-6">
                    <label for="departure-comment" class="block text-lg text-gray-700">توضیحات اضافی</label>
                    <textarea id="departure-comment" name="departure-comment" rows="4" class="w-full px-4 py-3 mt-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-red-500 transition duration-300 shadow-sm" placeholder="در صورت نیاز توضیحات اضافی را وارد کنید"></textarea>
                </div>

                <button type="submit" class="w-full bg-red-600 text-white py-3 rounded-md hover:bg-red-700 transition duration-300 ease-in-out transform hover:scale-105 shadow-md">ثبت خروج</button>
            </form>
        </div>

    </div>
</div>

</body>
</html>
