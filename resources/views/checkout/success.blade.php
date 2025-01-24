<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Success</title>
    <!-- Include a CSS library for styling (optional) -->
    <style>
        .popup {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #28a745;
            color: white;
            padding: 20px;
            border-radius: 8px;
            text-align: center;
            font-size: 18px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }

        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }
    </style>
</head>

<body>
    <!-- Display the success message popup -->
    @if (session('success'))
    <div class="overlay"></div>
    <div class="popup">
        {{ session('success') }}
    </div>

    <script>
        // Hold for 2 seconds and then redirect to the home page
        setTimeout(() => {
            window.location.href = "{{ route('home') }}";
        }, 2000);
    </script>
    @endif
</body>

</html>