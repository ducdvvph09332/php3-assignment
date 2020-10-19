<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<!-- <script src="{{asset('admin/assets/js/libs/jquery-3.1.1.min.js')}}"></script> -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="{{asset('admin/bootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('admin/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('admin/assets/js/app.js')}}"></script>
<!-- BEGIN CDN  -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<!-- CDN -->
<script>
    $(document).ready(function() {
        App.init();
        <?php if (session('notify')) : ?>
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: "{{session('notify')}}",
                showConfirmButton: false,
                timer: 1500
            });
        <?php endif; ?>
    });
</script>
<script src="{{asset('admin/plugins/highlight/highlight.pack.js')}}"></script>
<script src="{{asset('admin/assets/js/custom.js')}}"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
<script src="{{asset('admin/plugins/apex/apexcharts.min.js')}}"></script>
<script src="{{asset('admin/assets/js/dashboard/dash_1.js')}}"></script>
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{asset('admin/assets/js/scrollspyNav.js')}}"></script>
<script src="{{asset('admin/plugins/flatpickr/flatpickr.js')}}"></script>
<script src="{{asset('admin/plugins/noUiSlider/nouislider.min.js')}}"></script>

<script src="{{asset('admin/plugins/flatpickr/custom-flatpickr.js')}}"></script>
<script src="{{asset('admin/plugins/noUiSlider/custom-nouiSlider.js')}}"></script>
<script src="{{asset('admin/plugins/bootstrap-range-Slider/bootstrap-rangeSlider.js')}}"></script>
<!-- END PAGE LEVEL SCRIPTS -->


<!-- CONFIRM DELETE -->
<!-- <script>
    function archiveFunction() {
        event.preventDefault(); // prevent form submit
        var form = event.target.form; // storing the form
        swal({
                title: "Are you sure?",
                text: "But you will still be able to retrieve this file.",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, archive it!",
                cancelButtonText: "No, cancel please!",
                closeOnConfirm: false,
                closeOnCancel: true
            },
            function(isConfirm) {
                if (isConfirm) {
                    form.submit(); // submitting the form when user press yes
                }
            });
    }
</script> -->
<!-- END CONFIRM DELETE -->