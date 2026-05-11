<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waitlist Confirmation – Apex Hire</title>
</head>
<body style="margin:0; padding:0; background-color:#100B00; font-family: 'Inter', 'Helvetica Neue', Arial, sans-serif; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%;">
    <style>
        /* In-body style block for Gmail + responsive */
        @media only screen and (max-width: 600px) {
            .email-inner { padding: 32px 16px !important; }
            .logo { font-size: 20px !important; }
            .headline { font-size: 28px !important; }
            .body-text { font-size: 16px !important; }
            .cta-button td { padding: 14px 28px !important; }
            .cta-button a { font-size: 15px !important; }
            .footer-note, .footer-brand { font-size: 12px !important; }
        }
    </style>

    <table role="presentation" cellpadding="0" cellspacing="0" border="0" width="100%" style="background-color:#100B00;">
        <tr>
            <td align="center" style="padding: 40px 16px;">
                <table role="presentation" cellpadding="0" cellspacing="0" border="0" width="100%" style="max-width:600px; background-color:#181308; border:1px solid rgba(239,255,200,0.1); border-radius:8px; margin:0 auto;">
                    <tr>
                        <td class="email-inner" style="padding: 48px 48px 32px 48px; text-align:center;">

                            <!-- Logo -->
                            <table role="presentation" cellpadding="0" cellspacing="0" border="0" width="100%">
                                <tr>
                                    <td align="center" style="padding-bottom: 32px;">
                                        <span class="logo" style="font-family: 'Unbounded', 'Helvetica Neue', Arial, sans-serif; font-weight:900; font-size:24px; color:#85CB33; letter-spacing:-0.5px; text-transform:uppercase;">APEX HIRE</span>
                                    </td>
                                </tr>
                            </table>

                            <!-- Checkmark (image for maximum compatibility) -->
                            <table role="presentation" cellpadding="0" cellspacing="0" border="0" width="100%">
                                <tr>
                                    <td align="center" style="padding-bottom: 32px;">
                                        <img src="{{ asset('assets/images/check.svg') }}" width="72" height="72" alt="checkmark" style="display:block; border:0; outline:none;">
                                    </td>
                                </tr>
                            </table>

                            <!-- Headline -->
                            <table role="presentation" cellpadding="0" cellspacing="0" border="0" width="100%">
                                <tr>
                                    <td align="center" style="padding-bottom: 16px;">
                                        <h1 class="headline" style="font-family: 'Inter', 'Helvetica Neue', Arial, sans-serif; font-weight:700; font-size:32px; color:#EFFFC8; margin:0; line-height:1.2; -webkit-font-smoothing: antialiased;">
                                            You're on the list.
                                        </h1>
                                    </td>
                                </tr>
                            </table>

                            <!-- Body -->
                            <table role="presentation" cellpadding="0" cellspacing="0" border="0" width="100%">
                                <tr>
                                    <td align="center" style="padding-bottom: 32px;">
                                        <p class="body-text" style="font-family: 'Inter', 'Helvetica Neue', Arial, sans-serif; font-weight:400; font-size:18px; color:rgba(239,255,200,0.80); margin:0; line-height:1.6; -webkit-font-smoothing: antialiased; max-width:480px;">
                                            Thanks for joining the waitlist. At Apex Hire, we're building a curated network of vetted startup operators to fix the broken freelance market. We're glad to have you with us.
                                        </p>
                                    </td>
                                </tr>
                            </table>

                            <!-- CTA (bulletproof button) -->
                            <table role="presentation" cellpadding="0" cellspacing="0" border="0" width="100%">
                                <tr>
                                    <td align="center" style="padding-bottom: 32px;">
                                        <table role="presentation" cellpadding="0" cellspacing="0" border="0" style="display:inline-block;">
                                            <tr>
                                                <td class="cta-button" align="center" style="background-color:#85CB33; border-radius:4px; padding:16px 32px;">
                                                    <a href="{{ config('app.url') }}" target="_blank" style="font-family: 'Inter', 'Helvetica Neue', Arial, sans-serif; font-weight:600; font-size:16px; color:#100B00; text-decoration:none; display:inline-block; -webkit-font-smoothing: antialiased;">
                                                        Visit Apex Hire
                                                    </a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>

                            <!-- Divider & Footer -->
                            <table role="presentation" cellpadding="0" cellspacing="0" border="0" width="100%">
                                <tr>
                                    <td style="border-top:1px solid rgba(239,255,200,0.1); padding-top:32px;">
                                        <p class="footer-note" style="font-family: 'Inter', 'Helvetica Neue', Arial, sans-serif; font-weight:400; font-size:16px; color:rgba(239,255,200,0.60); margin:0 0 8px 0; -webkit-font-smoothing: antialiased;">
                                            We'll reach out personally when the network opens.
                                        </p>
                                        <p class="footer-brand" style="font-family: 'Inter', 'Helvetica Neue', Arial, sans-serif; font-weight:600; font-size:12px; color:rgba(239,255,200,0.60); margin:0; text-transform:uppercase; letter-spacing:0.05em; -webkit-font-smoothing: antialiased;">
                                            Apex Hire – Built for founders, by founders.
                                        </p>
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