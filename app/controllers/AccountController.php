<?php

class AccountController extends BaseController {

	public function create()
	{
		$validator = $this->getRegistrationValidator();

		// process the login
		if ($validator->fails()) {
			return Redirect::to('/signup')
				->withErrors($validator)
				->withInput(Input::except('password'));

		} else {
			// store
			$user = new User;
			$user->name     = Input::get('name');
			$user->username = Input::get('username');
			$user->email    = Input::get('email');
			$user->password = Hash::make(Input::get('password'));
			$user->save();

			// redirect
			Session::flash('message', 'Successfully created user!');
			return Redirect::to('/login');
		}
	}

	public function login()
	{

		$validator = $this->getLoginValidator();

		// process the login
		if ($validator->fails()) {
			return Redirect::to('/login')
				->withErrors($validator)
				->withInput(Input::except('password'));

		} else {
			
			$credentials = $this->getLoginCredentials();
	        if (Auth::attempt($credentials)) {
	       
				Session::flash('message', 'Successfully logged in!');
				return Redirect::to('/');

	        } else {

		        return Redirect::back()->withErrors([
		          "password" => ["Credentials invalid."]
		        ]);	
	        }
	       
		}
	}
	
	protected function getRegistrationValidator()
	{
		$rules = array(
			'name'     => 'required',
			'username' => 'required',
			'email'    => 'required|email',
			'password' => 'required',
		);
		return Validator::make(Input::all(), $rules);
	}

	protected function getLoginValidator()
	{
		$rules = array(
			'username' => 'required',
			'password' => 'required',
		);
		return Validator::make(Input::all(), $rules);
	}

	protected function getLoginCredentials()
	{
		return [
		  "username" => Input::get("username"),
		  "password" => Input::get("password")
		];
	}

}
