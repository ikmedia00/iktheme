<footer class="main-footer text-center text-xs">
    Edit by <a href="">Ian Konjo</a> | Copyright &copy; 2020 <a href="http://adminlte.io">AdminLTE.io</a>. All rights
    reserved.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-light">
    @include('template_dashboard.profil_admin')
</aside>
</div>

<!-- jQuery -->
<script src="{{ asset('public/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('public/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('public/assets/js/adminlte.min.js') }}"></script>
<script src="{{ asset('public/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
<script src="{{ asset('public/plugins/select2/js/select2.full.min.js') }}"></script>
<script type="text/javascript">
    // Script upload modif
    $(document).ready(function() {
        bsCustomFileInput.init();
    });
    // Script select 2
    $('.select2bs4').select2({
        theme: 'bootstrap4'
    });
</script>
</body>

</html>