<!DOCTYPE html>
<html>
<head>
    <title>Password Reset</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="modal" id="emailModal">
        <div class="modal-content">
            <h2>Reset Password</h2>
            <form id="resetForm">
                @csrf
                <div>
                    <label>Email:</label>
                    <input type="email" name="email" required>
                </div>
                <button type="submit">Send Reset Link</button>
            </form>
        </div>
    </div>

    <script>
    $(document).ready(function() {
        $('#resetForm').on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                url: '{{ route("customer.password-reset") }}',
                method: 'POST',
                data: $(this).serialize(),
                success: function(response) {
                    alert(response.message);
                },
                error: function(xhr) {
                    alert(xhr.responseJSON.error);
                }
            });
        });
    });
    </script>
</body>
</html>