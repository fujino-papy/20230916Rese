<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class RegisterController extends Controller
{
    public function showRegistrationForm()
    {
        return view('register'); // 会員登録フォームのビューを 'custom.register' に変更
    }

    public function register(Request $request)
    {
        // バリデーションルールを設定
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|',
            'password' => 'required|string|min:8',
        ]);

        // バリデーションエラーがある場合
        if ($validator->fails()) {
            return redirect('register')
                ->withErrors($validator)
                ->withInput();
        }

        // ユーザーを作成しデータベースに保存
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        // 登録完了画面にリダイレクト
        return redirect('/registration/complete'); // 登録完了画面へのリダイレクト
    }
}