    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{asset('admin/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('admin/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('admin/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="{{asset('admin/assets/js/authentication/form-1.js')}}"></script>

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{asset('admin/assets/js/scrollspyNav.js')}}"></script>
    <script src="{{asset('admin/plugins/flatpickr/flatpickr.js')}}"></script>
    <script src="{{asset('admin/plugins/noUiSlider/nouislider.min.js')}}"></script>

    <script src="{{asset('admin/plugins/flatpickr/custom-flatpickr.js')}}"></script>
    <script src="{{asset('admin/plugins/noUiSlider/custom-nouiSlider.js')}}"></script>
    <script src="{{asset('admin/plugins/bootstrap-range-Slider/bootstrap-rangeSlider.js')}}"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- BEGIN CDN  -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!-- CDN -->
    <script>
        $(document).ready(function() {
            <?php if (session('notify')) : ?>
                Swal.fire({
                    position: 'center',
                    icon: 'success',
                    title: "{{session('notify')}}",
                    showConfirmButton: false,
                    timer: 2000
                });
            <?php endif; ?>
        });
    </script>