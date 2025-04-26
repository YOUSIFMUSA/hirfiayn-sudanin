<?php
include 'config.php';
$query = $conn->query("SELECT * FROM settings LIMIT 1");
$settings = $query->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title>الحرفيين السودانيين</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <div class="container">
        <h2>بيانات المدير</h2>
        <p><strong>الاسم:</strong> يوسف موسى آدم محمد</p>
        <p><strong>رقم الحساب:</strong> 2752459</p>
        <p><strong>بنك:</strong> بنك الخرطوم</p>
        <p><strong>رقم الواتساب:</strong> 249119082479</p>

        <h3>تسجيل كحرفي</h3>
        <form method="POST" action="register.php">
            <input type="text" name="code" placeholder="ادخل رمز التسجيل" required>
            <button type="submit">تأكيد</button>
        </form>
    </div>
</body>
</html>