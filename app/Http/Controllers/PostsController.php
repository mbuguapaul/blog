<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use DB;
use App\posts;
use App\updates;
use App\categories;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Input;
use Auth;
use Image;
class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


 public function welcome()
    {
        $data = [];
 $data['popularposts']=\App\posts::all();
 $data['posts']=\App\posts::orderBy('id','DESC')->paginate(4);
 $data['categories']=\App\categories::all();
 $data['updates']=\App\updates::all();
 $data['editor']=\App\User::all();
        return view('welcome',$data);
    }


public function detail($id)
    {
        $data = [];
 $data['popularposts']=\App\posts::all();
 $data['post']= DB::select('select * from posts where id = ?', [$id]);
 $data['comments']= DB::select('select * from comments where postid = ?', [$id]);
 $data['categories']=\App\categories::all();
        return view('detail',$data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


         $this->validate($request, [
            'title'=>'min:2|max:112',
            'post'=>'min:88',
            ]);

if($request->hasFile('image')){
$post_image=Input::file('image');
 $filename=time().'.'.$post_image->getClientOriginalExtension();
        Image::make($post_image)->resize(500,450)->save(public_path('/img/post_img/'.$filename));

$posts = new posts;
$posts->title = Input::get('title');
$posts->image = $filename;
$posts->categoryid = Input::get('category');
$posts->post = Input::get('post');
$posts->userid =Auth::User()->id;
$posts->save();

         }
         else{
$posts = new posts;
$posts->title = Input::get('title');
$posts->categoryid = Input::get('category');
$posts->post = Input::get('post');
$posts->userid =Auth::User()->id;
$posts->save();
         }



        return redirect('editor')->with('status','New post successfully added');
    }




////////////////////////////////////////////////categories parts
public function storecategory(Request $request)
    {

        $this->validate($request, [
            'newcategory'=>'min:2|max:50|unique:categories,category_name',


            ]);
        $categories = new categories;
        $categories->category_name = Input::get('newcategory');
        $categories->creator_id =Auth::User()->id;
        $categories->save();
            

        return redirect('editor')->with('status','New category successfully added');
    }




    public function editorselection($id)
    {
        $data = [];
 $data['popularposts']=\App\posts::all();
 $data['post']= DB::select('select * from posts where userid = ?', [$id]);
  $data['selectuser']= DB::select('select * from users where id = ?', [$id]);
 $data['categories']=\App\categories::all();
        return view('selection',$data);
    }


    public function catselection($id)
    {
        $data = [];
 $data['popularposts']=\App\posts::all();
 $data['post']= DB::select('select * from posts where categoryid = ?', [$id]);
  $data['selectcat']= DB::select('select * from categories where id = ?', [$id]);
 $data['categories']=\App\categories::all();
        return view('catselect',$data);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function show(posts $posts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function edit(posts $posts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, posts $posts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy(posts $posts)
    {
        //
    }
}
