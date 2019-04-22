<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Image;
use Auth;
use App\updates;
use App\User;
use File;
use App\comments;
use App\posts;
use Illuminate\Support\Facades\Input;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */



    public function activate()
    {
        $activate = new updates;
        $activate->userid =Auth::User()->id;
        $activate->save();

        DB::update('update users set userlevel = ? where id = ?',[2,1]);
  
        return redirect('editor')->with('status',' First id changed');
    }




    public function index()
    {
         $data = [];
         $data['admins']= DB::select('select * from users where userlevel = ?', [2]);
        $data['categories']=\App\categories::all();
        return view('home',$data);
    }



 public function updateimg(Request $request)
    {
         if($request->hasFile('prfimage')){

            $post_image=Input::file('prfimage');

            $filename=time().'.'.$post_image->getClientOriginalExtension();
        Image::make($post_image)->resize(500,500)->save(public_path('/img/avatar/'.$filename));

        $userid=Auth::User()->id;
        
        DB::update('update users set avatar = ? where id = ?',[$filename,$userid]);

         }
        return redirect('profile')->with('status',' successfully updated profile picture');
    }




public function updateprf(Request $request)
    {
          // $this->validate($request, [
          //   'email'=>'unique:users,email',


          //   ]);

        $userid=Auth::User()->id;
        $name = $request->input('name');
        $sname = $request->input('sname');
        $pnum = $request->input('pnum');
        $email = $request->input('email');
        DB::update('update users set name = ?,sname=?,pnum=?,email=? where id = ?',[$name,$sname,$pnum,$email,$userid]);

       
        return redirect('profile')->with('status',' successfully updated profile information');
    }



    public function profile()
    {
         $data = [];
         $data['admins']= DB::select('select * from users where userlevel = ?', [2]);
        $data['categories']=\App\categories::all();
        return view('home',$data);
    }

    public function editor()
    {
         $id=Auth::User()->id;
         $data = [];
          $data['myposts']= DB::select('select * from posts where userid = ?', [$id]);
         $data['updates']=\App\updates::all();
          $data['allposts']=\App\posts::all();
        $data['categories']=\App\categories::all();
        $data['comments']=\App\comments::with('posts')->get();
        $data['users']=\App\User::all();

        return view('editor',$data);
    }

    public function upgradeuser($id)
    {
    DB::update('update users set userlevel = ? where id = ?',[1,$id]);
    return redirect('editor')->with('status',' successfully upgraded user ');
    }

    public function downgradeuser($id)
    {
    DB::update('update users set userlevel = ? where id = ?',[0,$id]);
    return redirect('editor')->with('status',' successfully downgraded user ');
    }
    public function deleteuser($id)
    {
     DB::delete('delete from users  where id = ?',[$id]);
    return redirect('editor')->with('status',' successfully deleted user ');
    }





///////////////////////////////////updates
     public function firstupdate(Request $request)
    {
          $this->validate($request, [
            'ftitle'=>'min:2|max:80',
            'fdesc'=>'min:2|max:100',

            ]);
         if($request->hasFile('fimage')){

            $post_image=Input::file('fimage');

            $filename=time().'.'.$post_image->getClientOriginalExtension();
        Image::make($post_image)->resize(350,250)->save(public_path('/img/blog/cat-post/'.$filename));
        $ftitle = $request->input('ftitle');
        $fdesc = $request->input('fdesc');
        $userid=Auth::User()->id;
        
        DB::update('update updates set userid = ?,title1 = ?,desc1 = ?,img1 = ? where id = ?',[$userid,$ftitle,$fdesc,$filename,1]);

         }else
         {
         $ftitle = $request->input('ftitle');
        $fdesc = $request->input('fdesc');
        $userid=Auth::User()->id;
        
        DB::update('update updates set userid = ?,title1 = ?,desc1 = ? where id = ?',[$userid,$ftitle,$fdesc,1]);

         }
        return redirect('editor')->with('status',' title 1 successfully updated ');
    }
        
//////second update

        public function secondupdate(Request $request)
    {
          $this->validate($request, [
            'stitle'=>'min:2|max:80',
            'sdesc'=>'min:2|max:100',

            ]);
         if($request->hasFile('simage')){

            $post_image=Input::file('simage');

            $filename=time().'.'.$post_image->getClientOriginalExtension();
        Image::make($post_image)->resize(350,250)->save(public_path('/img/blog/cat-post/'.$filename));
        $stitle = $request->input('stitle');
        $sdesc = $request->input('sdesc');
        $userid=Auth::User()->id;     
        DB::update('update updates set userid = ?,title2 = ?,desc2 = ?,img2 = ? where id = ?',[$userid,$stitle,$sdesc,$filename,1]);

         }else
         {
       $stitle = $request->input('stitle');
        $sdesc = $request->input('sdesc');
        $userid=Auth::User()->id;     
        DB::update('update updates set userid = ?,title2 = ?,desc2 = ? where id = ?',[$userid,$stitle,$sdesc,1]);
         }
        return redirect('editor')->with('status','title 2 successfully updated');
    }

    //////third update

        public function thirdupdate(Request $request)
    {
         $this->validate($request, [
            'ttitle'=>'min:2|max:80',
            'tdesc'=>'min:2|max:100',

            ]);
         if($request->hasFile('timage')){

            $post_image=Input::file('timage');

            $filename=time().'.'.$post_image->getClientOriginalExtension();
        Image::make($post_image)->resize(350,250)->save(public_path('/img/blog/cat-post/'.$filename));
        $ttitle = $request->input('ttitle');
        $tdesc = $request->input('tdesc');
        $userid=Auth::User()->id;      
        DB::update('update updates set userid = ?,title3 = ?,desc3 = ?,img3 = ? where id = ?',[$userid,$ttitle,$tdesc,$filename,1]);

         }else
         {
        $ttitle = $request->input('ttitle');
        $tdesc = $request->input('tdesc');
        $userid=Auth::User()->id;      
        DB::update('update updates set userid = ?,title3 = ?,desc3 = ? where id = ?',[$userid,$ttitle,$tdesc,1]);
         }
        return redirect('editor')->with('status',' title 3 successfully updated');
    }




    public function editpost($id)
    {
         $data['editpost']= DB::select('select * from posts where id = ?', [$id]);
         $data['popularposts']=\App\posts::all();
        $data['categories']=\App\categories::all();
  
        return view('editpost',$data);
    }

     public function deletepost($id)
    {
        
        DB::delete('delete from posts  where id = ?',[$id]);
        DB::delete('delete from comments  where postid = ?',[$id]);

        $request=  DB::table('posts')->where('id', '=', $id)->get();
        $image_path = "img/post_img/".$request; 
         if (file_exists($image_path)) {

          @unlink($image_path);

   }

        return redirect('editor')->with('status',' post deleted successfully'.$request);
    }
     
          public function deletecat($id)
    {
        DB::delete('delete from categories  where id = ?',[$id]);
               return redirect('editor')->with('status',' category deleted successfully');
    } 
        

}
