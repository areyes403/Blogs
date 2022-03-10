<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\User;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs= Blog::all();
        return view('blogs.index',compact('blogs'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $user=User::findOrFail($request->id);
        $blog=new Blog;

    

        $blog->titulo=$request->titulo;
        $blog->resumen=$request->resumen;
        $blog->contenido=$request->contenido;
        
        if($request->hasfile('imagen')):
            $request['imagen']=$request->file('imagen')->store('uploads','public');
         endif;

        $blog->imagen=$request->imagen;
        $user=$user->blogs()->save($blog);
        return redirect()->route('blog.show',$request->id);



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user=User::findOrFail($id);
        return view('blogs.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog=Blog::findOrFail($id);
        return view('blogs.edit',compact('blog'));
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
        //die($request->id);
        $user=User::findOrFail($id);
        //die($user);
        $blog=Blog::find($request->id);
        //die($blog);
        $blog->titulo=$request->titulo;
        $blog->resumen=$request->resumen;
        $blog->contenido=$request->contenido;
        $blog->imagen=$request->imagen;
        $user=$user->blogs()->save($blog);

        $blogs= Blog::all();

        return view('home'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog=Blog::findOrFail($id);
        $blog->delete();
         
        return redirect()->route('home');
    }

    public function crear_blog($id){
        $user=User::findOrFail($id);
        return view('blogs.create',compact('user'));
    }

    public function all_blogs($id){
        $user=User::findOrFail($id);
        $blogs= Blog::all();
        return view('blogs.index',compact('blogs','user')); 
    }

    public function show_admin($id){
        $blog=Blog::findOrFail($id);
        return view('blogs.show_one',compact('blog'));
    }

    public function show_user($id){
        $blog=Blog::findOrFail($id);
        return view('blogs.show_one',compact('blog'));
    }
}
