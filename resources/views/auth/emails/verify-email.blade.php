<!-- resources/views/emails/verify-email.blade.php -->
<!-- Xác nhận email -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email xác thực</title>
</head>

<body>
   
    <div
        style='padding: 0px; margin: 0px; height: 100%; width: 100%; font-family: Arial, &quot;Times New Roman&quot;, Calibri; text-align:center!important'>
        <div class='container' style='width: 100%; margin-right: auto; margin-left: auto; color: white;'>
            <div class='' style='display:flex;min-height:100vh!important;justify-content: center;'>
                <div class='main'
                    style='background: black; padding: 50px; border-radius: 10px; margin: 0px auto; max-width: 600px; width:100%; max-height: 700px;display: block;font-family: inherit;'>
                    <h2 style='text-align: center;color: white;font-size: 40px;'>Email xác thực</h2>
                    <p style='text-align: center;color: white;'>Xin chào: {{ $user }}</p>
                    <hr style='color: white;'>
                    <div class='payment-info'>
                        <h4 style='text-align: center;color: white; font-size:20px'>Vui lòng ấn vào link để xác thực
                            email</h4>
                        <a href="{{ $verificationLink }}"
                            style='text-align: center;color: #141464; background: white;border-radius: 9px;padding: 10px;font-weight: 900; font-size: 25px;'>Xác
                            thực Email</a>
                        <div>

                            <h5 style='text-align: center;color: white; padding-top:10px;font-size:18px'>Cảm ơn!</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
