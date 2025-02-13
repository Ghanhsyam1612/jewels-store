<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Invoice - Roaya Diamond</title>
</head>
<body style="margin: 0; padding: 0; font-family: 'Georgia', serif; background-color: #f9f9f9;">
    <table width="100%" cellpadding="0" cellspacing="0" style="max-width: 600px; margin: 0 auto; background-color: #ffffff; border: 1px solid #e0e0e0;">
        <!-- Header Section -->
        <tr>
            <td style="padding: 30px; text-align: center; background-color: #301419;">
                <img src="{{ asset('images/roaya-logo.png') }}" alt="Roaya Diamond Logo" style="max-width: 150px; height: auto;">
                <h1 style="margin: 20px 0 0; font-size: 24px; color: #ffffff; font-weight: bold;">Order Invoice</h1>
            </td>
        </tr>
        <!-- Invoice Details -->
        <tr>
            <td style="padding: 30px;">
                <p style="font-size: 18px; color: #333333; line-height: 1.6;">Dear [Customer Name],</p>
                <p style="font-size: 18px; color: #333333; line-height: 1.6;">Thank you for shopping with Roaya Diamond. Below is your invoice for Order #[Order Number].</p>

                <p style="font-size: 16px; color: #333333;"><strong>Order Date:</strong> [Order Date]</p>
                <p style="font-size: 16px; color: #333333;"><strong>Payment Method:</strong> [Payment Method]</p>

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
                    <!-- Additional Products -->
                    <tr>
                        <td colspan="2" style="text-align: right; font-size: 16px; color: #333333; font-weight: bold;">Subtotal:</td>
                        <td style="font-size: 16px; color: #333333;">[Subtotal]</td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align: right; font-size: 16px; color: #333333; font-weight: bold;">Shipping:</td>
                        <td style="font-size: 16px; color: #333333;">[Shipping Cost]</td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align: right; font-size: 16px; color: #333333; font-weight: bold;">Tax (VAT/GST):</td>
                        <td style="font-size: 16px; color: #333333;">[Tax Amount]</td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align: right; font-size: 16px; color: #d9534f; font-weight: bold;">Discount:</td>
                        <td style="font-size: 16px; color: #d9534f;">-[Discount]</td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align: right; font-size: 18px; color: #000000; font-weight: bold;">Grand Total:</td>
                        <td style="font-size: 18px; color: #000000; font-weight: bold;">[Total Amount]</td>
                    </tr>
                </table>

                <!-- Billing & Shipping Information -->
                <h2 style="font-size: 20px; color: #333333;">Billing Information</h2>
                <p style="font-size: 16px; color: #333333; background-color: #f4f4f4; padding: 10px; border-radius: 4px;">
                    [Customer Name]<br>
                    [Billing Address]<br>
                    [City, State, ZIP Code]<br>
                    [Country]
                </p>

                <h2 style="font-size: 20px; color: #333333;">Shipping Information</h2>
                <p style="font-size: 16px; color: #333333; background-color: #f4f4f4; padding: 10px; border-radius: 4px;">
                    [Customer Name]<br>
                    [Shipping Address]<br>
                    [City, State, ZIP Code]<br>
                    [Country]
                </p>

                <!-- Payment Confirmation -->
                <p style="font-size: 18px; color: #333333; line-height: 1.6;"><strong>Payment Status:</strong> [Payment Status]</p>

                <!-- View Order Button -->
                <table cellpadding="0" cellspacing="0" style="margin: 30px auto;">
                    <tr>
                        <td style="background-color: #d4af37; padding: 12px 24px; border-radius: 4px; text-align: center;">
                            <a href="[Order Link]" style="font-size: 16px; color: #000000; text-decoration: none; font-weight: bold;">View Your Order</a>
                        </td>
                    </tr>
                </table>

                <p style="font-size: 18px; color: #333333; line-height: 1.6;">If you have any questions, feel free to contact us at <a href="mailto:support@roayadiamond.com" style="color: #d4af37; text-decoration: none;">support@roayadiamond.com</a>.</p>
                <p style="font-size: 18px; color: #333333; line-height: 1.6;">Thank you for shopping with Roaya Diamond. We hope to see you again soon!</p>
                <p style="font-size: 18px; color: #333333; line-height: 1.6;">Warm regards,<br>The Roaya Diamond Team</p>
            </td>
        </tr>
        <!-- Footer Section -->
        <tr>
            <td style="padding: 20px; text-align: center; background-color: #301419; color: #ffffff; font-size: 14px;">
                <p style="margin: 0;">Follow us on:</p>
                <p style="margin: 10px 0;">
                    <a href="https://www.facebook.com/roayadiamond"><img src="https://www.roayadiamond.com/facebook-icon.png" alt="Facebook" style="width: 24px;"></a>
                    <a href="https://www.instagram.com/roayadiamond"><img src="https://www.roayadiamond.com/instagram-icon.png" alt="Instagram" style="width: 24px;"></a>
                </p>
                <p style="margin: 0;">© 2025 Roaya Diamond. All rights reserved.</p>
            </td>
        </tr>
    </table>
</body>
</html>
