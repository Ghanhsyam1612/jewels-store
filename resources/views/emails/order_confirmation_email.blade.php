<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation - Roaya Diamond</title>
</head>
<body style="margin: 0; padding: 0; font-family: 'Georgia', serif; background-color: #f9f9f9;">
    <table width="100%" cellpadding="0" cellspacing="0" style="max-width: 600px; margin: 0 auto; background-color: #ffffff; border: 1px solid #e0e0e0;">
        <!-- Header Section -->
        <tr>
            <td style="padding: 30px; text-align: center; background-color: #301419;">
                <img src="{{ asset('images/roaya-logo.png') }}" alt="Roaya Diamond Logo" style="max-width: 150px; height: auto;">
                <h1 style="margin: 20px 0 0; font-size: 24px; color: #ffffff; font-weight: bold;">Order Confirmation</h1>
            </td>
        </tr>
        <!-- Content Section -->
        <tr>
            <td style="padding: 30px;">
                <p style="font-size: 18px; color: #333333; line-height: 1.6;">Dear [Customer Name],</p>
                <p style="font-size: 18px; color: #333333; line-height: 1.6;">Thank you for your purchase at Roaya Diamond! We are delighted to confirm your order and are preparing it for shipment. Below are the details of your order:</p>
                
                <!-- Order Details Table -->
                <table width="100%" cellpadding="10" cellspacing="0" style="margin: 20px 0; border: 1px solid #e0e0e0;">
                    <tr style="background-color: #f4f4f4;">
                        <th style="text-align: left; font-size: 16px; color: #333333;">Item</th>
                        <th style="text-align: left; font-size: 16px; color: #333333;">Quantity</th>
                        <th style="text-align: left; font-size: 16px; color: #333333;">Price</th>
                    </tr>
                    <tr>
                        <td style="font-size: 16px; color: #333333;">[Product Name]</td>
                        <td style="font-size: 16px; color: #333333;">[Quantity]</td>
                        <td style="font-size: 16px; color: #333333;">[Price]</td>
                    </tr>
                    <!-- Add more rows for additional products -->
                    <tr>
                        <td colspan="2" style="text-align: right; font-size: 16px; color: #333333; font-weight: bold;">Subtotal:</td>
                        <td style="font-size: 16px; color: #333333;">[Subtotal]</td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align: right; font-size: 16px; color: #333333; font-weight: bold;">Shipping:</td>
                        <td style="font-size: 16px; color: #333333;">[Shipping Cost]</td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align: right; font-size: 16px; color: #333333; font-weight: bold;">Total:</td>
                        <td style="font-size: 16px; color: #333333; font-weight: bold;">[Total Amount]</td>
                    </tr>
                </table>

                <p style="font-size: 18px; color: #333333; line-height: 1.6;">Your order will be shipped to:</p>
                <p style="font-size: 16px; color: #333333; line-height: 1.6; background-color: #f4f4f4; padding: 10px; border-radius: 4px;">
                    [Customer Name]<br>
                    [Shipping Address]<br>
                    [City, State, ZIP Code]<br>
                    [Country]
                </p>

                <p style="font-size: 18px; color: #333333; line-height: 1.6;">You can track your order by clicking the button below:</p>
                <!-- Track Order Button -->
                <table cellpadding="0" cellspacing="0" style="margin: 30px auto;">
                    <tr>
                        <td style="background-color: #d4af37; padding: 12px 24px; border-radius: 4px; text-align: center;">
                            <a href="[Tracking Link]" style="font-size: 16px; color: #000000; text-decoration: none; font-weight: bold;">Track Your Order</a>
                        </td>
                    </tr>
                </table>

                <p style="font-size: 18px; color: #333333; line-height: 1.6;">If you have any questions about your order, feel free to contact us at <a href="mailto:support@roayadiamond.com" style="color: #d4af37; text-decoration: none;">support@roayadiamond.com</a>.</p>
                <p style="font-size: 18px; color: #333333; line-height: 1.6;">Thank you for choosing Roaya Diamond. We hope you enjoy your purchase!</p>
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
                <p style="margin: 0;">You are receiving this email because you placed an order on <a href="https://www.roayadiamond.com" style="color: #d4af37; text-decoration: none;">roayadiamond.com</a>.</p>
            </td>
        </tr>
    </table>
</body>
</html>