<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سیستم مدریت حقوق و دستمزد</title>

    <!-- External CSS -->
    <link rel="stylesheet" href="style.css">
    @vite('resources/css/app.css');
</head>
<body>


<!-- Navbar -->
<nav class="navbar">
    <div class="logo">Payroll System</div>

    <ul class="nav-links">
        <li><a href="{{ url('/index') }}">خانه</a></li>
        <li><a href="{{ url('/employees') }}">کارمندان</a></li>
        <li><a href="{{ url('/attendance') }}">حضور و غیاب</a></li>
        <li><a href="{{ url('/payroll') }}">حقوق و دستمزد</a></li>
        <li><a href="{{ url('/payslips') }}">فیش معاش</a></li>
        <li><a href="{{ url('/reports') }}">گزارشات</a></li>
    </ul>
</nav>



<!-- Navbar
<nav class="navbar">
    <div class="logo">Payroll System</div>

    <ul class="nav-links">
        <li><a href="index.html">خانه</a></li>
        <li><a href="employees.html">کارمندان</a></li>
        <li><a href="attendence.html">حضور و غیاب</a></li>
        <li><a href="payroll.html">حقوق و دستمزد</a></li>
        <li><a href="payslip.html">فیش معاش</a></li>
        <li><a href="reports.html">گزارشات</a></li>
    </ul>
</nav> -->

<!--  Hero Section  -->
<header class="hero">
    <div class="hero-content">
        <h1>سیستم مدیریت حقوق و دستمزد</h1>
        <p>
            یک سیستم کامل برای مدیریت کارمندان، حضور و غیر حاضری معاش و گزارشات
            به صورت آسان و حرفه‌ای
        </p>

        <div class="buttons">
            <button>دانلود سیستم</button>
            <button>آپلود معلومات</button>
        </div>
    </div>

    <div class="hero-image">
         <img src="images/hero.jpg" alt="screen1">
    </div>
</header>

<!--  Features Section  -->
<section class="features">
    <h2>ویژگی‌های سیستم</h2>

    <div class="feature-boxes">
        <div class="box">
            <h3>مدیریت کارمندان</h3>
            <p>ثبت و مدیریت کامل اطلاعات کارمندان</p>
        </div>

        <div class="box">
            <h3>حضور و غیاب</h3>
            <p>ثبت دقیق ورود و خروج کارمندان</p>
        </div>

        <div class="box">
            <h3>محاسبه معاش</h3>
            <p>محاسبه خودکار معاش و اضافه کاری</p>
        </div>

        <div class="box">
            <h3>گزارشات</h3>
            <p>گزارش‌های دقیق و حرفه‌ای مالی</p>
        </div>
    </div>
</section>

<!--  Screenshots  -->
<section class="screenshots">
    <h2>نمای سیستم</h2>

    <div class="images">
        <img src="images/screen1.jpg" alt="screen1">
        <img src="images/screen2.jpg" alt="screen2">
        <img src="images/screen3.jpg" alt="screen3">
    </div>
</section>

<!--  Testimonials  -->
<section class="testimonials">
    <h2>نظرات کاربران</h2>

    <div class="testimonial">
        <p>"این سیستم کار ما را بسیار ساده کرده است."</p>
        <h4>- معین </h4>
    </div>

    <div class="testimonial">
        <p>"بهترین سیستم برای مدیریت معاش."</p>
        <h4>- علی</h4>
    </div>
</section>

<!--  FAQ  -->
<section class="faq">
    <h2>سوالات متداول</h2>

    <div class="faq-item">
        <h3>آیا سیستم رایگان است؟</h3>
        <p>بله، نسخه ابتدایی رایگان می‌باشد.</p>
    </div>

    <div class="faq-item">
        <h3>آیا گزارش‌گیری دارد؟</h3>
        <p>بله، سیستم دارای گزارشات کامل است.</p>
    </div>
</section>

<!--  Footer  -->
<footer class="footer">
    <p>© 2026 سیستم مدیریت حقوق و معاش | تمام حقوق محفوظ است</p>
</footer>

</body>
</html>