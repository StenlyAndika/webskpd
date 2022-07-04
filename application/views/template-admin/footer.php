</div>
</body>
<!-- Fontawesome -->
<script src="https://kit.fontawesome.com/d6482bd15d.js" crossorigin="anonymous"></script>
<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<!-- JQuery  -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<!-- Datatables -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>

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