</div>
</body>
<!-- JAVASCRIPTS -->
<script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/bootstrap/bootstrap.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/datatables/datatables.min.js"></script>
<script src="<?= base_url() ?>assets/plugins/datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="https://kit.fontawesome.com/d6482bd15d.js" crossorigin="anonymous"></script>

<script>
    const list = document.querySelectorAll('.list');
    function activeLink() {
        list.forEach((item) => 
        item.classList.remove('active'));
        this.classList.add('active');
    }
    list.forEach((item) => item.addEventListener('click', activeLink));

    let toggle = document.querySelector('.toggle');
    let menu = document.querySelector('.menu-bar');
    let menutitle = document.querySelector('.menu-title');
    let nav = document.querySelector('.nav-bar');
    let main = document.querySelector('.main-content');
    toggle.onclick = function() {
        menu.classList.toggle('active');
        menutitle.classList.toggle('active');
        nav.classList.toggle('active');
        main.classList.toggle('active');
    }

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
</html>