<section id="section-contact">
    <div class="container">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-md-8">
                <h2>تواصل معنا</h2>
                <div class="section-divider"></div>
                <p>يمكنكم التواصل معنا عبر النموذج التالي أو زيارة المكتب على العنوان الموضح بالخريطة.</p>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-6 mb-4">
                <form onsubmit="sendMail(event)" style="text-align: right;">
                    @csrf

                    <div class="form-group">
                        <label for="name">الاسم</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="ادخل اسمك"
                            required>
                    </div>

                    <div class="form-group">
                        <label for="email">البريد الإلكتروني</label>
                        <input type="email" class="form-control" id="email" name="email"
                            placeholder="ادخل بريدك الإلكتروني" required>
                    </div>

                    <div class="form-group">
                        <label for="phone">رقم الهاتف</label>
                        <input type="tel" class="form-control" id="phone" name="phone"
                            placeholder="ادخل رقم هاتفك">
                    </div>

                    <div class="form-group">
                        <label for="message">رسالة استفسارك</label>
                        <textarea class="form-control" id="message" name="message" rows="5" placeholder="اكتب رسالتك" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-lg btn-block btn-success">إرسال</button>
                </form>
                @if (session('success'))
                    <div id="successPopupOverlay"
                        style="position: fixed; top:0; left:0; width:100%; height:100%; background: rgba(0,0,0,0.5); display:flex; justify-content:center; align-items:center; z-index:1050;">
                        <div class="card text-center" style="padding: 20px; max-width: 400px; width: 90%;">
                            <div class="card-body">
                                <h4 class="card-title text-success">✅</h4>
                                <p class="card-text">{{ session('success') }}</p>
                                <button type="button" class="btn btn-success" id="closePopupBtn">اغلاق</button>
                            </div>
                        </div>
                    </div>

                    <script>
                        document.getElementById('closePopupBtn').addEventListener('click', function() {
                            document.getElementById('successPopupOverlay').style.display = 'none';
                        });

                        setTimeout(function() {
                            var popup = document.getElementById('successPopupOverlay');
                            if (popup) popup.style.display = 'none';
                        }, 5000);
                    </script>
                @endif
            </div>

            <!-- الخريطة -->
            <div class="col-md-6 mb-4 d-flex flex-column justify-content-between">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3624.805176731853!2d46.7200529751232!3d24.744203084109867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e2f08caa94f2c59%3A0x7c1b0c42ad5d63e3!2z2YXYrNmE2Kkg2KfZhNmB2LnYqiDZgti32YrZg9mI2Kkg2KfZhNin2Yog2KfZhNi12KjZhdmI2YrZg9mI2Kkg2KjZhtiq2Yog2Kkg2KfZhNmK2YjYp9iq2KfZhNiq!5e0!3m2!1sar!2seg!4v1700900000000!5m2!1sar!2seg"
                    width="100%" style="flex-grow: 1; min-height: 92%; border:0;" allowfullscreen="" loading="lazy">
                </iframe>

                <p style="margin-top: 15px;">شارع الأمير عبدالعزيز بن مساعد – حي الضباب – الرياض – المملكة العربية
                    السعودية</p>
            </div>

        </div>
    </div>
</section>
