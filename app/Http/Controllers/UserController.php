<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
		$content = [
			'success' => true
		];
		$rc = json_decode($request->getContent(), true);
		$data = [
			'register' => [
				'name' => $rc['register']['registerName'],
				'email' => $rc['register']['registerEmail'],
				'password' => $rc['register']['registerPassword'],
			]
		];
		$content['data'] = $data;
		$user = User::query()->create([
			'name' => $data['register']['name'],
			'email' => $data['register']['email'],
			'password' => $data['register']['password'],
		]);
		$user->save();
	    return response(json_encode($content));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
