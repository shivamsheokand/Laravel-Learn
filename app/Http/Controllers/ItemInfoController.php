<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Saller;
use App\Models\Item;

class ItemInfoController extends Controller
{
    //
    function addSellers(){
        return view('add_seller');
    }
    function addSeller(Request $req){
        $data=new Saller();
        $data->name=$req->name;
        $data->phone=$req->phone;
        if($data->save()){
            return "seller added Sucess";
        }else{
            return "data not added";
        }
    }
    
    function addItems(){
        return view('add_item');
    }
    function addItem(Request $req){
        $data = new Item();
        $data->item=$req->item;
        $data->price=$req->price;
        $data->saller_id=$req->sellerid;
        if($data->save()){
            return "Add item sucess";
        }else{
            return "item added fild";
        }
    }
    function getData(){
        return Saller::find(3)->productData;
    }
    function manyData(){
        return Saller::find(3)->many;
    }

}
