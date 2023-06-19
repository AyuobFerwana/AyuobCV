<?php

namespace App\Http\Controllers\chat;

use App\Events\ChatSent;
use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MessageController extends Controller
{
    public function chatForm(Request $request ,Message $chat ){

        $validator = Validator($request->all(), [
            'name' => 'required|string|min:3|max:50',
            'L_name' => 'required|string|min:3|max:50',
            'email' => 'required|email',
            'message' => 'required|string|min:3|max:5000',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'message' => $validator->errors()->first()
            ], Response::HTTP_BAD_REQUEST);
        }

        $fullName = $request->input('name') . ' ' . $request->input('L_name');

        $isSaved = $chat->create([
            'full_name' => $fullName,
            'email' => $request->input('email'),
            'message' => $request->input('message')
        ]);
        broadcast(new ChatSent($receiver ,$message));

        return response()->json([
            'message' => $isSaved ? 'The Message Send Successfully' : 'Failed to Send Message! Please try again'
        ], $isSaved ? Response::HTTP_OK : Response::HTTP_BAD_REQUEST);
    }
}
