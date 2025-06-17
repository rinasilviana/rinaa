<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginRegisterController extends Controller
{
    public function index()
    {
        //get data db
        $users = User::latest()->paginate(10);
        return view('admin.akun.index', compact('users'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:250',
            'email' => 'required|email|max:250|unique:users',
            'password' => 'required|min:8|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'usertype' => 'admin',
        ]);

        $credentials = $request->only('email', 'password');
        Auth::attempt($credentials);
        $request->session()->regenerate();

        if ($request->user()->usertype == 'admin') {
            return redirect('admin/dashboard')->withSuccess('You have successfully registered and logged in.');
        }

        return redirect()->intended(route('dashboard'));
    }

    public function login()
    {
        return view('auth.login');
    }
public function create()
{
    return view('admin.akun.create');
}
    public function register()
    {
        return view('auth.register');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            if ($request->user()->usertype == 'admin') {
                return redirect('admin/dashboard')->withSuccess('You have successfully logged in.');
            }

            return redirect()->intended(route('dashboard'));
        }

        return back()->withErrors([
            'email' => 'Your provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate(); // typo fixed here
        $request->session()->regenerateToken();

        return redirect()->route('login')->withSuccess('You have logged out successfully.');
    }
    public function update(Request $request, $id): RedirectResponse{
        //validate form
        $validated = $request->validate([
            'name' => 'required|string|max:250',
            'usertype' => 'required'
        ]);
        //get post by id
        $datas = User::findOrFail($id);
        //edit akun
        $datas->update([
            'name' => $request->name,
            'usertype' => $request->usertype
        ]);
        //redirect to index
        return redirect()->route('akun.edit', $id)->with(['success' => 'Data Berhasil Diubah']);

    }
    public function edit($id)
{
    $akun = User::findOrFail($id);
    return view('admin.akun.edit', compact('akun'));
}
    public function updateEmail(Request $request, $id): RedirectResponse
    {
        // validate form
        $validated = $request->validate([
            'email' => 'required|email|max:250|unique:users'
        ]);
        //get post bty id
        $datas = User::findOrFail($id);
        //edit akun
        $datas->update([
            'email' => $request->email
        ]);
        return redirect()->route('akun.edit', $id)->with(['success'=> 'email berhasil di ubah']);
    }
    public function updatePassword(Request $request, $id): RedirectResponse
    {
        //validate form
        $validated = $request->validate([
            'password' => 'required|min:8|confirmed'
        ]);
        //get post by ID
        $datas = User::findOrFail($id);
        //editakun
        $datas->update([
            'password' => Hash::make($request->password)
        ]);
        //redirect to index
        return redirect()->route('akun.edit', $id)->with(['success' => 'PASSWORD Berhasil Diubah yeyyyyyy']);
    }

}
