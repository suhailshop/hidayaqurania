<?php

namespace App\Http\Controllers\Portal\Admin;

use App\User;
use App\Role;
use App\Countrie;
use App\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class BookController extends Controller
{
    private $user ;
    public function __construct()
    {
       $this->middleware(function ($request, $next) {
            $this->user= Auth::user();
            if(Auth::user() != null)
            {
                $role=Role::get()->where('id',$this->user->role_id)->first();
                if($role->name=='student' || $role->name=='supervisor'){ return redirect('/');}            
                return $next($request);
            }
            else{return redirect('/login');}
        });
    }
    public function index(){

        $books = Book::all();
        return view('portal.admin.books.index')->with('books',$books);
    }
  
    public function add(){
        
        return view('portal.admin.books.add');
    }
    public function addPost(Request $request){
       
        $book = new Book;
        $book->Name = $request->input('name');
        $book->Author = $request->input('author');
        $book->ISBN = $request->input('isbn');
        $book->URL = $request->input('URL');
        if($request->hasFile('pictureurl')){
            $request->validate([
                'pictureurl' => 'required|file|max:1024',
            ]);
            $fileName = "fileName".time().'.'.request()->pictureurl->getClientOriginalExtension();
            $request->pictureurl->storeAs('public/books',$fileName);
            $book->PictureURL = $fileName;
        }
        $book->Status = "yes";
       
        $book->save();
        Session::put('success_add', 'تم اضافة الكتاب بنجاح');
        return redirect()->route('allBook');
    }
    public function edit($id){
        $book = Book::where('ID',$id)->first();
        return view('portal.admin.books.edit',compact('book'));
    }
    public function editPost(Request $request){
        $fileName = $request->input('img');
        if($request->hasFile('pictureurl')){
            $request->validate([
                'pictureurl' => 'required|file|max:1024',
            ]);
            $fileName = "fileName".time().'.'.request()->pictureurl->getClientOriginalExtension();
            $request->pictureurl->storeAs('public/books',$fileName);
            
        }
        DB::table('books')->where('ID',$request->input('id'))
        ->update(array(
            'Name'=>$request->input('name'),
            'Author'=>$request->input('author'),
            'ISBN'=>$request->input('isbn'),
            'URL'=>$request->input('URL'),
            'PictureURL'=>$fileName,
            'Status'=>$request->input('status')          
        ));
        Session::put('success_edit', 'تم تعديل الكتاب بنجاح');
        return redirect()->route('allBook');
    }
    public function delete($id){
        Book::where('ID', $id)->forcedelete(); 
        Session::put('success_delete', 'تم حذف الكتاب بنجاح');
        return redirect()->route('allBook');
    }
}
