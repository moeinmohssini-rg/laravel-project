<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>فیش معاش</title>

    <!-- External CSS -->
    <link rel="stylesheet" href="style.css">
    @vite('resources/css/app.css');
</head>
<body>

<!--  Navbar  -->
<nav class="navbar">
    <div class="logo">Payroll System</div>

    <ul class="nav-links">
        <li><a href="index.html">خانه</a></li>
        <li><a href="employees.html">کارمندان</a></li>
        <li><a href="attendence.html">حضور و غیر حاضری</a></li>
        <li><a href="payroll.html">حقوق و دستمزد</a></li>
        <li><a href="payslip.html">فیش معاش</a></li>
        <li><a href="reports.html">گزارشات</a></li>
    </ul>
</nav>

<!--  Header  -->
<header class="page-header">
    <h1>فیش معاش کارمند</h1>
    <p>مشاهده و چاپ فیش معاش</p>
</header>

<!--  Select Employee  -->
<section class="payslip-form">
    <h2>انتخاب کارمند</h2>

    <form>
        <div class="form-group">
            <label>نام کارمند:</label>
            <select>
                <option>احمد</option>
                <option>معین</option>
            </select>
        </div>

        <div class="form-group">
            <label>ماه:</label>
            <input type="month">
        </div>

        <button type="submit">نمایش فیش</button>
    </form>
</section>

<!--  Payslip Design  -->
<section class="payslip-box">
    <h2>جزئیات فیش معاش</h2>

    <div class="payslip-content">

        <p><strong>نام:</strong> احمد</p>
        <p><strong>وظیفه:</strong> مدیر</p>
        <p><strong>ماه:</strong> اپریل 2026</p>

        <table>
            <tr>
                <td>معاش اصلی</td>
                <td>15000</td>
            </tr>
            <tr>
                <td>اضافه کاری</td>
                <td>2000</td>
            </tr>
            <tr>
                <td>کسرات</td>
                <td>500</td>
            </tr>
            <tr>
                <td><strong>معاش نهایی</strong></td>
                <td><strong>16500</strong></td>
            </tr>
        </table>

        <button onclick="window.print()">چاپ فیش</button>

    </div>
</section>

<!--  Footer  -->
<footer class="footer">
    <p>© 2026 سیستم مدیریت حقوق و معاش | تمام حقوق محفوظ است</p>
</footer>

</body>
</html>