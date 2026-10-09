<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مدیریت کارمندان</title>

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



<!--  Header  -->
<header class="page-header">
    <h1>مدیریت کارمندان</h1>
    <p>در این بخش می‌توانید کارمندان را ثبت، تغیې و حذف نمایید</p>
</header>

<!--  Employee Form  -->
<section class="employee-form">
    <h2>ثبت کارمند جدید</h2>

    <form>
        <div class="form-group">
            <label>نام کامل:</label>
            <input type="text" placeholder="نام کارمند">
        </div>

        <div class="form-group">
            <label>ایمیل:</label>
            <input type="email" placeholder="example@email.com">
        </div>

        <div class="form-group">
            <label>شماره تماس:</label>
            <input type="text" placeholder="0700000000">
        </div>

        <div class="form-group">
            <label>وظیفه:</label>
            <input type="text" placeholder="مثلاً: حسابدار">
        </div>

        <div class="form-group">
            <label>معاش:</label>
            <input type="number" placeholder="مقدار معاش">
        </div>

        <button type="submit">ثبت کارمند</button>
    </form>
</section>

<!--  Employee Table  -->
<section class="employee-table">
    <h2>لیست کارمندان</h2>

    <table>
        <thead>
            <tr>
                <th>شماره</th>
                <th>نام</th>
                <th>ایمیل</th>
                <th>تماس</th>
                <th>وظیفه</th>
                <th>معاش</th>
                <th>عملیات</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>1</td>
                <td>احمد</td>
                <td>ahmad@email.com</td>
                <td>0700000000</td>
                <td>مدیر</td>
                <td>15000</td>
                <td>
                    <button>تغییرات</button>
                    <button>حذف</button>
                </td>
            </tr>

            <tr>
                <td>2</td>
                <td>معین</td>
                <td>moein@email.com</td>
                <td>0790000000</td>
                <td>حسابدار</td>
                <td>12000</td>
                <td>
                    <button>تغییرات</button>
                    <button>حذف</button>
                </td>
            </tr>
        </tbody>
    </table>
</section>

<!--  Footer  -->
<footer class="footer">
    <p>© 2026 سیستم مدیریت حقوق و معاش | تمام حقوق محفوظ است</p>
</footer>

</body>
</html>