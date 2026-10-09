<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>حضور و غیاب</title>
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
    <h1>مدیریت حضور و غیاب</h1>
    <p>ثبت و بررسی وضعیت حضور کارمندان</p>
</header>

<!--  Attendance Form  -->
<section>
    <form>
        <h2 style="text-align: right; margin-bottom: 20px;">ثبت حضور و غیاب</h2>
        <div class="form-group">
            <label>نام کارمند:</label>
            <input type="text" placeholder="نام کارمند">
        </div>
        <div class="form-group">
            <label>تاریخ:</label>
            <input type="date">
        </div>
        <div class="form-group">
            <label>وضعیت:</label>
            <select>
                <option>حاضر</option>
                <option>غایب</option>
                <option>مرخصی</option>
            </select>
        </div>
        <div class="form-group">
            <label>ساعت ورود:</label>
            <input type="time">
        </div>
        <div class="form-group">
            <label>ساعت خروج:</label>
            <input type="time">
        </div>
        <button type="submit">ثبت</button>
    </form>
</section>

<!--  Attendance Table  -->
<section>
    <h2 class="page-header" style="padding-top: 0;">لیست حضور و غیاب</h2>
    <table>
        <thead>
            <tr>
                <th>شماره</th>
                <th>نام</th>
                <th>تاریخ</th>
                <th>وضعیت</th>
                <th>ورود</th>
                <th>خروج</th>
                <th>عملیات</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>احمد</td>
                <td>2026-04-07</td>
                <td>حاضر</td>
                <td>08:00</td>
                <td>16:00</td>
                <td>
                    <button>تغییرات</button>
                    <button>حذف</button>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>معین</td>
                <td>2026-04-07</td>
                <td>غیر حاضر</td>
                <td>-</td>
                <td>-</td>
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