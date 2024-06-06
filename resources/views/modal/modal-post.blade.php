<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 600px">
        <div class="modal-content">
            <form action="{{route('createPost')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"
                        style="color: #27a776;
          font-size: 25px;
          font-weight: 700;
          font-family: system-ui;">
                        Đăng bài viết</h5>
                    <button type="button" class="btn-close" id="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="modal-body-part1">
                        <div class="avatar-img">
                            <img src="assets/img/gallery/gallery-1.jpg" alt="" style="width: 35px; height:35px">
                        </div>
                        <div class="avatar-name">
                            <span>{{ Auth::user()->username }}</span>
                            <input type="hidden" name="idPoster" value="{{ Auth::user()->id }}">
                            <label class="custom-select">
                                <select name="objectPost">
                                    <option selected value="1">Chỉ mình tôi</option>
                                    <option value="2">Bạn bè</option>
                                    <option value="3">Công khai</option>
                                    <option value="4">Tùy chỉnh</option>
                                </select>
                            </label>
                        </div>
                    </div>
                    <div class="modal-body-part2">
                        <textarea name="textPost" id="textInput" cols="30" rows="1" placeholder="{{ Auth::user()->username }} ơi, bạn đang nghĩ gì thế?"></textarea>
                        <div style="border: 1px solid #6d6f73;"></div>
                        <div id="preview">
                        </div>
                    </div>
                    <div class="modal-body-part3"></div>
                </div>
                <div class="modal-footer" style="justify-content: center;
            align-items: baseline;">
                    <div class="input-group mb-3 post-img-input">
                        <input type="file" class="form-control" id="fileInput" accept="image/*" name="imgPost">
                    </div>
                    <button type="submit" class="btn btn-primary button-post"
                        style="background-color: #27a776; border:#27a776">Đăng
                        bài viết</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    var preview;
    document.getElementById('fileInput').addEventListener('change', function(event) {
        var files = event.target.files;
        preview = document.getElementById('preview');

        preview.innerHTML = '';

        for (var i = 0; i < files.length; i++) {
            var file = files[i];

            if (!file.type.match('image.*')) {
                continue;
            }

            var imgContainer = document.createElement('div');
            imgContainer.style.marginBottom = '20px';

            var img = document.createElement('img');
            img.src = URL.createObjectURL(file);
            img.style.height = 'auto';
            img.style.width = '200px';
            img.style.display = 'block';
            img.style.margin = 'auto';
            img.style.marginTop = '10px';
            img.style.borderRadius = '10px';
            img.style.boxShadow = '2px 2px 5px rgba(0, 0, 0, 0.2)';
            imgContainer.appendChild(img);

            preview.appendChild(imgContainer);
        }
    });

    document.getElementById('btn-close').addEventListener('click', function(event) {
        document.getElementById('fileInput').value = '';
        document.getElementById('textInput').value = '';
        preview.innerHTML = '';
    });
</script>
