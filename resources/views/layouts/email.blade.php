<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body style="display: block; font-family:sans-serif">
  <table style="width: 600px; height: auto; margin: auto;">
    <tr>
      <td colspan="2" style="border-bottom: 1px solid #bcbbbb;">
        <header style="display: flex; padding: 10px 0; ">
          <h1 style="margin: 0; color: #2aa878;">Website HopeSo</h1>
        </header>
      </td>
    </tr>
    <tr>
      <td colspan="2">
        <article>
          <h2>Xin chào!</h2>
          <p>Cảm ơn bạn đã dành thời gian để đăng ký tài khoản</p>
          <p>Dưới đây là mã xác nhận:</p>
        </article>
      </td>
    </tr>
    <tr>
      <td colspan="2" style="height: 50px;border-bottom: 1px solid #bcbbbb;">
        <div style="background-color: #2aa878; width: 30%; margin: auto; text-align: center;
        border-radius: 10px;">
          <p style="font-size: 35px; font-weight: 700; color: #fff; margin: 0 0 30px 0;
          ">{{$user['otp']}}</p>
        </div>
      </td>
    </tr>
    <tr>
      <td style="text-align: center;">
        <p style="margin: 5px 0; font-size: 13px;">Từ</p>
        <h5 style="margin: 0;">HopeSo</h5>
        <p style="font-size: 10px; margin: 15px 0 0;">Email gửi đến <span style="color: #2aa878;">caocak47@gmail.com</span></p>
        <p style="font-size: 10px; margin: 2px 0;">Để bảo vệ tài khoản của bạn, vui lòng không chuyển tiếp email này.</p>
      </td>
    </tr>
  </table>
</body>
</html>

