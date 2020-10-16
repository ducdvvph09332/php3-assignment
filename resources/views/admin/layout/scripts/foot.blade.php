<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<!-- <script src="{{asset('admin/assets/js/libs/jquery-3.1.1.min.js')}}"></script> -->
<script src="{{asset('admin/bootstrap/js/popper.min.js')}}"></script>
<script src="{{asset('admin/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('admin/assets/js/app.js')}}"></script>
<script>
    $(document).ready(function() {
        App.init();
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

<!-- BEGIN CDN  -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.js"></script>
<!-- CDN -->

<!-- CONFIRM DELETE -->
<!-- <script>
    $('.btn-destroy').on('click', function() {
        var redirectUrl = 'users';
        Swal.fire({
            title: 'Thông báo!',
            text: "Bạn có chắc chắn muốn xóa đơn đặt này?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Đồng ý'
        }).then((result) => { // arrow function es6 (es2015)
            if (result.value) {
                window.location.href = redirectUrl;
            }
        });
    });
</script> -->
<!-- END CONFIRM DELETE -->