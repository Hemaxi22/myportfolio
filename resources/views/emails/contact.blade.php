<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inquiry | Hemaxi Rathod</title>
    <style>
        body { font-family: 'Inter', 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background-color: #020617; margin: 0; padding: 0; -webkit-font-smoothing: antialiased; }
        .wrapper { width: 100%; table-layout: fixed; background-color: #020617; padding-top: 40px; padding-bottom: 40px; }
        .main { background-color: #0f172a; margin: 0 auto; width: 100%; max-width: 600px; border-spacing: 0; color: #f1f5f9; border-radius: 24px; overflow: hidden; border: 1px solid rgba(255,255,255,0.1); box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5); }
        .header { background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%); padding: 50px 20px; text-align: center; color: #ffffff; position: relative; }
        .header h1 { margin: 0; font-size: 28px; font-weight: 800; letter-spacing: -1px; text-shadow: 0 2px 4px rgba(0,0,0,0.2); }
        .header p { margin: 8px 0 0; opacity: 0.85; font-size: 12px; text-transform: uppercase; letter-spacing: 3px; font-weight: 600; }
        .content { padding: 45px 35px; background: radial-gradient(circle at top right, rgba(99, 102, 241, 0.05), transparent); }
        .info-card { background: rgba(30, 41, 59, 0.5); border-radius: 16px; border: 1px solid rgba(255,255,255,0.05); padding: 25px; margin-bottom: 30px; }
        .info-table { width: 100%; border-collapse: collapse; }
        .info-table td { padding: 10px 0; }
        .label { font-size: 11px; font-weight: 700; color: #a78bfa; text-transform: uppercase; letter-spacing: 1.5px; width: 100px; }
        .value { font-size: 15px; color: #e2e8f0; font-weight: 500; }
        .message-label { font-size: 11px; font-weight: 700; color: #a78bfa; text-transform: uppercase; letter-spacing: 1.5px; margin-bottom: 12px; display: block; }
        .message-box { background: rgba(15, 23, 42, 0.8); border-radius: 12px; padding: 25px; border-left: 3px solid #8b5cf6; position: relative; }
        .message-text { font-size: 16px; line-height: 1.7; color: #cbd5e1; font-style: italic; }
        .footer { text-align: center; padding: 30px; font-size: 12px; color: #64748b; letter-spacing: 0.5px; }
        .btn-container { text-align: center; margin-top: 35px; }
        .btn { display: inline-block; padding: 16px 32px; background: linear-gradient(90deg, #6366f1, #8b5cf6); color: #ffffff !important; text-decoration: none; border-radius: 12px; font-weight: 700; font-size: 15px; box-shadow: 0 10px 20px rgba(99, 102, 241, 0.3); }
        @media screen and (max-width: 600px) { .content { padding: 25px; } .main { border-radius: 0; } .label { width: 80px; } }
    </style>
</head>
<body>
    <center class="wrapper">
        <table class="main" width="100%">
            <tr>
                <td class="header">
                    <p>Portfolio Alert</p>
                    <h1>New Connection</h1>
                </td>
            </tr>
            <tr>
                <td class="content">
                    <div class="info-card">
                        <table class="info-table">
                            <tr>
                                <td class="label">From</td>
                                <td class="value">{{ $data['name'] }}</td>
                            </tr>
                            <tr>
                                <td class="label">Email</td>
                                <td class="value"><a href="mailto:{{ $data['email'] }}" style="color: #818cf8; text-decoration: none;">{{ $data['email'] }}</a></td>
                            </tr>
                            @if(!empty($data['phone']))
                            <tr>
                                <td class="label">Phone</td>
                                <td class="value">{{ $data['phone'] }}</td>
                            </tr>
                            @endif
                            <tr>
                                <td class="label">Subject</td>
                                <td class="value" style="color: #ffffff; font-weight: 600;">{{ $data['subject'] }}</td>
                            </tr>
                        </table>
                    </div>

                    <span class="message-label">Message details</span>
                    <div class="message-box">
                        <div class="message-text">
                            &ldquo;{{ $data['message'] }}&rdquo;
                        </div>
                    </div>

                    <div class="btn-container">
                        <a href="mailto:{{ $data['email'] }}" class="btn">Respond to Inquiry</a>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="footer">
                    Sent from <strong>Hemaxi Rathod</strong> Portfolio System<br>
                    &copy; 2026 • Backend Architecture
                </td>
            </tr>
        </table>
    </center>
</body>
</html>
