<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;
use App\Extraimage;
use Storage;
class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $posts = Post::orderBy('created_at','desc')->paginate(5); 
        return view ('welcome')->with('posts',$posts);
        //  return view('welcome');
        
    }
    public function photo($id)
    {
        //
        // $posts = Extraimage::all();
        $category=array('carousel','about','dashprofile');
        $cat=$category[$id];
      
        $images =DB::table('extraimages')->where('category','=',$cat)->get();
       
        //dd($posts);
        return view ('photogrid',compact('images','id'));
        //  return view('welcome');
            
    }
    public function photodelete(Request $request,$id){
        
        $image=Extraimage::find($id);
        
            Storage::delete($image->image);
            
        
       
       $image->forceDelete();

        toastr()->success('Photo Delated successfully ');
        return redirect(route('photogrid',$request->id));

    }

    public function photostore(Request $request,$id)
    {
        $category=array('carousel','about','dashprofile');
        $this->validate($request,[
            'image'        =>  'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
       // dd($request->trip_id);
        $img=$request->image->store('extraimages'); 
        $image=new Extraimage();
     
       $image->category=$category[$id];
        $image->image=$img;
        $image->save();
        toastr()->success('Photo Added successfully ');
       
        return redirect(route('photogrid',$id));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //
         $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);
        //Create Post

        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();
        return redirect('/posts')->with('success','Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         
        $post = Post::find($id);
        return view('posts.show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit')->with('post',$post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);
        //Create Post

        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();
        return redirect('/posts')->with('success','Post Updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('/posts')->with('success','Post Deleted');
    }

}