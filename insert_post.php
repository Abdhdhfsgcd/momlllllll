<?php
// إعداد الاتصال بقاعدة البيانات
$servername = "localhost";
$username = "root"; // اسم المستخدم الافتراضي
$password = ""; // اتركه فارغًا إذا لم تكن قد أنشأت كلمة مرور
$dbname = "ليبيا";

// الاتصال بقاعدة البيانات
$conn = new mysqli($servername, $username, $password, $dbname);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}

// استقبال بيانات النموذج
$title = $_POST['title'];
$content = $_POST['content'];

// إدخال البيانات في قاعدة البيانات
$sql = "INSERT INTO posts (title, content) VALUES ('$title', '$content')";

if ($conn->query($sql) === TRUE) {
    echo "تم إضافة المقال بنجاح!";
} else {
    echo "خطأ: " . $sql . "<br>" . $conn->error;
}

// إغلاق الاتصال
$conn->close();
?>