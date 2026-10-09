<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>گزارشات</title>

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
        <li><a href="attendence.html">حضور و عیر حاضری</a></li>
        <li><a href="payroll.html">حقوق و دستمزد</a></li>
        <li><a href="payslip.html">فیش معاش</a></li>
        <li><a href="reports.html">گزارشات</a></li>
    </ul>
</nav>

<!--  Header  -->
<header class="page-header">
    <h1>گزارشات سیستم</h1>
    <p>بررسی و دانلود گزارشات مالی و حضور و غیاب</p>
</header>

<!--  Report Filter  -->
<section class="report-filter">
    <h2>فیلتر گزارش</h2>

    <form>
        <div class="form-group">
            <label>نام کارمند:</label>
            <select>
                <option>همه کارمندان</option>
                <option>احمد</option>
                <option>معین</option>
            </select>
        </div>

        <div class="form-group">
            <label>از تاریخ:</label>
            <input type="date">
        </div>

        <div class="form-group">
            <label>تا تاریخ:</label>
            <input type="date">
        </div>

        <button type="submit">نمایش گزارش</button>
        <button type="button">دانلود PDF</button>
        <button type="button">دانلود Excel</button>
    </form>
</section>

<!--  Report Table  -->
<section class="report-table">
    <h2>لیست گزارشات</h2>

    <table>
        <thead>
            <tr>
                <th>شماره</th>
                <th>نام کارمند</th>
                <th>تاریخ</th>
                <th>حضور</th>
                <th>معاش</th>
                <th>اضافه کاری</th>
                <th>کسرات</th>
                <th>معاش نهایی</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>1</td>
                <td>احمد</td>
                <td>2026-04-07</td>
                <td>حاضر</td>
                <td>15000</td>
                <td>2000</td>
                <td>500</td>
                <td>16500</td>
            </tr>

            <tr>
                <td>2</td>
                <td>معین</td>
                <td>2026-04-07</td>
                <td>غایب</td>
                <td>12000</td>
                <td>1000</td>
                <td>300</td>
                <td>12700</td>
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