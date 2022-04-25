<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(): View|Factory|Application
    {
        $admins = Admin::all();
        return view('admin.index',[
            'admins' => $admins
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create(): View|Factory|Application
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreAdminRequest  $request
     * @return RedirectResponse
     */
    public function store(StoreAdminRequest $request): RedirectResponse
    {
        try {
            $user = Admin::query()
                ->where('username', $request->get('username'))
                ->firstOrFail();


            $message = "wrong answer";
            echo "<script type='text/javascript'>alert('$message');</script>";

            return redirect()->route('add_user');

        } catch (\Throwable $th) {
            //throw $th;
            $user = new Admin;
            $user->username = $request->username;
            $user->password = $request->password;
            $user->name = $request->name;
            $user->save();

            return redirect()->route('login');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Admin  $admin
     * @return Application|Factory|View
     */
    public function edit(Admin $admin): View|Factory|Application
    {
        return view('admin.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateAdminRequest  $request
     * @param  Admin  $admin
     * @return Application|Factory|View
     */
    public function update(UpdateAdminRequest $request, Admin $admin): Application|Factory|View
    {
        try {
            $user = Admin::query()
                ->where('username', $request->get('username'))
                ->where('password', $request->get('password'))
                ->firstOrFail();

            // $user->update(['password' => $request->get('newpassword')]);
            $user->password=$request->get('newpassword');
            $user->save();
            return view('admin_login');

        } catch (\Throwable $th) {
            echo 'Sai tài khoản hoặc mất khẩu';
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
