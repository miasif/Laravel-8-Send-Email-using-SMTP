<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class webSiteController extends Controller
{
    public function index(){
        $data=['name'=>"Dear Students,",
        'data'=>"বিজয় দিবস ১৬ই ডিসেম্বর ২০২১ উপলক্ষ্যে দেশের সকল শিক্ষার্থীদের জন্য “প্রিমিয়াম পাস” (চৎবসরঁস
        চধংং) সাবস্ক্রিপশন ১০০% ফ্রি।“চৎবসরঁস চধংং” মানেই হাতের মুঠোয় সবকিছু; দেরি না করে আজই
        ডাউনলোড করে বিজয় উলাøসে মেতে উঠুন। Download link: https://tinyurl.com/444bc2x"];
        $user['to']='m.i.asif690@gmail.com';
        Mail::send('mail',$data,function($messages) use ($user){
            $messages->to( $user['to']);
            $messages->subject('Premimun Pass Offer');
        });
    }
}
