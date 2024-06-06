<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $listfriend = explode(", ", Auth::user()->friend);

        $checkUserPost = Post::where('idPoster', $listfriend)->OrderBy('created_at', 'desc')->get();
        if (count($checkUserPost) < 4) {
            $posts = Post::inRandomOrder()->limit(10)->get();
        }
        else {
            $posts = $checkUserPost;
        }
        $i=1;
        foreach ($posts as $post) {
            if ($i == 1) {
                $part1s[] = $post;
            }
            if ($i == 2) {
                $part2s[] = $post;
            }
            if ($i == 3) {
                $part3s[] = $post;
            }
            if ($i == 4) {
                $part4s[] = $post;
                $i=0;
            }
            $i++;
        }
        return view('home', compact('part1s', 'part2s', 'part3s', 'part4s'));
    }

    public function create_post(Request $request)
    {
        $post = $request->all();
        $post['likes'] = 0;
        $post['textPost'] = "";
        $post['created_at'] = now();
        $post['updated_at'] = now();
        //tạo tên file
        $fileName = $request->idPoster . '.' . rand(1,1000) . '.' . time() . '.' . $request->file('imgPost')->extension();
        //lưu trữ vào storage
        $request->file('imgPost')->storeAs('public/img-post', $fileName);
        //tạo đường dẫn lưu vào db
        $imgPath = 'storage/img-post/' . $fileName;
        $post['imgPost']=$imgPath;

        Post::create($post);
        return redirect('home', 301)->with('success','Đăng bài viết thành công.');
    }

    public function show()
    {
        return view('post.view-post');
    }

    public function store($id)
    {
        $singlePost = Post::with('user')->find($id);
        $image_size = getimagesize($singlePost->imgPost);
        $singlePost['width'] = $image_size[0];
        $singlePost['height'] = $image_size[1];
        return response()->json($singlePost);
    }

}
