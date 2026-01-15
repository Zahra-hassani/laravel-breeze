<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تایید ایمیل</title>
    <style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        p{
            font-weight: bold;
            padding: 12px 5px;
        }
        a{
            border-radius: 8px;
            font-weight: bold;
            text-align: center;
            background-color: green;
            color: white;
            padding: 12px 20px;
            text-decoration: none;
        }
        span{
            display: block;
        }
    </style>
</head>
<body>
    <div>
        <p>جهت تایید ایمیل آدرس خود روی کلید زیر کلیک کنید.</p>
        <a href="{{ $url }}">تایید ایمیل آدرس</a>
        <p>اگر شما نبودید، این پیام را نادیده بگیرید.</p>
        <span>با کمال احترام</span>
        <span>آکادمی برنامه نویسی شریفی</span>
    </div>
</body>
</html>