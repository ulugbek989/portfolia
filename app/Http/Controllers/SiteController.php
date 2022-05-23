<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Resume;
use App\Models\Work;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Telegram\Bot\Laravel\Facades\Telegram;

class SiteController extends Controller
{
    public function index(){
        $abouts=About::all();
        $resumes=Resume::all();
        return view('site.index', compact('abouts','resumes'));
    }
    public function blog(Blog $slug)
    {
        return view('site.blog.index',compact('slug'));
    }
    public function work(Work $slug)
    {
        return view('site.work.index',compact('slug'));
    }

    public function sendToTg(Request $request) {
        $this->validate($request,
            ['phone' => 'required'],
            ['name' => 'required'],
        );
        // $contact=new Contact();
        // $contact->name=$request->name;
        // $contact->email=$request->email;
        // $contact->phone=$request->phone;
        // $contact->message=$request->message;
        // $contact->save();

        Telegram::sendMessage([
            'chat_id' => env('1001618170071', '-1001618170071'),
            'parse_mode' => 'HTML',
            'text' => "<b>Contact Portfolia</b>\n"
                . "\n"
                . "<b>Имя клиента</b>: $request->name\n"
                . "<b>Тел номер</b>: $request->phone\n"
                . "<b>Почта</b>: $request->email\n"
                . "<b>Почта</b>: $request->subject\n"
                . "<b>Сообщение</b>: $request->message\n"

        ]);
        Alert::success('success', "Xabar jo'natildi");
        return redirect()->back();
    }
}
