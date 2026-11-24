<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $subjectLine ?? 'Notification' }}</title>
</head>
<body style="margin: 0; padding: 0; background-color: #eef2f6; font-family: Arial, Helvetica, sans-serif; color: #1d1d1f;">
    <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color: #eef2f6; margin: 0; padding: 36px 12px;">
        <tr>
            <td align="center">
                <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px; background-color: #ffffff; border: 1px solid #e1e5ea; border-radius: 12px; overflow: hidden;">
                    <tr>
                        <td align="center" style="padding: 26px 32px; background-color: #050a4a;">
                            <img
                                src="{{ asset('logo.png') }}"
                                alt="Trust Wallet"
                                width="260"
                                style="display: block; max-width: 260px; width: 260px; height: auto; border: 0;"
                            >
                        </td>
                    </tr>

                    <tr>
                        <td style="padding: 42px 44px 38px;">
                            <h1 style="margin: 0 0 22px; font-size: 28px; line-height: 1.25; color: #050a4a; font-weight: 700;">
                                {{ $subjectLine ?? 'New update' }}
                            </h1>
                            <div style="font-size: 16px; line-height: 1.7; color: #4a4a4a; margin: 0;">
                                {!! nl2br(e($bodyMessage)) !!}
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding: 0 44px 36px;">
                            <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-top: 1px solid #edf0f3; margin: 0;">
                                <tr>
                                    <td style="padding-top: 22px; font-size: 12px; line-height: 1.6; color: #777e86;">
                                        This email was sent from your account notification service. Never share your recovery phrase or private keys.
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding-top: 14px; font-size: 12px; line-height: 1.6; color: #777e86;">
                                        &copy; {{ date('Y') }} Trust Wallet
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
