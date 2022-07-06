       
    <footer>
        <div class="text-center bg-dark py-4">
            <h3 class="text-white font-weight-bold">Copyright &#169; 2022 Pemerintah Kota Sungai Penuh. All rigths reserved</h3 class="text-secondary">
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
    <script src="https://kit.fontawesome.com/d6482bd15d.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    
    <script src="<?= base_url() ?>assets/js/script.js"></script>

    <script>
        $(document).ready(function() {
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