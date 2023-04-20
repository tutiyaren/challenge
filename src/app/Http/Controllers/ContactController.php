<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Support\Str;

class ContactController extends Controller
{
    /* 入力画面 */
    public function confirm()
    {
        return view('/confirm');
    }

    /*　入力内容確認ページ　*/

    public function contact(ContactRequest $request)
    {
        $items = $request->all();
        
        if(!$items){
            return redirect('/');
        }
        $request->session()->put('txt', $items);
        $data = $request->session()->get('txt');
        if($request->has("back")){
            return redirect('/')->action(ContactController::class)->withInput($data);
        }
     
        return view('/contact', compact('items'));
    }

    /*　完了ページ　*/

    public function thanks(Request $request)
    {
        $items = $request->only(['fullname', 'gender', 'email', 'mail', 'address', 'build', 'opinion']);
        Contact::create($items);

        return view('/thanks');
    }

    /*　管理システム　*/

    public function manege(Request $request)
    {

        $contacts = Contact::select()->KeynameSearch($request->keyname)->KeygenderSearch($request->keygender)->StartdateSearch($request->startdate)->EnddateSearch($request->enddate)->KeyemailSearch($request->keyemail)->get();

        $lists = Contact::all();

        $topics = Contact::paginate(10);

        return view('/manege', compact('contacts', 'lists', 'topics'));
    }


    public function destory(Request $request)
    {
        Contact::find($request->id)->delete();
        return redirect('/manege');
    }
}
