<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    public function index()
    {
        $data = DB::table('todos')->get();
        //dd($data,'123');
        return view('pages.index',compact('data',$data));

    }

    public function get_create_data()
    {
        return view('pages.create');
    }

    public function store_create(Request $request)
    {
        $title = $request->get("title");
        $content = $request->get("content");
        $remark = $request->get("remark");

        DB::table("todos")->insert([
            "title" => $title,
            "content" => $content,
            "remark" =>$remark
        ]);
        return view('pages.create');

    }

    public function delete_data(Request $request)
    {
        $id = $request ->delete_id;
        DB::table('todos')
            ->where('id',$id)
            ->delete();
        return redirect()->route('index');
    }

    public function get_edit_data(Request $request)
    {
        $id = $request ->edit_id;
        $data=DB::table('todos')
            ->where('id',$id)
            ->first();
        return view('pages.edit',compact('data'));
    }

    public function store_edit(Request $request)
    {
        $id = $request->get('id');
        $title = $request->get("title");
        $content = $request->get("content");
        $remark = $request->get("remark");

        DB::table("todos")
            ->where('id',$id)
            ->update([
            "title" => $title,
            "content" => $content,
            "remark" =>$remark
        ]);
        return redirect()->route('index');
    }
}
