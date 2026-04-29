<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Dokan Registration</title>
</head>
<body style="margin:0; padding:0; background-color:#f8f9f8; font-family:'DM Sans', system-ui, sans-serif; line-height:1.6; color:#2D2D2D;">
    <div style="max-width:600px; margin:30px auto; background:#FFFFFF; border-radius:16px; overflow:hidden; box-shadow:0 10px 30px rgba(0,0,0,0.08); border:1px solid #E5E7EB;">
        
        <!-- Header -->
        <div style="background:linear-gradient(135deg, #C0392B, #96281B); padding:35px 40px; text-align:center; color:white;">
            <h1 style="margin:0; font-size:28px; font-weight:700; font-family:'Playfair Display', serif;">New Dokan Registration</h1>
            <p style="margin:8px 0 0; opacity:0.95; font-size:16px;">A new vendor has requested to join HamroPasal</p>
        </div>

        <!-- Content -->
        <div style="padding:40px;">
            <p style="font-size:16px; margin-bottom:25px;">Hello Admin,</p>
            
            <p style="margin-bottom:25px;">
                A new <strong style="color:#C0392B;">Dokan</strong> registration has been received. Here are the details:
            </p>

            <div style="background-color:#FAFAF8; border:1px solid #E5E7EB; border-radius:12px; padding:25px; margin-bottom:30px;">
                <div style="display:flex; margin-bottom:16px;">
                    <div style="width:140px; font-weight:600; color:#2C3E50;">Dokan Name</div>
                    <div style="flex:1; font-weight:500;">{{ $dokan->name }}</div>
                </div>
                <div style="display:flex; margin-bottom:16px;">
                    <div style="width:140px; font-weight:600; color:#2C3E50;">Email</div>
                    <div style="flex:1; font-weight:500;">{{ $dokan->email }}</div>
                </div>
                <div style="display:flex; margin-bottom:16px;">
                    <div style="width:140px; font-weight:600; color:#2C3E50;">Contact No.</div>
                    <div style="flex:1; font-weight:500;">{{ $dokan->contact_no }}</div>
                </div>
                <div style="display:flex;">
                    <div style="width:140px; font-weight:600; color:#2C3E50;">Registered On</div>
                    <div style="flex:1; font-weight:500;">{{ $dokan->created_at->format('d F Y, h:i A') }}</div>
                </div>
            </div>

            @if($dokan->message)
            <div style="background:white; border-left:5px solid #C0392B; padding:20px; margin:25px 0; border-radius:8px; font-style:italic; color:#6B7280;">
                <strong style="color:#C0392B;">Message from Dokan:</strong><br><br>
                {{ $dokan->message }}
            </div>
            @endif

            <div style="text-align:center; margin-top:35px;">
                <a href="{{ url('/admin/dokans') }}" 
                   style="display:inline-block; background-color:#C0392B; color:white; padding:14px 32px; text-decoration:none; border-radius:8px; font-weight:600;">
                    Review Dokan Request
                </a>
            </div>
        </div>

        <!-- Footer -->
        <div style="background-color:#F3F4F0; padding:25px 40px; text-align:center; font-size:13px; color:#6B7280; border-top:1px solid #E5E7EB;">
            <p>This is an automated notification from <strong>HamroPasal</strong>.</p>
            <p style="margin-top:8px;">Please review the request as soon as possible.</p>
        </div>
    </div>
</body>
</html>