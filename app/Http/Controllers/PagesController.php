<?php
namespace App\Http\Controllers;

class PagesController extends Controller{
    public function getIndex(){
        $title='Hi this is laravel';
        return view('pages.welcome')->with('title',$title);#can be done by this
    }
    public function getAbout(){
        $first='Mostafa';
        $last='Gafer';
        $fullname= $first." ".$last;
        $email='mostafagafer@gmail.com';
        $data=[];
        $data['email']=$email;
        $data['fullname']=$fullname;

        return view('pages.about')->withData($data);


        #or by
        #return view('pages.about')->withFullname($full)->withEmail($email);

        #or by
        #return view('pages.about', ['fullname' => $full]);
    }
    public function service(){
        $data=array(
            'title'=>'Services',
            'services'=>['Web design', 'Programming', 'SEO']
        );
        return view('pages.service')->withData($data);

    }
}
