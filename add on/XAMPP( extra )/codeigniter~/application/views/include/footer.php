        <footer class="footer text-center">
                &copy; 2020 Admin Panel</a>.
        </footer>
        </div>
    </div>
    <script src="<?= site_url(); ?>assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?= site_url(); ?>assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?= site_url(); ?>assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?= site_url(); ?>assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?= site_url(); ?>assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="<?= site_url(); ?>dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="<?= site_url(); ?>dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?= site_url(); ?>dist/js/custom.min.js"></script>
    <!-- This Page JS -->
    <script src="<?= site_url(); ?>assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src='<?= site_url(); ?>assets/libs/froala-editor/summernote.min.js'></script>
    <script src="<?= site_url(); ?>assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="<?= site_url(); ?>assets/extra-libs/multicheck/jquery.multicheck.js"></script>  
    <script src="<?= site_url(); ?>assets/extra-libs/DataTables/datatables.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#summernote').summernote({height: 150});
        });
    </script>
    <script>
        $('#zero_config').DataTable();
    </script>
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#preview')
                        .attr('src', e.target.result)
                        .width(180)
                        .height(130);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    <script>
        $(document).ready(function() {
            $('#notice_form').submit(function(){
                // e.preventDefault();

                var title = $('#title').val();
                var content = $('#summernote').val();

                $.ajax({
                    url: '<?php echo base_url() . "add_notice" ?>',
                    type: 'POST',
                    data: {
                        title: title,
                        content: content				
                    },
                    success: function(data) {
                        if(data == 1){
                            alert('Data already exist !');
                        }else{
                            alert('Add Successfully !');
                        }
                        window.location.href = '<?php echo base_url() . "notice"; ?>';
                    },
                    error: function(data) {
                        alert('Something Error !');
                    },
                });
            });
        });
    </script>
</body>
</html>