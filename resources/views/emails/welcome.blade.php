<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Our Diamond Store</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .header {
            background: linear-gradient(135deg, #1a1a1a 0%, #4a4a4a 100%);
            color: #ffffff;
            padding: 40px 20px;
            text-align: center;
        }

        .header h1 {
            margin: 0;
            font-size: 28px;
            font-weight: 300;
        }

        .content {
            padding: 30px;
            color: #333333;
        }

        .welcome-message {
            font-size: 18px;
            margin-bottom: 25px;
            color: #1a1a1a;
        }

        .features {
            margin: 25px 0;
            padding: 0;
            list-style: none;
        }

        .features li {
            margin-bottom: 15px;
            padding-left: 25px;
            position: relative;
        }

        .features li:before {
            content: "✦";
            position: absolute;
            left: 0;
            color: #666666;
        }

        .cta-button {
            display: inline-block;
            background: #1a1a1a;
            color: #ffffff;
            padding: 12px 30px;
            text-decoration: none;
            border-radius: 25px;
            margin: 20px 0;
            transition: background-color 0.3s;
        }

        .cta-button:hover {
            background: #333333;
        }

        .footer {
            background: #f8f8f8;
            padding: 20px;
            text-align: center;
            color: #666666;
            font-size: 14px;
        }

        .social-links {
            margin: 20px 0;
        }

        .social-links a {
            color: #666666;
            margin: 0 10px;
            text-decoration: none;
        }

        @media only screen and (max-width: 600px) {
            .container {
                margin: 0;
                border-radius: 0;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Welcome to Our Diamond Store</h1>
        </div>

        <div class="content">
            <div class="welcome-message">
                Dear {{ $customer->first_name }},
            </div>

            <p>We're thrilled to welcome you to our exclusive community of diamond enthusiasts! Thank you for choosing us as your trusted source for lab-grown diamonds.</p>

            <ul class="features">
                <li>Browse our extensive collection of certified lab-grown diamonds</li>
                <li>Enjoy special member-only discounts and early access to sales</li>
                <li>Get expert guidance from our diamond specialists</li>
                <li>Track your orders and maintain your wishlist</li>
            </ul>

            <center>
                <a href="{{ url('/shop') }}" class="cta-button">Start Shopping</a>
            </center>

            <p>If you have any questions or need assistance, our customer service team is always here to help.</p>
        </div>

        <div class="footer">
            <div class="social-links">
                <a href="#">Facebook</a> |
                <a href="#">Instagram</a> |
                <a href="#">Twitter</a>
            </div>
            <p>© {{ date('Y') }} Diamond Store. All rights reserved.</p>
            <small>This email was sent to {{ $customer->email }}</small>
        </div>
    </div>
</body>
</html>