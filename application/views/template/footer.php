    <footer>
        <div class="text-center bg-dark py-4">
            <small class="text-secondary">Copyright &copy; <script>document.write(new Date().getFullYear())</script>. Pemerintah Kota Sungai Penuh. All rigths reserved</small class="text-secondary">
        </div>
    </footer>
  
    <!-- JAVASCRIPTS -->
    <script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/slick/slick.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/fancybox/jquery.fancybox.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/syotimer/jquery.syotimer.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/aos/aos.js"></script>
    <script src="<?= base_url() ?>assets/plugins/datatables/datatables.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
    <script src="<?= base_url() ?>assets/plugins/owl-carousel/owl.carousel.min.js"></script>
    <script src="https://kit.fontawesome.com/d6482bd15d.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    
    <script src="<?= base_url() ?>assets/js/script.js"></script>

    <script>
        $(document).ready(function() {
            $(".owl-carousel").owlCarousel({
                autoplay:true,
                autoplayTimeout:5000,
                loop:true,
                margin:10,
                items:3,
                lazyLoad: true,
            });

            $('#datatable').DataTable({
                'paging': true,
                'lengthChange': true,
                'searching': true,
                'ordering': true,
                'info': false,
                'autoWidth': true,
                "language":{
                    "url":"https://cdn.datatables.net/plug-ins/1.11.5/i18n/id.json",
                    "sEmptyTable":"Tidak ada data."
                }
            });
        });
    </script>
</body>

</html>