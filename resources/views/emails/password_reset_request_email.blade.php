<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset Request - Roaya Diamond</title>
</head>
<body style="margin: 0; padding: 0; font-family: 'Georgia', serif; background-color: #f9f9f9;">
    <table width="100%" cellpadding="0" cellspacing="0" style="max-width: 600px; margin: 0 auto; background-color: #ffffff; border: 1px solid #e0e0e0;">
        <!-- Header Section -->
        <tr>
            <td style="padding: 30px; text-align: center; background-color: #301419;">
                <img src="{{ asset('images/roaya-logo.png') }}" alt="Roaya Diamond Logo" style="max-width: 150px; height: auto;">
                <h1 style="margin: 20px 0 0; font-size: 24px; color: #ffffff; font-weight: bold;">Password Reset Request</h1>
            </td>
        </tr>
        <!-- Content Section -->
        <tr>
            <td style="padding: 30px;">
                <p style="font-size: 18px; color: #333333; line-height: 1.6;">Dear [Customer Name],</p>
                <p style="font-size: 18px; color: #333333; line-height: 1.6;">We received a request to reset your password for your Roaya Diamond account. To proceed, please click the button below:</p>
                <!-- Reset Button -->
                <table cellpadding="0" cellspacing="0" style="margin: 30px auto;">
                    <tr>
                        <td style="background-color: #d4af37; padding: 12px 24px; border-radius: 4px; text-align: center;">
                            <a href="{{ url('/password-reset/' . $token) }}" style="font-size: 16px; color: #301419; text-decoration: none; font-weight: bold;">Reset Your Password</a>
                        </td>
                    </tr>
                    <p style="font-size: 18px; color: #333333; line-height: 1.6;">This link will expire in 2 minutes.</p>
                </table>
                <p style="font-size: 18px; color: #333333; line-height: 1.6;">If you did not request a password reset, please ignore this email or contact us immediately at <a href="mailto:support@roayadiamond.com" style="color: #d4af37; text-decoration: none;">support@roayadiamond.com</a>.</p>
                <p style="font-size: 18px; color: #333333; line-height: 1.6;">For security reasons, this link will expire in 24 hours.</p>
                <p style="font-size: 18px; color: #333333; line-height: 1.6;">Thank you for trusting Roaya Diamond.</p>
                <p style="font-size: 18px; color: #333333; line-height: 1.6;">Warm regards,<br>The Roaya Diamond Team</p>
            </td>
        </tr>
        <!-- Footer Section -->
        <tr>
            <td style="padding: 20px; text-align: center; background-color: #301419; color: #ffffff; font-size: 14px;">
                <p style="margin: 0;">Follow us on:</p>
                <p style="margin: 10px 0;">
                    <a href="https://www.facebook.com/roayadiamond" style="margin: 0 5px; display: inline-block;"><img src="https://www.roayadiamond.com/facebook-icon.png" alt="Facebook" style="width: 24px; height: 24px;"></a>
                    <a href="https://www.instagram.com/roayadiamond" style="margin: 0 5px; display: inline-block;"><img src="https://www.roayadiamond.com/instagram-icon.png" alt="Instagram" style="width: 24px; height: 24px;"></a>
                    <a href="https://www.twitter.com/roayadiamond" style="margin: 0 5px; display: inline-block;"><img src="https://www.roayadiamond.com/twitter-icon.png" alt="Twitter" style="width: 24px; height: 24px;"></a>
                </p>
                <p style="margin: 0;">© 2023 Roaya Diamond. All rights reserved.</p>
                <p style="margin: 0;">You are receiving this email because you requested a password reset on <a href="https://www.roayadiamond.com" style="color: #d4af37; text-decoration: none;">roayadiamond.com</a>.</p>
            </td>
        </tr>
    </table>
</body>
</html>