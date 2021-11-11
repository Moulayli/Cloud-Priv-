<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

require_once 'GoogleTranslateForFree.php';

class indexController extends Controller
{
     public function index()
    {
    	return view ('index');
    }
    public function traduction()
    {
        return view ('traduction');
    }
    public function send_files()
    {
    	request()->validate(['files'=>'required']);
    	$files = request('files');
    	dd($files);
    }
    public function action_traduction()
    {
        request()->validate(['text'=>'required']);
        request()->validate(['langue'=>'required']);
        $text = request('text');
        $langue = request('langue');
        echo traductions($text);
        dd(); # problem ici 
    }

}
