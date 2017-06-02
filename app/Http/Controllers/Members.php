<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Members extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($id = null) {
        if ($id == null) {
            return Member::orderBy('id', 'asc')->get();
        } else {
            return $this->show($id);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request) {
    	$data = $request->all();
        /*$member = new Member;
        $member->fullname = $request->input('fullname');
        $member->email = $request->input('email');
        $member->password = $request->input('password');
        $member->username = $request->input('username');
        $member->save();*/

        $member = new Member;
        $member->fullname = $data['fullname'];
        $member->email = $data['email'];
        $member->password = $data['password'];
        $member->username = $data['username'];
        $member->state = $data['state'];
        $member->phonenum = $data['phonenum'];
        $member->verifycode = $data['verifycode'];
        $member->save();
        
        return response()
            ->json(['name' => 'Abigail', 'state' => 'CA']);

        //return 'Member record successfully created with id ' . $member->id;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        return Member::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id) {
        $member = Member::find($id);

        $member = new Member;
        $member->fullname = $data['fullname'];
        $member->email = $data['email'];
        $member->password = $data['password'];
        $member->username = $data['username'];
        $member->state = $data['state'];
        $member->phonenum = $data['phonenum'];
        $member->verifycode = $data['verifycode'];
        $member->save();

        return "Sucess updating user #" . $member->id;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Request $request) {
        $member = Member::find($request->input('id'));

        $member->delete();

        return "Member record successfully deleted #" . $request->input('id');
    }
} 