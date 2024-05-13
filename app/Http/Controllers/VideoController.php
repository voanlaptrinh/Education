<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function getVideoData(Request $request)
    {
        // Lấy đường dẫn video từ yêu cầu
        $videoUrl = $request->input('video_url');

        // Thực hiện các xử lý để lấy dữ liệu video từ $videoUrl
        // Ví dụ: nếu bạn chỉ cần đường dẫn video, bạn có thể trả về trực tiếp nó

        return response()->json(['video_url' => $videoUrl]);
    }
}
