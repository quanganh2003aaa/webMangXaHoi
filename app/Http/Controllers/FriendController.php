<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\friendrequest;

class FriendController extends Controller
{
    public function index()
    {
        $str = Auth::user()->friend;
        $str .= ", ";
        $str .= Auth::user()->friendrequest;
        $str .= ", ";
        $str .= (string)Auth::user()->id;
        $listError = explode(", ", $str);
        $listError = array_map('intval', $listError);

        $strangers = User::whereNotIn('id', $listError)
        ->select('id', 'username', 'avatar')->limit(20)->get();

        $listFriend = array_map('intval', explode(',', Auth::user()->friend));
        $friends = User::where('id',$listFriend)->select('id', 'username', 'avatar')->get();

        $requestFriends = friendrequest::select('friendrequests.*', 'users.avatar', 'users.username')
             ->join('users', 'users.id', '=', 'friendrequests.idUser1')
             ->where('friendrequests.idUser2', Auth::id())
             ->where('friendrequests.status', 1)
             ->get();
        return view('friend', compact('strangers', 'friends', 'requestFriends'));
    }

    public function addFriend($id)
    {
        $friends = Auth::user()->friend;
        $friends = explode(", ", $friends);

        if(in_array((string)$id, $friends)){
            return redirect('friend', 301)->with('error', 'Các bạn đã là bạn bè trước đó');
        }
        else {
            $str = Auth::user()->friend;
            $friends = explode(", ", $str);
            if (empty(Auth::user()->friendrequest)) {
                $user['friendrequest'] = $id;
            }
            else {
                $str = Auth::user()->friendrequest;
                $strFR = explode(", ", $str);
                if (in_array((string)$id, $strFR)) {
                    return redirect('friend', 301)->with('error', 'Bạn đã gửi lời mời trước đó');
                } else {
                    $listFriendRequest = Auth::user()->friendrequest;
                    $listFriendRequest .= ", ";
                    $listFriendRequest .= $id;
                    $user['friendrequest'] = $listFriendRequest;
                }
            }
        }
        $FRequest['idUser1'] = Auth::user()->id;
        $FRequest['idUser2'] = $id;
        $FRequest['status'] = 1;

        $auth = Auth::user();
        if ($auth->update($user) && friendrequest::create($FRequest)) {
            return redirect('friend', 301)->with('success', 'Gửi lời mời thành công');
        }
        else {
            return redirect()->back()->with('error', 'Gửi lời mời thất bại');
        }

    }

    public function confirmFriendRequest($id)
    {
        $friendRequest = friendrequest::where('id', $id)->first();

        //theem ban owr nguowif guiwr lowif moiwf
        $user1 = User::where('id', $friendRequest->idUser1)->first();
        if (!empty($user1->friend)) {
            $friend1['friend'] = $user1->friend;
            $friend1['friend'] .= ", ";
            $friend1['friend'] .= $friendRequest->idUser2;
        }
        else {
            $friend1['friend'] = $friendRequest->idUser2;
        }

        //theem banj owr nguowif nhaanj loiwf moiwf
        $user2 = User::where('id', $friendRequest->idUser2)->first();
        if (!empty($user2->friend)) {
            $friend2['friend'] = $user2->friend;
            $friend2['friend'] .= ", ";
            $friend2['friend'] .= $friendRequest->idUser1;
        }
        else {
            $friend2['friend'] = $friendRequest->idUser1;
        }

        //xoas trong friendrequest cuar nguowif guiwr loiwfj moiwf
        $listRequest1 = explode(", ", $user1->friendrequest);
        for ($i=0; $i < count($listRequest1); $i++) {
            if ($listRequest1[$i] == $id) {
                for ($j=$i; $j < count($listRequest1)-1; $j++) {
                    $listRequest1[$j] = $listRequest1[$j + 1];
                }
                unset($listRequest1[count($listRequest1)-1]);
                break;
            }
        }
        $friend1['friendrequest'] = implode(', ', $listRequest1);

        try {
            if ($user2->update($friend2)) {
                if ($user1->update($friend1)) {
                    if ($friendRequest->delete()) {
                        return redirect()->back()->with('success', 'Các bạn đã trở thành bạn bè');
                    }
                }
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Hệ thống xử lí kết bạn bị lỗi');
        }
    }

    public function refuseFriendRequest($id)
    {
        $friendRequest = friendrequest::where('id', $id)->first();
        $user1 = User::where('id', $friendRequest->idUser1)->first();
        $listRequest1 = explode(", ", $user1->friendrequest);
        for ($i=0; $i < count($listRequest1); $i++) {
            if ($listRequest1[$i] == $friendRequest->idUser2) {
                for ($j=$i; $j < count($listRequest1)-1; $j++) {
                    $listRequest1[$j] = $listRequest1[$j + 1];
                }
                unset($listRequest1[count($listRequest1)-1]);
                break;
            }
        }
        $friend1['friendrequest'] = implode(', ', $listRequest1);

        try {
            if ($user1->update($friend1)) {
                if ($friendRequest->delete()) {
                    return redirect()->back()->with('success', 'Từ chối lời mời thành công');
                }
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Từ chối lời mời thất bại');
        }
    }

    public function unfriend($id)
    {
        $friends1 = Auth::user()->friend;
        $friends1 = explode(", ", $friends1);
        for ($i=0; $i < count($friends1); $i++) {
            if ($friends1[$i] == $id) {
                for ($j=$i; $j < count($friends1)-1; $j++) {
                    $friends1[$j] = $friends1[$j + 1];
                }
                unset($friends1[count($friends1)-1]);
                break;
            }

        }

        $friend2 = User::where('id', $id)->first();
        $listFriend2 = $friend2->friend;
        $friends2 = explode(", ", $listFriend2);
        for ($i=0; $i < count($friends2); $i++) {
            if ($friends2[$i] == Auth::id()) {
                for ($j=$i; $j < count($friends2)-1; $j++) {
                    $friends2[$j] = $friends2[$j + 1];
                }
                unset($friends2[count($friends2)-1]);
                break;
            }
        }

        $user1['friend'] = implode(', ', $friends1);
        $user2['friend'] = implode(', ', $friends2);

        $friend1 = Auth::user();
        if ($friend1->update($user1) && $friend2->update($user2)) {
            return redirect()->back()->with('success', 'Hủy kết bạn thành công');
        }
        else {
            return redirect()->back()->with('error', 'Hủy kết bạn thất bại');
        }
    }

}
