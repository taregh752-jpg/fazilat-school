<?php
if ($_POST) {
    $name = htmlspecialchars($_POST['name']);
    $contact = htmlspecialchars($_POST['contact']);
    $question = htmlspecialchars($_POST['question']);
    
    $to = "taregh752@gmail.com";
    $subject = "سوال جدید از سایت مدرسه فضیلت";
    $message = "نام: $name\nتماس: $contact\nسوال: $question";
    $headers = "From: no-reply@fazilat-school.ir";
    
    if (mail($to, $subject, $message, $headers)) {
        echo "<script>alert('سوال شما با موفقیت ارسال شد!'); window.location.href='register.html';</script>";
    } else {
        echo "<script>alert('خطا در ارسال! لطفاً دوباره تلاش کنید.'); window.history.back();</script>";
    }
}
?>