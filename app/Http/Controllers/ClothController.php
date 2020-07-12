<?php

namespace App\Http\Controllers;

use App\Cloth;
use Illuminate\Http\Request;
use Storage;


class ClothController extends Controller
{   
 
    public function index()
    {
        $clothes = Cloth::all();
        return view('mypage',['clothes' => $clothes]);
    }
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        //ファイル名を取得
        $filename = $request->file('filename')->getClientOriginalName();;
        // publicに保存
        $request->file('filename')->storeAs('public', $filename);
        // DBインサート
        $clothes = new Cloth;
        $clothes->category_name = $request->category_name;
        $clothes->brand_name = $request->brand_name;
        $clothes->memo = $request->memo;
        $clothes->cloth_filename = $filename;
        $clothes->save();
        return redirect('/mypage');
        
    }

    public function show($id)
    {
        $cloth = Cloth::find($id);
        return view('show',['cloth'=>$cloth]);
    }
    public function edit($id)
    {
        $cloth = Cloth::find($id);
        return view('edit',['cloth'=>$cloth]);
    }
    public function update(Request $request, $id)
    {
        $cloth = Cloth::find($id);
        $cloth->category_name = $request->category_name;
        $cloth->brand_name = $request->brand_name;
        $cloth->memo = $request->memo;
        $cloth->save();
        return redirect('mypage'.$cloth->id);
        }
    public function destroy($id)
    {
        $cloth=Cloth::find($id);
        $cloth->delete();
        
        return redirect('home');
    }
}
