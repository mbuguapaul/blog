<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use DB;
use App\likes;
use App\posts;
use App\updates;
use App\categories;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Input;
use Auth;
use App\comments;
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

public function post_up(Request $r)
{   
    $p_id = $r->input('post');
    $u_id = $r->input('user');
    $post = new \App\Post_vote;
    $post->post_id=$p_id;
    $post->user_id=$u_id;
    $post->vote=1;
    $post->save();
}
 public function welcome()
    {
        $data = [];
 $data['popularposts']=\App\posts::all();
 $data['posts']=\App\posts::orderBy('id','DESC')->paginate(4);
 $data['categories']=\App\categories::all();
 $data['updates']=\App\updates::all();
 $data['editor']=\App\User::all();
$data['comments']=\App\comments::with('posts')->get();
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
            'category'=>'required',
            ]);
 $link= $request->input('link');
if($request->hasFile('image')){
$post_image=Input::file('image');
 $filename=time().'.'.$post_image->getClientOriginalExtension();
        Image::make($post_image)->resize(500,450)->save(public_path('/img/post_img/'.$filename));
if(empty($link)){

    $posts = new posts;
$posts->title = Input::get('title');
$posts->image = $filename;
$posts->categoryid = Input::get('category');
$posts->post = Input::get('post');
$posts->link = NULL;
$posts->userid =Auth::User()->id;
$posts->save();

}else{

 $array=explode("=",$link);
$thelink=$array['1'];

$posts = new posts;
$posts->title = Input::get('title');
$posts->image = $filename;
$posts->categoryid = Input::get('category');
$posts->post = Input::get('post');
$posts->link = $thelink;
$posts->userid =Auth::User()->id;
$posts->save();
}
         }
         else{


if(empty($link)){


    $posts = new posts;
$posts->title = Input::get('title');
$posts->categoryid = Input::get('category');
$posts->post = Input::get('post');
// $posts->link = $thelink;
$posts->userid = Auth::User()->id;
$posts->save();

}else{
 $array=explode("=",$link);

$thelink=$array['1'];

$posts = new posts;
$posts->title = Input::get('title');
$posts->categoryid = Input::get('category');
$posts->post = Input::get('post');
$posts->link = $thelink;
$posts->userid = Auth::User()->id;
$posts->save();
}
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








    public function updatepost(Request $request)
    {


         $this->validate($request, [
            'title'=>'min:2|max:112',
            'post'=>'min:88',
            ]);

$link = $request->input('link');
if($request->hasFile('image')){

// check link availability

    if(empty($link)){

$post_image=Input::file('image');
 $filename=time().'.'.$post_image->getClientOriginalExtension();
        Image::make($post_image)->resize(500,450)->save(public_path('/img/post_img/'.$filename));



$postid = $request->input('postid');
$title = $request->input('title');
$category= $request->input('category');
$post= $request->input('post');

$user=Auth::User()->id;

 DB::update('update posts set title = ?,image = ?,categoryid = ?,post = ?,link=NULL where id = ?',[$title,$filename,$category,$post,$postid]);
}

            else{


$post_image=Input::file('image');
 $filename=time().'.'.$post_image->getClientOriginalExtension();
        Image::make($post_image)->resize(500,450)->save(public_path('/img/post_img/'.$filename));

$array=explode("=",$link);
$thelink=$array['1'];


$postid = $request->input('postid');
$title = $request->input('title');
$category= $request->input('category');
$post= $request->input('post');

$user=Auth::User()->id;

 DB::update('update posts set title = ?,image = ?,categoryid = ?,post = ?,link=? where id = ?',[$title,$filename,$category,$post,$thelink,$postid]);



            }
         }


         else{
            if(empty($link)){

$postid = $request->input('postid');
$title = $request->input('title');
$category= $request->input('category');
$post= $request->input('post');


 DB::update('update posts set title = ?,categoryid = ?,post = ?,link=NULL,image=NULL where id = ?',[$title,$category,$post,$postid]);
            }
            else{

$array=explode("=",$link);
$thelink=$array['1'];

$postid = $request->input('postid');
$title = $request->input('title');
$category= $request->input('category');
$post= $request->input('post');


 DB::update('update posts set title = ?,categoryid = ?,post = ?,link=?,image=NULL where id = ?',[$title,$category,$post,$thelink,$postid]);
         }
     }



        return redirect('editor')->with('status','Post successfully updated');
    }




    public function like(Request $request)
    {

            $modelid= $request->input('Postid');

            $likes = new likes;
            $likes->post_id = $modelid;
            $likes->user_id =Auth::User()->id;
            $likes->save();
// $nolikes= DB::select('SELECT SUM(counts) from likes where post_id = ?', []);
            $nolikes = likes::find($modelid)->sum('counts');
        return response()->json(['nolikes'=>$nolikes]);
        
    }


}
