<?php
namespace App\Http\Controllers;


use Illuminate\Support\Facades\Storage;
use App\Models\ParseJson;


class ShowJsonController extends Controller
{
    public function index(){
        $rows = ParseJson::all();
        dd($rows);
        return view('parsejson',compact('rows'));
    }
}
