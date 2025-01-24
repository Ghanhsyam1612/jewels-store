<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Success</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'error',
                title: 'Payment Cancelled!',
                text: 'Your payment has been cancelled.',
                timer: 3000,
                timerProgressBar: true,
                showConfirmButton: false,
                willClose: () => {
                    window.location.href = "{{ route('home') }}";
                }
            });
        });
    </script>
</body>
</html>
