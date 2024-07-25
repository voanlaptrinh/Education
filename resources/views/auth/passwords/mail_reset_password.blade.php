<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đặt lại mật khẩu</title>
    <style>
        html,body{
  height:100%;
}
body{
  text-align:center;
}
body:before{
  content:'';
  height:100%;
  display:inline-block;
  vertical-align:middle;
}
button{
  background:#1AAB8A;
  color:#fff;
  border:none;
  position:relative;
  height:60px;
  font-size:1.6em;
  padding:0 2em;
  cursor:pointer;
  transition:800ms ease all;
  outline:none;
}
button:hover{
  background:#fff;
  color:#1AAB8A;
}
button:before,button:after{
  content:'';
  position:absolute;
  top:0;
  right:0;
  height:2px;
  width:0;
  background: #1AAB8A;
  transition:400ms ease all;
}
button:after{
  right:inherit;
  top:inherit;
  left:0;
  bottom:0;
}
button:hover:before,button:hover:after{
  width:100%;
  transition:800ms ease all;
}
    </style>
</head>
<body>
    {{-- <h1>Đặt lại mật khẩu</h1>
    
    <p>Nhấp vào nút bên dưới để đặt lại mật khẩu của bạn:</p>
    
    <a href="{{ $resetLink }}" target="_blank" style="display: inline-block; background-color: #3490dc; color: #ffffff; text-decoration: none; padding: 10px 20px; font-size: 16px; border-radius: 5px; margin-top: 10px;">Đặt lại mật khẩu</a>
    
    <p>Nếu bạn không yêu cầu đặt lại mật khẩu thì không cần thực hiện thêm hành động nào.</p>
    
    <p>Cảm ơn bạn,<br>
    {{ config('app.name') }}</p> --}}




    <div
    style='padding: 0px; margin: 0px; height: 100%; width: 100%; font-family: Arial, &quot;Times New Roman&quot;, Calibri; text-align:center!important'>
    <div class='container' style='width: 100%; margin-right: auto; margin-left: auto; color: white;'>
        <div class='' style='display:flex;min-height:100vh!important;justify-content: center;'>
            <div class='main'
                style='background: black; padding: 50px; border-radius: 10px; margin: 0px auto; max-width: 600px; width:100%; max-height: 700px;display: block;font-family: inherit;'>
                <h2 style='text-align: center;color: white;font-size: 25px;'>Đặt lại mật khẩu</h2>
             
                <hr style='color: white;'>
                <div class='payment-info'>
                    <h4 style='text-align: center;color: white; font-size:20px'>Nhấp vào nút bên dưới để đặt lại mật khẩu của bạn:</h4>
                    <a href="{{ $resetLink }}"
                        style='text-align: center;color: #141464; background: white;border-radius: 9px;padding: 10px;font-weight: 900; font-size: 25px;'>Đặt lại mật khẩu</a>
                    <div>
                        <p style='text-align: center;;color: white;padding-top:25px'>Nếu bạn không yêu cầu đặt lại mật khẩu thì không cần thực hiện thêm hành động nào.</p>
                        <h5 style='text-align: center;color: white; padding-top:10px;font-size:18px'>Cảm ơn! <br>
                           </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
