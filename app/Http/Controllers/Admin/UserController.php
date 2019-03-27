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
                parent::makeTableField('id',           'id',            true, 'text', false),
                parent::makeTableField('Имя',          'name',          true, 'text', true),
                parent::makeTableField('Фамилия',      'surname',       true, 'text', true),
                parent::makeTableField('Телефон',      'phone_number',  true, 'text', true),
                parent::makeTableField('Почта',        'email',         true, 'text', true),
                parent::makeTableField('Сайт',         'site_url',      true, 'text', true),
                parent::makeTableField('Баланс',       'money',         true, 'text', true),
                parent::makeTableField('Дата создания','created_at',    true, 'text', false),
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
        return view('admin.pages.table', [
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::with([''])findOrFail($id);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
