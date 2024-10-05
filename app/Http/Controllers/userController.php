<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;
use App\Models\Excels;


class userController extends Controller
{


    public function language_change(Request $request)
    {
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);
        return redirect()->back();
    }
    // dashboard  Users Couny
    public function dashboard()
    {
        // $messagesData = [];

        $totalMessages = Excels::all()->count();
        $pendingMessages = Excels::where('status', 0)->count();
        $sendMessages = Excels::where('status', 1)->count();
        $messagesData = ["totalMessages" => $totalMessages, "pendingMessages" => $pendingMessages, "sendMessages" => $sendMessages];
        // return response()->json($messagesData);
        return view('dashboard', compact('messagesData'));
    }
}
