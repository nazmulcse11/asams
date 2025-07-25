<script>
    document.addEventListener("DOMContentLoaded", function () {
        @if (session('success'))
        Swal.fire({
            position: "top-end",
            icon: "success",
            title: "{{ session('success') }}",
            showConfirmButton: false,
            timer: 3000
        });
        @endif

        @if (session('error'))
        Swal.fire({
            position: "top-end",
            icon: "error",
            title: "{{ session('error') }}",
            showConfirmButton: false,
            timer: 3000
        });
        @endif

        @if (session('warning'))
        Swal.fire({
            position: "top-end",
            icon: "warning",
            title: "{{ session('warning') }}",
            showConfirmButton: false,
            timer: 3000
        });
        @endif

        @if (session('info'))
        Swal.fire({
            position: "top-end",
            icon: "info",
            title: "{{ session('info') }}",
            showConfirmButton: false,
            timer: 3000
        });
        @endif

        @if ($errors->any())
        let errorMessages = "";
        @foreach ($errors->all() as $error)
            errorMessages += "{{ $error }}\n";
        @endforeach

        Swal.fire({
            icon: "error",
            title: "Validation Error",
            text: errorMessages,
            confirmButtonText: "OK",
        });
        @endif
    });
</script>
