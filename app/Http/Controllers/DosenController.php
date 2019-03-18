<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
 
class DosenController extends Controller
{
    //di sini isi controller pegawai
    public function index(){
    	return view('biodata');}
}