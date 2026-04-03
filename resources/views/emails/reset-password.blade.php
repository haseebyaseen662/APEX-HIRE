<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" lang="en">
<head>
    <meta content="width=device-width" name="viewport" />
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type" />
    <meta name="x-apple-disable-message-reformatting" />
    <meta content="IE=edge" http-equiv="X-UA-Compatible" />
    <meta content="telephone=no,address=no,email=no,date=no,url=no" name="format-detection" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100..800&display=swap" rel="stylesheet">
    <title>Reset Your Password</title>
</head>
<body style="margin:0; padding:0; background-color:#ffffff; font-family:'Sora', Arial, Helvetica, -apple-system, BlinkMacSystemFont, sans-serif; color:#0f172a;">
    <div style="display:none; overflow:hidden; line-height:1px; opacity:0; max-height:0; max-width:0;">
        Reset your Apex Hire password with the secure link inside this email.
    </div>

    <table border="0" width="100%" cellpadding="0" cellspacing="0" role="presentation" align="center" style="background-color:#ffffff;">
        <tbody>
            <tr>
                <td align="center" style="padding:48px 20px;">
                    <table width="100%" border="0" cellpadding="0" cellspacing="0" role="presentation" style="max-width:600px; margin:0 auto;">
                        <tbody>
                            <tr>
                                <td align="center" style="padding-bottom:18px;">
                                    <img
                                        alt="Apex Hire logo"
                                        height="50"
                                        src="{{ config('app.url') }}/public/website/assets/images/white-logo.png"
                                        style="display:block; outline:none; border:none; text-decoration:none; height:50px; width:auto; margin:0 auto;"
                                    />
                                </td>
                            </tr>

                            <tr>
                                <td align="center" style="padding-bottom:16px;">
                                    <h1 style="margin:0; font-size:30px; line-height:1.25; font-weight:700; color:#0f172a;">
                                        Reset Your Password
                                    </h1>
                                </td>
                            </tr>

                            <tr>
                                <td align="center" style="padding-bottom:28px;">
                                    <p style="margin:0; max-width:460px; font-size:15px; line-height:1.8; color:#475569; text-align:center;">
                                        We received a request to reset your Apex Hire password. Use the button below to choose a new password.
                                    </p>
                                </td>
                            </tr>

                            <tr>
                                <td align="center" style="padding-bottom:28px;">
                                    <a
                                        href="{{ $resetUrl }}"
                                        target="_blank"
                                        rel="noopener noreferrer nofollow"
                                        style="display:inline-block; padding:14px 28px; background-color:#d946ef; color:#ffffff; text-decoration:none; font-size:15px; font-weight:700; border-radius:999px;"
                                    >
                                        Reset Password
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td align="center" style="padding-bottom:10px;">
                                    <p style="margin:0; font-size:14px; line-height:1.8; color:#64748b; text-align:center;">
                                        If the button does not work, click this reset link:
                                    </p>
                                </td>
                            </tr>

                            <tr>
                                <td align="center" style="padding-bottom:36px;">
                                    <a
                                        href="{{ $resetUrl }}"
                                        target="_blank"
                                        rel="noopener noreferrer nofollow"
                                        style="color:#d946ef; font-size:13px; line-height:1.8; word-break:break-all; text-decoration:underline;"
                                    >
                                        {{ $resetUrl }}
                                    </a>
                                </td>
                            </tr>

                            <tr>
                                <td align="center" style="padding-bottom:18px;">
                                    <p style="margin:0; font-size:13px; line-height:1.8; color:#64748b; text-align:center;">
                                        This password reset link will expire in {{ config('auth.passwords.'.config('auth.defaults.passwords').'.expire', 60) }} minutes.
                                    </p>
                                </td>
                            </tr>

                            <tr>
                                <td align="center" style="border-top:1px solid #e2e8f0; padding-top:20px;">
                                    <p style="margin:0 0 8px; font-size:12px; line-height:1.7; color:#94a3b8;">
                                        Copyright Reserved 2026
                                    </p>
                                    <p style="margin:0; font-size:12px; line-height:1.7; color:#94a3b8;">
                                        Apex Hire was developed by Muhammad Haseeb
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>
</body>
</html>
