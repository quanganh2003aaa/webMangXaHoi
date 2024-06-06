@extends('master')
@section('contents')
    <main style="background-color: #f0f2f5; position: relative; top: 75px;">
        <div class="main-friend">
            <div class="part-listFriend">
                <div class="listFriend-body">
                    <div class="title-listFriend">
                        <span>Bạn bè</span>
                    </div>
                    <div class="listFriend-list">
                        <ul>
                            <li style="border-bottom: 1px solid #f0f2f5;">
                                <div class="find-friend">
                                    <input type="text" name="" placeholder="Tìm kiếm bạn bè">
                                </div>
                            </li>
                            @foreach ($friends as $friend)
                                <li>
                                    <div class="friend">
                                        <img src="{{ $friend->avatar }}" alt="">
                                        <span>{{ $friend->username }}</span>
                                    </div>
                                    <a href=""><i class="bi bi-x"></i></a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="part-addFriend">
                <div class="addFriend-body">
                    @if (!$requestFriends->isEmpty())
                        <div class="listRequestAddFriend">
                            <span>Lời mời kết bạn</span>
                            <ul>
                                @foreach ($requestFriends as $requestFriend)
                                    <li>
                                        <div class="card" style="width: 18rem;">
                                            <div class="img-card card-request">
                                                <img src="{{ $requestFriend->avatar }}" class="card-img-top">
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $requestFriend->username }}</h5>
                                                <a href="{{ route('confirmFriendRequest', $requestFriend->id) }}"
                                                    class="btn button-addFriend">Xác nhận</a>
                                                <a href="{{ route('refuseFriendRequest', $requestFriend->id) }}"
                                                    class="btn button-refuseFriend">Xoas</a>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <span>Những người bạn có thể biết</span>
                    <div class="row">
                        @foreach ($strangers as $strangers)
                            <div class="col-3 card-friend">
                                <div class="card" style="width: 18rem;">
                                    <div class="img-card">
                                        <img src="{{ $strangers->avatar }}" class="card-img-top" alt="...">
                                    </div>
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $strangers->username }}</h5>
                                        <a href="{{ route('addFriend', $strangers->id) }}" class="btn button-addFriend">Thêm
                                            bạn
                                            bè</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="col-3 card-friend">
                            <div class="card" style="width: 18rem;">
                                <div class="img-card">
                                    <img src="{{ asset('assets/img/avatar-default.jpg') }}" class="card-img-top"
                                        alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">deec</h5>
                                    <a href="#" class="btn button-addFriend">Thêm bạn
                                        bè</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 card-friend">
                            <div class="card" style="width: 18rem;">
                                <div class="img-card">
                                    <img src="{{ asset('assets/img/avatar-default.jpg') }}" class="card-img-top"
                                        alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">deec</h5>
                                    <a href="#" class="btn button-addFriend">Thêm bạn
                                        bè</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 card-friend">
                            <div class="card" style="width: 18rem;">
                                <div class="img-card">
                                    <img src="{{ asset('assets/img/avatar-default.jpg') }}" class="card-img-top"
                                        alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">deec</h5>
                                    <a href="#" class="btn button-addFriend">Thêm bạn
                                        bè</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 card-friend">
                            <div class="card" style="width: 18rem;">
                                <div class="img-card">
                                    <img src="{{ asset('assets/img/avatar-default.jpg') }}" class="card-img-top"
                                        alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">deec</h5>
                                    <a href="#" class="btn button-addFriend">Thêm bạn
                                        bè</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-3 card-friend">
                            <div class="card" style="width: 18rem;">
                                <div class="img-card">
                                    <img src="{{ asset('assets/img/avatar-default.jpg') }}" class="card-img-top"
                                        alt="...">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">deec</h5>
                                    <a href="#" class="btn button-addFriend">Thêm bạn
                                        bè</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>
        const links = document.querySelectorAll('#navbar a');
        links[0].classList.remove('active');
        links[1].classList.add('active');
    </script>
@endsection
