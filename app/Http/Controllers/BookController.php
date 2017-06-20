<?php
  
namespace App\Http\Controllers;
  
use App\Book;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
  
  
class BookController extends Controller{
  
  
    public function index(){
  
        $Books  = \App\Book::all();
  
        return response()->json($Books);
  
    }
  
    public function getBook($id){
  
        $Book  = \App\Book::find($id);
  
        return response()->json($Book);
    }
  
    public function createBook(Request $request){
  
        $Book = \App\Book::create($request->all());
  
        return response()->json($Book);
  
    }
  
    public function deleteBook($id){
        $Book  = \App\Book::find($id);
        $Book->delete();
 
        return response()->json('deleted');
    }
  
    public function updateBook(Request $request,$id){
        $Book  = \App\Book::find($id);
        $Book->title = $request->input('title');
        $Book->author = $request->input('author');
        $Book->isbn = $request->input('isbn');
        $Book->save();
  
        return response()->json($Book);
    }
  
}
?>