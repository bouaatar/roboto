<?php
// send.php
?>
<!DOCTYPE html>
<html lang="ar">
<head>
<meta charset="UTF-8">
<title>اكتمل التسجيل</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
body {
    margin: 0;
    font-family: Tahoma, Arial, sans-serif;
    background: linear-gradient(135deg, #667eea, #764ba2);
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

.container {
    background: #fff;
    padding: 40px;
    border-radius: 15px;
    text-align: center;
    max-width: 400px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.2);
    animation: fadeIn 1s ease;
}

h1 {
    color: #e74c3c;
    margin-bottom: 20px;
}

p {
    color: #333;
    font-size: 18px;
    margin-bottom: 30px;
}

.btn {
    display: inline-block;
    padding: 12px 25px;
    background: #3498db;
    color: #fff;
    text-decoration: none;
    border-radius: 8px;
    transition: 0.3s;
}

.btn:hover {
    background: #2980b9;
}

@keyframes fadeIn {
    from {opacity: 0; transform: translateY(20px);}
    to {opacity: 1; transform: translateY(0);}
}
</style>

</head>
<body>

<div class="container">
    <h1>👍اكتمل التسجيل</h1>
    <p>لقد تم تسجيل المشارك (ة)بنجاح 
        <br>
        <br>المرجو سحب استمارة التسجيل من المدرسة
    </p>

    <a href="https://roboto.ma/l1/seance_l1_ins_add.php" class="btn">
        تسجيل جديد
    </a>
</div>

<script>
// تأثير بسيط عند تحميل الصفحة
document.addEventListener("DOMContentLoaded", function() {
    console.log("Page Loaded");
});
</script>

</body>
</html>