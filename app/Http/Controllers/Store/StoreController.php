<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Store;
class StoreController extends Controller
{
   public function index(){
    return view('store.index');
   }
   public function create(){
    return view('store.create');
   }
   public function store(Request $request){
   //    $validatedData = $request->validate([
   //       'name' => 'required|string|max:255',
   //       'description' => 'nullable|string',
   //       // Add validation rules for other fields if needed
   //   ]);
     $store = new Store([
          'name'=>$request->storename,
          'description'=>$request->description
     ]);
     $store->save();
     $this->flashMessage('check', 'Store was successfully added!', 'success');
     return redirect()->route('store-list');
  
    
   }
}
