<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>New Contact Form Submission</title>
</head>
<body style="margin:0; padding:0; background-color:#f4f4f4; font-family: Arial, sans-serif;">

    <table width="100%" cellpadding="0" cellspacing="0" style="background-color:#f4f4f4; padding:30px 0;">
        <tr>
            <td align="center">
                <table width="600" cellpadding="0" cellspacing="0" style="background-color:#ffffff; border-radius:8px; overflow:hidden; box-shadow:0 2px 6px rgba(0,0,0,0.1);">

                    {{-- Header --}}
                    <tr>
                        <td style="background-color:#2c3e50; padding:20px 30px;">
                            <h2 style="color:#ffffff; margin:0; font-size:20px;">📩 New Contact Form Submission</h2>
                        </td>
                    </tr>

                    {{-- Body --}}
                    <tr>
                        <td style="padding:30px;">

                            <table width="100%" cellpadding="10" cellspacing="0" style="border-collapse:collapse;">
                                <tr>
                                    <td style="width:140px; font-weight:bold; color:#555; vertical-align:top;">Full Name</td>
                                    <td style="color:#333;">{{ $data['fullname'] }}</td>
                                </tr>
                                <tr style="background-color:#f9f9f9;">
                                    <td style="font-weight:bold; color:#555; vertical-align:top;">Email</td>
                                    <td style="color:#333;">
                                        <a href="mailto:{{ $data['email'] }}" style="color:#2c3e50; text-decoration:none;">
                                            {{ $data['email'] }}
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-weight:bold; color:#555; vertical-align:top;">Phone</td>
                                    <td style="color:#333;">{{ $data['phone'] }}</td>
                                </tr>
                                <tr style="background-color:#f9f9f9;">
                                    <td style="font-weight:bold; color:#555; vertical-align:top;">Subject</td>
                                    <td style="color:#333;">{{ $data['subject'] }}</td>
                                </tr>
                                <tr>
                                    <td style="font-weight:bold; color:#555; vertical-align:top;">Service</td>
                                    <td style="color:#333;">{{ $data['service'] }}</td>
                                </tr>
                                <tr style="background-color:#f9f9f9;">
                                    <td style="font-weight:bold; color:#555; vertical-align:top;">Budget</td>
                                    <td style="color:#333;">{{ $data['budget'] }}</td>
                                </tr>
                                <tr>
                                    <td style="font-weight:bold; color:#555; vertical-align:top;">Message</td>
                                    <td style="color:#333; white-space:pre-line;">{{ $data['message'] }}</td>
                                </tr>
                            </table>

                        </td>
                    </tr>

                    {{-- Footer --}}
                    <tr>
                        <td style="background-color:#f4f4f4; padding:15px 30px; text-align:center;">
                            <p style="margin:0; font-size:12px; color:#888;">
                                Ye email aapki website ke contact form se automatically bheji gayi hai.
                            </p>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>

</body>
</html>