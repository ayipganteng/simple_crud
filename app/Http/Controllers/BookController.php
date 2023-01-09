<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function index(){
    	$book = Book::all();
    	return view('book.index',compact(['book']));
    }

    public function create(Request $request){
        $this->validate($request,[
            'name' => 'required|min:3',
            'quantity' => 'required|min:1',
            'price' => 'required',
        ]);

    	$book = Book::create($request->all());    	
    	return redirect('/book')->with('success','Data has been saved successfully!');
    }

    public function edit($id){
    	$book = Book::find($id);
    	return view('book.edit',compact(['book']));
    }

    public function update(Request $request,$id){
    	$book = Book::find($id);
    	$book->update($request->all());
    	toastr()->success('Data has been updated successfully!');
    	return redirect('/book')->with('success','Data has been updated successfully!');
    }

    public function delete($id){
    	$book = Book::find($id);
    	$book->delete();
    	return redirect('/book')->with('success','Data has been deleted successfully!');
    }

}
