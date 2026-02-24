<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
</head>

<body
    style="margin: 0; padding: 0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f1f5f9;">
    <div
        style="max-width: 600px; margin: 20px auto; background-color: #ffffff; border-radius: 16px; overflow: hidden; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);">

        <div style="background-color: #0f172a; padding: 30px; text-align: center;">
            <h1 style="color: #3b82f6; margin: 0; font-size: 24px; text-transform: uppercase; letter-spacing: 2px;">
                Alexas Engineering
            </h1>
            <p
                style="color: #94a3b8; margin: 5px 0 0; font-size: 12px; text-transform: uppercase; letter-spacing: 1px;">
                SWIM System: Technical Data Transmission
            </p>
        </div>

        <div style="padding: 40px; color: #1e293b;">
            <h2
                style="font-size: 18px; border-bottom: 2px solid #e2e8f0; padding-bottom: 10px; margin-bottom: 25px; color: #2563eb;">
                New Inquiry Received
            </h2>

            <table style="width: 100%; border-collapse: collapse; margin-bottom: 30px;">
                <tr>
                    <td style="padding: 8px 0; font-weight: bold; width: 140px; color: #64748b; font-size: 14px;">CLIENT
                        NAME:</td>
                    <td style="padding: 8px 0; color: #0f172a; font-size: 14px;">{{ $mailData['name'] }}</td>
                </tr>

                <tr>
                    <td style="padding: 8px 0; font-weight: bold; color: #64748b; font-size: 14px;">EMAIL ADDRESS:</td>
                    <td style="padding: 8px 0; font-size: 14px;">
                        <a href="mailto:{{ $mailData['email'] }}" style="color: #3b82f6; text-decoration: none;">
                            {{ $mailData['email'] }}
                        </a>
                    </td>
                </tr>

                <tr>
                    <td style="padding: 8px 0; font-weight: bold; color: #64748b; font-size: 14px;">CONTACT NO:</td>
                    <td style="padding: 8px 0; color: #0f172a; font-size: 14px;">{{ $mailData['contact_number'] }}</td>
                </tr>

                <tr>
                    <td style="padding: 8px 0; font-weight: bold; color: #64748b; font-size: 14px;">SUBJECT:</td>
                    <td style="padding: 8px 0; color: #0f172a; font-size: 14px;">{{ $mailData['subject'] }}</td>
                </tr>
            </table>

            <p
                style="font-weight: bold; font-size: 14px; color: #64748b; margin-bottom: 10px; text-transform: uppercase;">
                Technical Message Payload:
            </p>

            <div
                style="background-color: #f8fafc; padding: 20px; border-radius: 12px; border-left: 4px solid #3b82f6; color: #334155; font-size: 15px; line-height: 1.6; white-space: pre-wrap;">
                {{ $mailData['message'] }}
            </div>
        </div>

        <div style="background-color: #f8fafc; padding: 20px; text-align: center; border-top: 1px solid #e2e8f0;">
            <p style="font-size: 10px; color: #94a3b8; margin: 0; text-transform: uppercase; letter-spacing: 1.5px;">
                Transmission Protocol: Secure IoT Handshake
            </p>
            <p style="font-size: 9px; color: #cbd5e1; margin-top: 5px;">
                Calauan, Laguna Technical Headquarters | Operational Unit
            </p>
        </div>

    </div>
</body>

</html>