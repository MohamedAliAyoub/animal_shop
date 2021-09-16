<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $items = User::query()->paginate(30);
        return view('dashboard.users.index', compact('items'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'password' => 'required|string|confirmed',
            'email' => 'required|unique:users|string|email|max:255',
        ]);
        $password = Hash::make($request->password);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $password
        ]);
        return redirect()->route('user.index')->with(['success ', 'تم الاضافة بنجاح']);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param int $id
     * @param Request $request
     * @return RedirectResponse
     */
    public function update(int $id, Request $request)
    {
        $user = User::query()->findOrFail($id);
        $request->validate([
            'name' => 'required|string',
            'password' => 'nullable|string',
            'email' => 'required|string|email|max:191|unique:users,email,' . $user->id . ',id',
        ]);
        $password = Hash::make($request->password);

        if ($request->password != null) {
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $password
            ]);
        } else {
            $user->update([
                'name' => $request->name,
                'email' => $request->email
            ]);
        }
        return redirect()->route('user.index')->with('success ', 'تم التعديل بنجاح');


    }

    public function profile(Request $request)
    {
        if ($request->isMethod('post')) {
            $user = auth()->user();
            $request->validate([
                'name' => 'required|string',
                'password' => 'nullable|string|confirmed',
                'email' => 'required|string|email|max:191|unique:users,email,' . $user->id . ',id',
            ]);

            if ($request->post('password') != null) {
                if (Hash::check($request->post('old_password'), $user->password))
                    $user->update([
                        'name' => $request->post('name'),
                        'email' => $request->post('email'),
                        'password' => Hash::make($request->post('password'))
                    ]);
                else
                    return redirect()->route('user.profile')->withErrors([
                        'old_password' => 'كلمة المرور لا تطابق كلمة المرور القديمة'
                    ]);
            } else
                $user->update([
                    'name' => $request->name,
                    'email' => $request->email
                ]);
            return redirect()->route('dashboard.user.profile')->with('success', 'updated done successfully');
        }
        return view('dashboard.profile.edit', [
            'user' => auth()->user()
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->route('user.index')->with('success ', 'تم الحذف بنجاح');
    }
}
