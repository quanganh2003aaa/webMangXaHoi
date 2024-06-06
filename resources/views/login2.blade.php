<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Đăng ký - đăng nhập tài khoản</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    {{-- icon --}}

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Cardo:ital,wght@0,400;0,700;1,400&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="assets/css/login-main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
</head>

<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="{{ route('postSignUp') }}" method="POST">
                @csrf
                <h1 style="color: #27a776;">Tạo tài khoản</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>Sử dụng email của bạn để đăng ký</span>
                <input type="text" placeholder="Tên của bạn" name="username" required />
                <input type="email" placeholder="Email" name="email" required />
                <input type="password" placeholder="Mật khẩu" name="password" required />
                <button type="submit">Đăng ký</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="{{ route('postSignIn') }}" method="POST">
                @csrf
                <h1 style="color: #27a776;">Đăng nhập</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>Sử dụng tài khoản của bạn để đăng nhập</span>
                @if ($errors->has('email'))
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <input type="email" placeholder="Email" name="email" required class="email-error" />
                @else
                    <input type="email" placeholder="Email" name="email" required />
                @endif

                @if ($errors->has('password'))
                    {{-- <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                            @endforeach
                    </div> --}}
                    <input type="password" placeholder="{{$errors->first('password')}}" name="password" required class="password-error" />
                @else
                    <input type="password" placeholder="Mật khẩu" name="password" required />
                @endif
                <a href="#">Quên mật khẩu?</a>
                <button>Đăng nhập</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1 style="font-size: 30px">Chào mừng trở lại!</h1>
                    <p>Để duy trì kết nối với HopeSo vui lòng đăng nhập bằng thông tin của bạn</p>
                    <button class="ghost" id="signIn">Đăng nhập</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Xin chào!</h1>
                    <p>Nhập thông tin cá nhân của bạn và bắt đầu hành trình với chúng tôi</p>
                    <button class="ghost" id="signUp">Đăng ký</button>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/login-main.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        @if (session()->has('success'))
            toastr.success('{{ session()->get('success') }}')
        @elseif (session()->has('error'))
            toastr.error('{{ session()->get('error') }}')
        @endif
    </script>
</body>

</html>
