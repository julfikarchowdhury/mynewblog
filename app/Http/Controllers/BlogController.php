<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;



class BlogController extends Controller
{
    //
    protected $limit=4;
    public function index(){
        $posts = Post::orderBy('created_at', 'DESC')->simplePaginate($this->limit);
        return view('blog.index',compact('posts'));

    }
    public function create($id){
        $uid=user::find($id);

        return view('blog.create',compact('uid'));

    }
    public function show($id){
        Post::find($id)->increment('view');
        $posts = Post::find($id);
        return view('blog.show',compact('posts'));
    }
    

    public function store(Request $request){
        
        // $abc = new post;
        // $abc->author_name = $request->author_name;
        // $abc->user_id = $request->user_id;
        // $abc->title = $request->title;
        // $abc->slug = $request->slug;
        // $abc->excerpt = $request->excerpt;
        // $abc->body = $request->body;
        // $abc->save();

        // $image= $request->image;
        // $name = $image->getClientOriginalName();
        // $image->storeAs('public/images',$name);
        // $image_save = new post;

        // $image_save->image = $name;
        // $image_save->save();
        $requestData = $request->all();
        $fileName = time().$request->file('image')->getClientOriginalName();
        $path = $request->file('image')->storeAs('images',$fileName, 'public');
        $requestData["image"] = '/storage/'.$path;
        post::create($requestData);
        dd($requestData);
        
        return redirect('/');
    }
    public function blogshow($user_id){
        $name=$user_id;
        $posts=post::where('user_id','LIKE','%'.$name.'%')->get();
        return view('blog.blogshow',compact('posts'));


    }
}
