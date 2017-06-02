<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;


class AdminController extends Controller
{

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index()
    {
        //return View::make('home.dashboard');
        echo "vvv";
    }

    public function esignup()
    {
        //return Response::json(ResponseUtil::makeResponse($message, $result));
        echo "You are registered";
        return response()
            ->json(['name' => 'Abigail', 'state' => 'CA']);
    }
}
