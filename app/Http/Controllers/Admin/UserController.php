<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::where('roles', 'pengguna')->get();

        return view('pages.admin.user.index', [
            'items' => $users
        ]);
    }

    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::find($id)->destroy();
        return redirect()->back();
    }
}
