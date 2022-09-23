<script>

    // success message popup notification
    @if(Session::has('success'))
        @if(session('success') != 0)
            toastr.success("{{ Session::get('success') }}");
        @endif
    @endif

    // info message popup notification
    @if(Session::has('info'))
        @if(session('info') != 0)
            toastr.info("{{ Session::get('info') }}");
        @endif
    @endif

    // warning message popup notification
    @if(Session::has('warning'))
        @if(session('warning') != 0)
            toastr.warning("{{ Session::get('warning') }}");
        @endif
    @endif

    // error message popup notification
    @if(Session::has('error'))
        @if(session('error') != 0)
            toastr.error("{{ Session::get('error') }}");
        @endif
    @endif



    @php

    session(['success' => 0]);
    session(['warning' => 0]);
    session(['error' => 0]);

    @endphp
</script>
