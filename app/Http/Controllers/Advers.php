<?php

namespace App\Http\Controllers;

use App\Adver;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

	
class Advers extends Controller{
	public function index(Request $request){
		$id = null;
		if($id == null){
			return Adver::orderBy('id','asc')->get();
		}else{
			return $this->show($id);
		}
	}
	public static function getArticles(){
		return  Adver::selectRaw('*,DATEDIFF(NOW(),updated_at) as article_period')
				->orderBy('updated_at','desc')
				->get();
	}

	public function show($id){
		return Adver::find($id);
	}

	public function store(Request $request){
		$data = $request->all();
		$adver = new Adver;
		$adver->title = $data['title'];   
		$adver->author = $data['author'];    
		$adver->image_url = $data['image_url'];       
		$adver->location = $data['location'];
		$adver->date = $data['date'];
		$adver->content = $data['content'];
		$adver->type = $data['type'];
		$adver->note = $data['note'];
		$adver->save();
		return Adver::find($adver->id);
	}
	public function update(Request $request,$id){	
		$data = $request->all();

		$adver = Adver::find($id);
		$adver->title = $data['title'];
		$adver->author = $data['author'];    
		$adver->image_url = $data['image_url'];       
		$adver->location = $data['location'];
		$adver->date = $data['date'];
		$adver->content = $data['content'];
		$adver->type = $data['type'];
		$adver->note = $data['note'];
		$adver->save();
		return "Success updating user #".$adver->id;
	}
	public function destroy(Request $request){
		$adver = Adver::find($request->input('id'));
		$adver->delete();
		return "Adver record successfully deleted #".$request->input('id');
	}
}