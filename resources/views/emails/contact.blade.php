@component('mail::message')
# 📩 رسالة أستشارة جديدة

<p><strong style="color:#1D4ED8; text-align:right;">اسم المرسل:</strong> {{ $data['name'] }}</p>
<p><strong style="color:#1D4ED8; text-align:right;">البريد الإلكتروني للمرسل:</strong> {{ $data['email'] }}</p>

@if(!empty($data['phone']))
<p><strong style="color:#1D4ED8; text-align:right;">رقم الهاتف:</strong> {{ $data['phone'] }}</p>
@endif

<p><strong style="color:#1D4ED8; text-align:right">محتوى الرسالة:</strong><br>
{{ $data['message'] }}</p>

@endcomponent
