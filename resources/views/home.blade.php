<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- إثبات ملكية جوجل -->
    <meta name="google-site-verification" content="DL9xbO9WSq8p-RJHXYioiTWKmowiHKo6kIi-tll9Cmw" />

    <!-- العنوان الرئيسي -->
    <title>مكتب هذال الدوسري للمحاماة - خدمات قانونية في الرياض</title>

    <!-- الوصف التعريفي -->
    <meta name="description" content="مكتب هذال الدوسري للمحاماة يقدم خدمات قانونية محترفة في الرياض، تواصل معنا للحصول على الاستشارة القانونية المناسبة.">

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

    // نص رسالة منسق
    let body =
        "📌 بيانات المرسل:\n" +
        "📞 رقم الهاتف: " + encodeURIComponent(phone) + "\n\n" +
        "📝 محتوى الرسالة:\n" + encodeURIComponent(msg);

    window.location.href =
        "mailto:hathalaldawsary7@gmail.com?subject=" +
        encodeURIComponent("رسالة من " + name + " - " + email) +
        "&body=" + body;
}
</script>




</body>

</html>
