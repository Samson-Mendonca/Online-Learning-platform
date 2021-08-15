<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Post;

class PostsController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$post = Post::all();
        $post = Post::orderBy('created_at','desc')->paginate(5);
       
        return view('posts.postIndex')->with('post',$post);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required',
            'body'=>'required',
            'cover_image'=>'image|nullable|max:1999',
            'video_file'=>'nullable',
        ]);
        //video file 
        if($request->hasFile('video_file')){
            $vfilenameWithExt = $request->file('video_file')->getClientOriginalName();

            $vfilename = pathinfo($vfilenameWithExt,PATHINFO_FILENAME);

            $vextension = $request->file('video_file')->getClientOriginalExtension();

            $vfilenameToStore= $vfilename.'_'.time().'.'.$vextension;

            $vpath = $request->file('video_file')->storeAs('public/video_files',$vfilenameToStore);

        }

        //image file
        
        if($request->hasFile('cover_image')){
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();

            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);

            $extension = $request->file('cover_image')->getClientOriginalExtension();

            $filenameToStore= $filename.'_'.time().'.'.$extension;

            $path = $request->file('cover_image')->storeAs('public/cover_images',$filenameToStore);

        }else{
            $filenameToStore = 'noimage.jpg';
        }





        $post = new Post();
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->user_id = auth()->user()->id;
        $post->cover_image =$filenameToStore;
        $post->video_file =$vfilenameToStore;

        $post->save();

        return redirect('/posts')->with('success', 'Post created successfully.');
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

        if(auth()->user()->id !== $post->user_id) {
            return redirect('/posts')->with('error','Unauthorized Page');
        }
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
        $this->validate($request,[
            'title'=>'required',
            'body'=>'required'
        ]);
                //video
        if($request->hasFile('video_file')){
            $vfilenameWithExt = $request->file('video_file')->getClientOriginalName();

            $vfilename = pathinfo($vfilenameWithExt,PATHINFO_FILENAME);

            $vextension = $request->file('video_file')->getClientOriginalExtension();

            $vfilenameToStore= $vfilename.'_'.time().'.'.$vextension;

            $vpath = $request->file('video_file')->storeAs('public/video_files',$vfilenameToStore);

        }
                //cover image
        if($request->hasFile('cover_image')){
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();

            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);

            $extension = $request->file('cover_image')->getClientOriginalExtension();

            $filenameToStore= $filename.'_'.time().'.'.$extension;

            $path = $request->file('cover_image')->storeAs('public/cover_images',$filenameToStore);

        }

        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        if($request->hasFile('cover_image')){
            $post->cover_image = $filenameToStore;
        }
        if($request->hasFile('video_file')){
            $post->video_file = $vfilenameToStore;
        }
        $post->save();

        return redirect('/posts')->with('success', 'Post edited successfully.');
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

        if(auth()->user()->id !== $post->user_id) {
            return redirect('/posts')->with('error','Unauthorized Page');
        }
        if($post->cover_image != 'noimage.jpg'){
            Storage::delete('public/storage/cover_images/'.$post->cover_image);
        }
        
        Storage::delete('public/storage/video_files/'.$post->video_file);
    
        $post->delete();

        return redirect('/posts')->with('success', 'Post deleted successfully.');
    }
}
