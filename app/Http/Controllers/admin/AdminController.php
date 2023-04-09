<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\admin\AdminModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $data = [
            'categories' => count(AdminModel::getInstance()->categoryList()),
        ];
        return view('admin.home.index')->with('data', $data);
    }


    public function list()
    {
        return view('admin.components.list');
    }

    public function editor()
    {
        return view('admin.components.editor');
    }

    public function inputs()
    {
        return view('admin.components.inputs');
    }


    //======================= Categories =======================
    public function categories()
    {
        $data = [
            'categories' => AdminModel::getInstance()->categoryList(),
        ];
        return view('admin.categories.list')->with('data', $data);
    }

    // GET 
    public function category_create()
    {
        $data = [
            'categories' => AdminModel::getInstance()->categoryList(),
        ];
        return view('admin.categories.add')->with('data', $data);;
    }
    // POST
    public function category_post_create(Request $request)
    {
        $createCategory = AdminModel::getInstance()->createCategory($request);
        // back
        if ($createCategory) {
            return redirect()
                ->route('admin-categories')
                ->with('success', 'Kategori başarıyla oluşturuldu');
        }
    }

    // GET 
    public function category_edit($id)
    {
        $data = [
            'category' => AdminModel::getInstance()->categoryDetail($id),
            'categories' => AdminModel::getInstance()->categoryList(),
        ];

        return view('admin.categories.edit')->with('data', $data);
    }
    // POST 
    public function category_post_edit($id, Request $request)
    {
        $update =  AdminModel::getInstance()->categoryPostEdit($id, $request);

        if ($update) {
            return redirect()
                ->route('admin-categories')
                ->with('success', 'Kategori başarıyla güncellendi');
        } else {
            return redirect()
                ->route('admin-categories')
                ->with('success', 'Kategori güncellenemedi');
        }
    }
    // DELETE
    public function category_delete($id)
    {
        $delete = AdminModel::getInstance()->categoryDelete($id);

        if ($delete) {
            return redirect()
                ->route('admin-categories')
                ->with('success', 'Kategori başarıyla silindi');
        } else {
            return redirect()
                ->route('admin-categories')
                ->with('success', 'Kategori silinemedi');
        }
    }


    // auth
    public function login()
    {
        return view('admin.auth.login');
    }

    public function register(Request $request)
    {
        $createUser = AdminModel::getInstance()->createUser($request);

        if ($createUser) {
            echo 'User created';
        }
    }

    public function loginSubmit(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ], [
            'email.required' => 'Email alanı boş bırakılamaz',
            'email.email' => 'Email alanı geçerli bir email adresi olmalıdır',
            'password.required' => 'Şifre alanı boş bırakılamaz',
        ]);

        return $loginUser = AdminModel::getInstance()->loginUser($request);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin-login');
    }
}
