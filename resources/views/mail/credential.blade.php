<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dokan Approved</title>
</head>
<body style="margin:0; padding:0; background-color:#f8f9f8; font-family:Arial, sans-serif; line-height:1.6; color:#2D2D2D;">

    <div style="max-width:600px; margin:30px auto; background:#FFFFFF; border-radius:10px; overflow:hidden; border:1px solid #ddd;">
        
        <!-- Header -->
        <div style="background:#C0392B; padding:30px; text-align:center; color:white;">
            <h1 style="margin:0; font-size:24px;">🎉 Your Dokan is Approved!</h1>
            <p style="margin:8px 0 0;">Welcome to HamroPasal</p>
        </div>

        <!-- Content -->
        <div style="padding:30px;">
            <p>Hello <strong>{{ $data['name'] ?? 'Dokan Owner' }}</strong>,</p>

            <p>Your dokan has been successfully approved. Here are your login details:</p>

            <!-- Credentials -->
            <div style="background:#f9f9f9; border:1px solid #C0392B; border-radius:8px; padding:20px; margin:20px 0;">
                
                <p><strong>Email:</strong></p>
                <p style="background:#fff; padding:10px; border:1px solid #ddd;">
                    {{ $data['email'] }}
                </p>

                <p><strong>Password:</strong></p>
                <p style="background:#fff; padding:10px; border:1px solid #ddd; color:#C0392B;">
                    {{ $password }}
                </p>

                <p style="color:red; font-size:13px;">
                    ⚠️ Please change your password after your first login.
                </p>
            </div>

            <!-- Button -->
            <div style="text-align:center; margin:25px 0;">
                <a href="{{ url('/dokan/login') }}" 
                   style="background:#C0392B; color:white; padding:12px 25px; text-decoration:none; border-radius:5px;">
                    Login to Dashboard
                </a>
            </div>

            <p style="text-align:center; font-size:14px;">
                If you face any issues, contact support.
            </p>
        </div>

        <!-- Footer -->
        <div style="background:#f1f1f1; padding:20px; text-align:center; font-size:12px;">
            <p><strong>HamroPasal</strong></p>
            <p>This is an automated email. Do not share your password.</p>
        </div>

    </div>

</body>
</html>