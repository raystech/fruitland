<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Contracts\Auth\Registrar;
use Illuminate\Http\Request;
use Input;
use Redirect;
use App\Fruit;
use Auth;

class StudentController extends Controller {
	//methodURL
	public function getIndex() {
		$fruits = Fruit::all();
		return view('fruit.index')->with('fruits',$fruits);
	}

	public function getSent() {
		$fruits = Fruit::all();
		return view('fruit.index')->with('fruits',$fruits);
	}

	public function getAdd() {
		return view('fruit.add');	
	}

	public function postStore() {
		$fruit = new Fruit;
		$fruit->name = Input::get('name');
		$fruit->color = Input::get('color');
		$fruit->taste = Input::get('taste');
		$fruit->save();
		return Redirect::to('fruit');
	}

	public function getDelete($id) {
		$fruit = Fruit::find($id);
		$fruit->delete();
		return Redirect::to('fruit');
	}

	public function getEdit($id) {
		$fruit = Fruit::find($id);
		return view('fruit.edit')->with('fruit',$fruit);
	}

	public function postUpdate($id) {
		$fruit = Fruit::find($id);
		$fruit->name = Input::get('name');		
		$fruit->color = Input::get('color');
		$fruit->taste = Input::get('taste');
		$fruit->save();
		return Redirect::to('fruit');
	}
}