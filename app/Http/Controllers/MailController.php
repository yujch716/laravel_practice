<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail()
    {
        $details = [
            'title' => '홈페이지에서 보낸 이메일 입니다.',
            'body' => '성공'
        ];
        // to("테스트 받을 이메일 주소")
        Mail::to("chldbwls0716@naver.com")->send(new TestMail($details));
        return "이메일 전송 완료";
    }
}
