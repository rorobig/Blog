<?php 

namespace App\Http\Controllers;

class PagesController extends Controller{

	public function getIndex(){
		return view('pages.welcome');

	}

	public function getAbout(){
		$Firstname = 'Rocheandley';
		$Lastname = 'Kwidama';
		$Full = $Firstname . " " . $Lastname;
		$Email = "alex@gma.com";
		$data=[];
		$data['email']= $Email;
		$data['fullname']= $Full;
		return view('pages.about')->withData($data);
	}

	public function getContact(){
		return view('pages.contact');
	}



}

