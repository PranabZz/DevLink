<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class MessageController extends Controller
{
    //
    public function index($message_to)
    {
        $user = Auth::user()->name;

        $messages = Message::where(function ($query) use ($user, $message_to) {
            $query->where('message_to', $message_to)
                ->where('message_from', $user)
                ->orWhere('message_to', $user)
                ->where('message_from', $message_to);
        })->get();

        $contacts = Message::where('message_from', $user)->select('message_to')->distinct()->get();

        $output = '';
        foreach ($messages as $message) {
            if ($message->message_from != $user) {
                $output .= "<div class='message my-message'>
                <br>$message->message
              </div>";
            } else {
                $output .= "<div class='message other-message'>
                <br>$message->message
              </div>";
            }
        }

        return view('frontend.message', compact('output', 'message_to', 'contacts'));
    }

    public function send(Request $request, $message_to)
    {
        $user = Auth::user()->name;

        $data = $request->only([
            'message',
        ]);
        $data['message_from'] = $user;
        $data['message_to'] = $message_to;
        Message::create($data);

        return back();
    }

    public function fetch($message_to)
    {
        $user = Auth::user()->name;

        $messages = Message::where(function ($query) use ($user, $message_to) {
            $query->where('message_to', $message_to)
                ->where('message_from', $user)
                ->orWhere('message_to', $user)
                ->where('message_from', $message_to);
        })
            ->get();

        $output = '';
        foreach ($messages as $message) {
            if ($message->message_from != $user) {
                $output .= "<div class=' message my-message '>
                            <br>$message->message
                          </div>";
            } else {
                $output .= "<div class='message other-message'>
                <br>$message->message
              </div>";
            }
        }

        return response()->json(['output' => $output]);
    }
}
