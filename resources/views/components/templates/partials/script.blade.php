<script src="{{ asset('/assets/js/vendor.min.js') }}"></script>
<!-- Import Js Files -->
<script src="{{ asset('/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('/assets/libs/simplebar/dist/simplebar.min.js') }}"></script>
<script src="{{ asset('/assets/js/theme/app.dark.init.js') }}"></script>
<script src="{{ asset('/assets/js/theme/theme.js') }}"></script>
<script src="{{ asset('/assets/js/theme/app.min.js') }}"></script>
<script src="{{ asset('/assets/js/theme/sidebarmenu.js') }}"></script>
<script src="{{ asset('/assets/js/theme/feather.min.js') }}"></script>

<!-- solar icons -->
<script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
<script src="{{ asset('/assets/libs/jvectormap/jquery-jvectormap.min.js') }}"></script>
<script src="{{ asset('/assets/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
<script src="{{ asset('/assets/js/extra-libs/jvectormap/jquery-jvectormap-us-aea-en.js') }}"></script>
<script src="{{ asset('/assets/js/dashboards/dashboard.js') }}"></script>


<script>
    function logout() {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, logout!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.post("{{ route('logout') }}", {
                    _token: "{{ csrf_token() }}"
                }).done(function() {
                    window.location.href = "{{ route('login') }}";
                }).fail(function(error) {
                    console.log(error);
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Something went wrong!'
                    });
                });
            }
        });
    }
</script>
@stack('scripts')
