<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use DataTables;

class ItemsAjaxController extends Controller
{
    public function index (Request $request) 
    {
        if($request->ajax()){
            $data = Item::latest()->get();
            return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                    $btn = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="edit btn btn-primary btn-sm editProduct">Edit</a>';
                    $btn = $btn.' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteProduct">Delete</a>';
                    
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('items.index', compact('items'));
    }

    public function store (Request $request) 
    {
        Item::updateOrCreate(['id' => $request->item_id])
    }
}
