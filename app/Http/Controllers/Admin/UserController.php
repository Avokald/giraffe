<?php

namespace App\Http\Controllers\Admin;

use \App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        parent::__construct(
            [
                parent::makeTableField('id',           'id',            true,  'text', false),
                parent::makeTableField('Имя',          'name',          true,  'text', true),
                parent::makeTableField('Фамилия',      'surname',       true,  'text', true),
                parent::makeTableField('Телефон',      'phone_number',  true,  'text', true),
                parent::makeTableField('Почта',        'email',         true,  'text', true),
                parent::makeTableField('Пароль',       'password',      false, 'password', true),
                parent::makeTableField('Сайт',         'site_url',      true,  'text', true),
                parent::makeTableField('Баланс',       'money',         true,  'text', true),
                parent::makeTableField('Дата создания','created_at',    true,  'text', false),
            ],
            'users'
        );
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(15);
        return view('admin.pages.index', [
            'values' => $users,
            'fields' => parent::getFields(),
            'routeName' => parent::getRouteName(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = new User();
        return view('admin.pages.edit', [
            'value' => $user,
            'fields' => parent::getFields(),
            'routeName' => parent::getRouteName(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::create($request->toArray());
        return redirect()->route('admin.users.edit', $user->id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.pages.edit', [
            'value' => $user,
            'fields' => parent::getFields(),
            'routeName' => parent::getRouteName(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrfail($id);
        $user->update($request->toArray());
        $user->save();
        return redirect()->route('admin.users.edit', $user->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('admin.users.index');
    }
}
