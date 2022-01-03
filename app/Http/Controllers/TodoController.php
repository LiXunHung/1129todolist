<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    public function index(Request $request)
    {
        $search_content = $request->get('search_content');
        $data = DB::table('todos');
        if ($search_content) {
            $data->orwhere('title','like','%'. $search_content .'%');
            $data->orwhere('content','like','%'. $search_content .'%');
            $data->orwhere('remark','like','%'. $search_content .'%');
        }
        $data = $data->get();
//        dd($data);
        return view('pages.index',compact('data',$data));
    }

    public function get_create_page(){
        return view('pages.create');
    }

    public function store_create_data (Request $request)
    {
        $title = $request->get('title');
        $content = $request->get('content');
        $remark = $request->get('remark');

        DB::table('todos')->insert([
            'title' => $title,
            'content' => $content,
            'remark' => $remark,
        ]);
        return redirect()->route('index');
    }

    public function delete_data(Request $request)
    {
        $id = $request->get('id');
        DB::table('todos')
            ->where('id', $id)
            ->delete();
        return redirect()->route('index');
    }

    public function get_edit_page(Request $request)
    {
        $id = $request->get('id');
        $data = DB::table('todos')
            ->where('id', $id)
            ->first();
        return view('pages.edit',compact('data',$data));
    }

    public function store_edit_data(Request $request)
    {
        $id = $request->get('id');
        $title = $request->get('title');
        $content = $request->get('content');
        $remark = $request->get('remark');

        $test = DB::table('todos')
            ->where('id', $id)
            ->update([
                'title' => $title,
                'content' => $content,
                'remark' => $remark,
            ]);
        return redirect()->route('index');
    }
}
