<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $subjectLine ?? 'Notification' }}</title>
</head>
<body style="margin: 0; padding: 0; background-color: #f3f6fa; font-family: Arial, Helvetica, sans-serif; color: #172b4d;">
    <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color: #f3f6fa; margin: 0; padding: 32px 12px;">
        <tr>
            <td align="center">
                <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px; background-color: #ffffff; border: 1px solid #dde5ef; border-radius: 16px; overflow: hidden;">
                    <tr>
                        <td align="center" style="padding: 24px 32px; background-color: #05264a;">
                            <img
                                src="{{ asset('logo.png') }}"
                                alt=""
                                width="150"
                                style="display: block; max-width: 150px; height: auto; border: 0;"
                            >
                        </td>
                    </tr>

                    <tr>
                        <td style="padding: 36px 32px 28px;">
                            <div style="font-size: 12px; line-height: 1.5; letter-spacing: 0.12em; text-transform: uppercase; color: #6b7c93; margin: 0 0 12px;">
                                Account message
                            </div>
                            <h1 style="margin: 0 0 18px; font-size: 28px; line-height: 1.3; color: #05264a; font-weight: 700;">
                                {{ $subjectLine ?? 'New update' }}
                            </h1>
                            <div style="font-size: 16px; line-height: 1.75; color: #43566d; margin: 0;">
                                {!! nl2br(e($bodyMessage)) !!}
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding: 0 32px 28px;">
                            <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-top: 1px solid #e8eef5; margin: 0;">
                                <tr>
                                    <td style="padding-top: 20px; font-size: 12px; line-height: 1.6; color: #7a8999;">
                                        Do not share passwords or recovery phrases.
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
