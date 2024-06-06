@extends('master')
@section('contents')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex flex-column justify-content-center align-items-center" data-aos="fade"
        data-aos-delay="1500">
        <div class="container-fluid" style="padding: 40px 12px 0">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="cardHero cardPostPicture">
                        <div class="title-cardPostPicture">
                            <span>Đăng bài viết</span>
                        </div>
                        <div style="display: grid; justify-items: center">
                            <div class="line"></div>
                        </div>
                        <div class="cardPostPicture-part1">
                            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                style="border: none; background-color: white;  width: 100%; display: flex;">
                                <div style="flex:0.5 ;padding: 5px 10px 5px 5px">
                                    <a href="#">
                                        <img src="assets/img/gallery/gallery-1.jpg" alt="">
                                    </a>
                                </div>
                                <div style="flex: 11; padding: 5px 10px 5px 5px">
                                    <div class="part1-content">
                                        <input type="text" placeholder="Bạn đang nghĩ gì thế??">
                                    </div>
                                </div>
                            </button>
                        </div>

                        <div class="cardPostPicture-part2" style="display: flex">
                            <div class="postImg">
                                <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                    style="border: none; background-color: white;  width: 100%;">
                                    <div class="postImg-button">
                                        <div class="">
                                            <i class="bi bi-images"></i>
                                            <span>Tải ảnh lên</span>
                                        </div>
                                    </div>
                                </button>
                            </div>
                            <div class="postImg">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    Tạo bài viết
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="cardHero cardNoti">
                        <div class="title-noti">
                            <span>Thông báo</span>
                        </div>
                        <div style="display: grid; justify-items: center">
                            <div class="line"></div>
                        </div>
                        <div class="content-noti">
                            <div class="list-group list-noti">
                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between row">
                                        <div class="col-2" style="padding: 5px 5px 0 20px">
                                            <img src="assets/img/gallery/gallery-1.jpg" alt=""
                                                style="width: 35px;
                                        height: 35px;
                                        border-radius: 50%;">
                                        </div>
                                        <div class="col-10 row" style="padding: 0">
                                            <div class="col-12" style="padding: 0">
                                                <h5 class="mb-1" style="font-size: 17px; font-weight: 500;">Hope So
                                                    đã đăng bài viết mới</h5>
                                            </div>
                                            <div class="col-12" style="padding: 0">
                                                <small>3 days ago</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between row">
                                        <div class="col-2" style="padding: 5px 5px 0 20px">
                                            <img src="assets/img/gallery/gallery-1.jpg" alt=""
                                                style="width: 35px;
                                        height: 35px;
                                        border-radius: 50%;">
                                        </div>
                                        <div class="col-10 row" style="padding: 0">
                                            <div class="col-12" style="padding: 0">
                                                <h5 class="mb-1" style="font-size: 17px; font-weight: 500;">Hope So
                                                    đã đăng bài viết mới</h5>
                                            </div>
                                            <div class="col-12" style="padding: 0">
                                                <small>3 days ago</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between row">
                                        <div class="col-2" style="padding: 5px 5px 0 20px">
                                            <img src="assets/img/gallery/gallery-1.jpg" alt=""
                                                style="width: 35px;
                                        height: 35px;
                                        border-radius: 50%;">
                                        </div>
                                        <div class="col-10 row" style="padding: 0">
                                            <div class="col-12" style="padding: 0">
                                                <h5 class="mb-1" style="font-size: 17px; font-weight: 500;">Hope So
                                                    đã đăng bài viết mới dsfsdfdf dsfsdf sdfssf</h5>
                                            </div>
                                            <div class="col-12" style="padding: 0">
                                                <small>3 days ago</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                                <a href="#" class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between row">
                                        <div class="col-2" style="padding: 5px 5px 0 20px">
                                            <img src="assets/img/gallery/gallery-1.jpg" alt=""
                                                style="width: 35px;
                                        height: 35px;
                                        border-radius: 50%;">
                                        </div>
                                        <div class="col-10 row" style="padding: 0">
                                            <div class="col-12" style="padding: 0">
                                                <h5 class="mb-1" style="font-size: 17px; font-weight: 500;">Hope So
                                                    đã đăng bài viết mới dsfsdfdf dsfsdf sdfssf</h5>
                                            </div>
                                            <div class="col-12" style="padding: 0">
                                                <small>3 days ago</small>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="cardHero">
                        <div class="title-function">
                            <span>Hoạt động</span>
                        </div>

                        <div style="display: grid; justify-items: center">
                            <div class="line"></div>
                        </div>

                        <div class="list-function row">
                            <div class="col-12 list-function-part">
                                <a href="#">
                                    <div class="avatar-function">
                                        <img src="assets/img/gallery/gallery-1.jpg" alt=""
                                            style="width: 50px;
                                        height: 50px;
                                        border-radius: 50%;">
                                    </div>
                                    <div class="name-function">
                                        <span>{{ Auth::user()->username }}</span>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 list-function-part" style="padding-top: 10px">
                                <form action="{{ route('logout') }}" style="width: 80%" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-primary">Đăng xuất</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Hero Section -->



    <main id="main" data-aos="fade" data-aos-delay="1500">

        <!-- ======= Gallery Section ======= -->
        <section id="gallery" class="gallery">
            <div class="container-fluid">
                <div class="row gy-4 justify-content-center">
                    <div class="col-xl-3 col-lg-4 col-md-6 ">
                        <div class="main-part1">
                            @foreach ($part1s as $part1)
                                <div class="gallery-item post-card">
                                    <img loading="lazy" src="{{ asset($part1->imgPost) }}" class="img-fluid"
                                        alt="">
                                    <div class="gallery-links d-flex align-items-center justify-content-center">
                                        <a href="{{ asset($part1->imgPost) }}" title="Gallery 4"
                                            class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                        <button type="button" id="singlePost" class="btn btn-primary"
                                            data-bs-toggle="modal" data-bs-target="#exampleModal-singlePost"
                                            data-id="{{ $part1->id }}"
                                            style="background-color: rgba(0,0,0,0);
                                        border: none;
                                        color: rgba(255, 255, 255, 0.5);">
                                            <i class="bi bi-link-45deg" style="font-size: 25px;"></i>
                                        </button>
                                    </div>
                                </div>
                            @endforeach


                        </div>
                    </div><!-- End Gallery Item -->


                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="main-part2">
                            @foreach ($part2s as $part2)
                                <div class="gallery-item post-card">
                                    <img loading="lazy" src="{{ asset($part2->imgPost) }}" class="img-fluid"
                                        alt="">
                                    <div class="gallery-links d-flex align-items-center justify-content-center">
                                        <a href="{{ asset($part2->imgPost) }}" title="Gallery 4"
                                            class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                        <button type="button" id="singlePost" class="btn btn-primary"
                                            data-bs-toggle="modal" data-bs-target="#exampleModal-singlePost"
                                            data-id="{{ $part2->id }}"
                                            style="background-color: rgba(0,0,0,0);
                                            border: none;
                                            color: rgba(255, 255, 255, 0.5);">
                                            <i class="bi bi-link-45deg" style="font-size: 25px;"></i>
                                        </button>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div><!-- End Gallery Item -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="main-part3">
                            @foreach ($part3s as $part3)
                                <div class="gallery-item post-card">
                                    <img loading="lazy" src="{{ asset($part3->imgPost) }}" class="img-fluid"
                                        alt="">
                                    <div class="gallery-links d-flex align-items-center justify-content-center">
                                        <a href="{{ asset($part3->imgPost) }}" title="Gallery 4"
                                            class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                        <button type="button" id="singlePost" class="btn btn-primary"
                                            data-bs-toggle="modal" data-bs-target="#exampleModal-singlePost"
                                            data-id="{{ $part3->id }}"
                                            style="background-color: rgba(0,0,0,0);
                                            border: none;
                                            color: rgba(255, 255, 255, 0.5);">
                                            <i class="bi bi-link-45deg" style="font-size: 25px;"></i>
                                        </button>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div><!-- End Gallery Item -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="main-part4">
                            @foreach ($part4s as $part4)
                                <div class="gallery-item post-card">
                                    <img loading="lazy" src="{{ asset($part4->imgPost) }}" class="img-fluid"
                                        alt="">
                                    <div class="gallery-links d-flex align-items-center justify-content-center">
                                        <a href="{{ asset($part4->imgPost) }}" title="Gallery 4"
                                            class="glightbox preview-link"><i class="bi bi-arrows-angle-expand"></i></a>
                                        <button type="button" id="singlePost" class="btn btn-primary"
                                            data-bs-toggle="modal" data-bs-target="#exampleModal-singlePost"
                                            data-id="{{ $part4->id }}"
                                            style="background-color: rgba(0,0,0,0);
                                            border: none;
                                            color: rgba(255, 255, 255, 0.5);">
                                            <i class="bi bi-link-45deg" style="font-size: 25px;"></i>
                                        </button>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div><!-- End Gallery Item -->

                </div>

            </div>
        </section><!-- End Gallery Section -->

    </main><!-- End #main -->

    @include('modal.modal-post');
    @include('post.view-post');
    <script>
        const btns = document.querySelectorAll('#singlePost');

        btns.forEach(btn => {
            btn.addEventListener('click', handleClick);
        });

        function handleClick(e) {
            e.preventDefault();

            var postId = $(this).data('id');
            $.ajax({
                url: "/singlePost/" + postId,
                success: function(result) {
                    let width = result.width;
                    let height = result.height;
                    let win = (width / height);

                    if (win >= 1) {
                        if (width > 560) {
                            height = 560 / win;
                            if (height < 472.5) {
                                height = 472.5;
                            }
                            width = 560;
                        } else if (width < 420) {
                            width = 420;
                            height = 472.5;
                        } else {
                            if (height < 472.5) {
                                height = 472.5;
                            }
                        }
                        $('.imgPost-body img').css('height', '').css('width', '100%');
                    } else {
                        if (height > 630) {
                            width = win * 630;
                            if (width < 420) {
                                width = 420;
                            } else if (width > 560) {
                                width = 560;
                            } else {
                                height = 630;
                                width = height * win;
                            }
                        } else if (height < 472.5) {
                            if (width < 420) {
                                width = 420;
                            }
                            height = 472.5;
                        } else {
                            if (width > 560) {
                                width = 560;
                            }
                            if (width < 420) {
                                width = 420;
                            }
                        }
                        $('.imgPost-body img').css('width', '').css('height', '100%');
                    }

                    $('.imgPost-body').css({
                        width: (width) + 'px',
                        height: (height) + 'px'
                    })

                    $('#dialog-modal-singlePost').css({
                        maxWidth: (width * 2) + 'px',
                    })
                    $('.modal-content-body').css({
                        maxHeight: '630px',
                        minHeight: '472.5px'
                    })
                    $('.part-imgPost img').attr('src', result.imgPost);


                    $('.infoPoster-Post img').attr('src', result.user.avatar);

                    $('.infoPoster-name p:first').text(result.user.username);

                    $('.textPoster-body p').text(result.textPost);

                    $('.commentPoster-Post').css({
                        height: (height * 0.55) + 'px'
                    })
                }
            });
        }
    </script>
@endsection
