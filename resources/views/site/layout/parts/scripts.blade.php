<!-- JQaury -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script>

<!-- Vendor JS Files -->
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/purecounter/purecounter.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/floating-whatsapp/floating-wpp.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

<script type="text/javascript">
    $(function () {
        $('#myButton').floatingWhatsApp({
            phone: '18996017141',
            popupMessage: 'Tem alguma dúvida, gostaria de mais informações?',
            message: "Sim",
            showPopup: true,
            showOnIE: true,
            headerTitle: 'Sambura Imóveis',
            headerColor: '#075e54',
            backgroundColor: '#075e54',
            buttonImage: `<img src="{{ asset('images/whatsapp.svg') }}" />`
        });
    });
</script>

@yield('scripts')
