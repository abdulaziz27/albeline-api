<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\StatusCode;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
	public function login()
	{
		if(Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
			$user = Auth::user();
			$data['token'] = $user->createToken('nApp')->accessToken;
			return response()->success(['token' => $data]);
		} else {
			return response()->error(['error' => 'Unauthorized'], StatusCode::UNAUTHORIZED);
		}
	}
	
	public function register(Request $request)
	{
		$validator = Validator::make($request->all(), [
			'name' => 'required',
			'email' => 'required|email',
			'password' => 'required',
			'c_password' => 'required|same:password',
			'role' => 'required'
		]);
		if($validator->fails()) {
			return response()->error(['error' => $validator->errors()]);
		}

		$input = $request->all();
		$input['password'] = bcrypt($input['password']);
		$user = User::create($input);

		if($input['role'] === 'pembeli') {
			$user->assignRole('pembeli');
		}
		if($input['role'] === 'penjual') {
			$user->assignRole('penjual');
		}

		event(new Registered($user));

		if($user) {
			return response()->success('Verifikasi akun email yang telah kami kirim ke mailbox anda');
		}
		return response()->error("Registrasi Error");
	}
}
