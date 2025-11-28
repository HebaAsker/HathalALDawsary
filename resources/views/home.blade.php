<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>مكتب هذال الدوسري للمحاماة</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/images/photo_2025.png') }}">
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@300;400;500;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body> @include('layouts.nav') @include('layouts.hero') @include('layouts.about')
    @include('layouts.state') @include('layouts.service') @include('layouts.contact') @include('layouts.footer')
    <a href="#" id="scrollToTop"><i class="fas fa-arrow-up"></i></a>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script>
function sendMail(e) {
    e.preventDefault();

    let name = document.getElementById('name').value;
    let email = document.getElementById('email').value;
    let phone = document.getElementById('phone').value;
    let msg = document.getElementById('message').value;

    // تجهيز نص الرسالة مع الترميز الصحيح
    let body =
        "اسم المرسل: " + encodeURIComponent(name) + "%0A" +
        "البريد الإلكتروني: " + encodeURIComponent(email) + "%0A" +
        "رقم الهاتف: " + encodeURIComponent(phone) + "%0A%0A" +
        "محتوى الرسالة:%0A" + encodeURIComponent(msg);

    // mailto
    window.location.href =
        "mailto:hathalaldawsary7@gmail.com?subject=" +
        encodeURIComponent("رسالة من صفحة الاتصال") +
        "&body=" + body;
}
</script>


</body>

</html>
