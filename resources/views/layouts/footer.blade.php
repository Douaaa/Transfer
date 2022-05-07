<!-- ======= Footer ======= -->
<footer id="footer">

  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>روابط مفيدة</h4>
          <ul>
            <li><i class="bx bx-chevron-left"></i> <a href="#">  {{ trans('all.home') }}</a></li>
            <li><i class="bx bx-chevron-left"></i> <a href="#">  {{ trans('all.about') }}</a></li>
            <li><i class="bx bx-chevron-left"></i> <a href="#">  {{ trans('all.services') }}</a></li>

          </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>{{ trans('all.services') }}</h4>
          <ul>
            <li><i class="bx bx-chevron-left"></i> <a href="#">{{ trans('all.service') }}</a></li>
            <li><i class="bx bx-chevron-left"></i> <a href="#">{{ trans('all.service') }}</a></li>
            <li><i class="bx bx-chevron-left"></i> <a href="#">{{ trans('all.service') }}</a></li>

          </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-contact">
          <h4>اتصل بنا</h4>
          <p>
            بغداد - الكرادة <br>
            عرصات الهندية - حي بابل <br>

            <strong>الهاتف:</strong> 07708852492<br>
            <strong>الإيميل:</strong> rihlat.aljanub@gmail.com<br>
          </p>

        </div>

        <div class="col-lg-3 col-md-6 footer-info">
          <h3>{{ trans('all.about') }}</h3>
          <p>هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، </p>
          <div class="social-links mt-3">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>
  </div>

  <div class="container">
    <div class="copyright">
      &copy;. جميع الحقوق محفوظة
    </div>
    <div class="credits">
      تم تصميم من قبل <a href="http://www.almayaar.com/" style="color:#A8CB38;font-size:12px">Al Mayaar</a>
    </div>
  </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="{{ asset('assets/vendor/purecounter/purecounter.js')}}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"  crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"  crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"  crossorigin="anonymous"></script>

<!-- Template Main JS File -->
<script src="{{ asset('assets/js/main.js')}}"></script>
<script type="text/javascript">
window.scroll({
top: 2500,
left: 0,
behavior: 'smooth'
});
</script>
</body>

</html>
