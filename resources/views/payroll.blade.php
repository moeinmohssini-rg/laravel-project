<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>حقوق و دستمزد</title>

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
        <li><a href="attendence.html">حضور و غیاب</a></li>
        <li><a href="payroll.html">حقوق و دستمزد</a></li>
        <li><a href="payslip.html">فیش معاش</a></li>
        <li><a href="reports.html">گزارشات</a></li>
    </ul>
</nav>

<!--  Header  -->
<header class="page-header">
    <h1>مدیریت حقوق و دستمزد</h1>
    <p>محاسبه و مدیریت معاش کارمندان</p>
</header>

<!--  Payroll Form  -->
<section class="payroll-form">
    <h2>محاسبه معاش</h2>

    <form>
        <div class="form-group">
            <label>نام کارمند:</label>
            <input type="text" placeholder="نام کارمند">
        </div>

        <div class="form-group">
            <label>معاش اصلی:</label>
            <input type="number" placeholder="مثلاً 15000">
        </div>

        <div class="form-group">
            <label>اضافه کاری:</label>
            <input type="number" placeholder="مقدار اضافه">
        </div>

        <div class="form-group">
            <label>کسرات:</label>
            <input type="number" placeholder="مقدار کسر">
        </div>

        <div class="form-group">
            <label>معاش نهایی:</label>
            <input type="number" placeholder="محاسبه شده" readonly>
        </div>

        <button type="submit">محاسبه و ثبت</button>
    </form>
</section>

<!--  Payroll Table  -->
<section class="payroll-table">
    <h2>لیست پرداخت‌ها</h2>

    <table>
        <thead>
            <tr>
                <th>شماره</th>
                <th>نام</th>
                <th>معاش اصلی</th>
                <th>اضافه کاری</th>
                <th>کسرات</th>
                <th>معاش نهایی</th>
                <th>عملیات</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>1</td>
                <td>احمد</td>
                <td>15000</td>
                <td>2000</td>
                <td>500</td>
                <td>16500</td>
                <td>
                    <button>تغییرات</button>
                    <button>حذف</button>
                </td>
            </tr>

            <tr>
                <td>2</td>
                <td>معین</td>
                <td>12000</td>
                <td>1000</td>
                <td>300</td>
                <td>12700</td>
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