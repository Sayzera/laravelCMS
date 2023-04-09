<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminModel extends Model
{
    use HasFactory;
    public static $instance;

    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }


    // Kategori işlemleri
    public function createCategory($request)
    {
        DB::table('categories')->insert([
            'name' => $request->category_name,
            'sub_id' => $request->category_id == '' ? 0 : $request->category_id,
        ]);

        return true;
    }

    public function categoryList()
    {
        $data = DB::table('categories')->get();

        foreach ($data as $key => $item) {
            $main_name = DB::table('categories')->where('id', $item->sub_id)->first();
            if ($main_name != null) {
                $data[$key]->main_name = $main_name->name;
            } else {
                $data[$key]->main_name = 'Ana Kategori';
            }
        }

        return $data;
    }

    public function categoryDetail($id)
    {
        $data = DB::table('categories')->where('id', $id)->first();

        return $data;
    }

    public function createUser($request)
    {
        DB::table('users')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return true;
    }

    public function categoryPostEdit($id, $request)
    {
        $update =  DB::table('categories')->where('id', $id)->update([
            'name' => $request->category_name,
            'sub_id' => $request->category_id == '' ? 0 : $request->category_id,
        ]);

        return $update;
    }

    public function categoryDelete($id)
    {
        $delete = DB::table('categories')->where('id', $id)->delete();

        return $delete;
    }

    public function loginUser($request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt(['email' => $credentials['email'], 'password' => $credentials['password']])) {
            $request->session()->regenerate();

            /**
             * Kullanıcının giriş yapmaya çalıştığı sayfaya yönlendirilmesi için
             * eğer yoksa admin/home sayfasına yönlendirilmesi için
             */
            return redirect()->intended('admin/');
        } else {
            return back()->withErrors([
                'credential' => 'Kullanıcı adı veya şifre hatalı',
            ]);
        }
    }
}
