@component('mail::message')
رسالة أستشارة قضائية 

اسم المرسل:{{ $data['name'] }}  
البريد الإلكتروني للمرسل: {{ $data['email'] }}  

@if(!empty($data['phone']))
رقم الهاتف: {{ $data['phone'] }}  
@endif

محتوي الرسالة:  
{{ $data['message'] }}

@endcomponent
