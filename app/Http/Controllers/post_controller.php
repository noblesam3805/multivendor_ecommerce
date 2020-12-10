<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artisan;
use App\Post;
use App\Comment;
use App\User;
class post_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function shop()
    {
        $count = Post::where('approved', 1)->count();
        $post = Post::where('approved', 1)->orderBy('id', 'desc')->paginate(9);
        return view('shop', compact('post','count'));
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
    public function store()
    {
        $data = request()->validate([
            'p_name' => 'required',
            'descr' => 'required',
            'p_price' => 'required',
            'p_mile' => 'required',
            'p_cat' => 'required',
            'cyl' => 'required',
            'air' => 'required',
            'dam' => 'required',
            'p_image' => ['required', 'image'],
        ]);

        $imgpath = request('p_image')->store('uploads','public');
        $s_img = request('s_img')->store('uploads','public');
        $t_img = request('t_img')->store('uploads','public');
        $f_img = request('f_img')->store('uploads','public');
        $ft_img = request('ft_img')->store('uploads','public');
        $sx_img = request('sx_img')->store('uploads','public');
        $st_img = request('st_img')->store('uploads','public');
        $e_img = request('e_img')->store('uploads','public');
        $n_img = request('n_img')->store('uploads','public');
        $tn_img = request('tn_img')->store('uploads','public');

        Auth()->user()->posts()->create([
            "p_name" => $data['p_name'],
            "descr" => $data['descr'],
            "p_price" => $data['p_price'],
            "p_mile" => $data['p_mile'],
            "cyl" => $data['cyl'],
            "air" => $data['air'],
            "dam" => $data['dam'],
            "p_cat" => $data['p_cat'],
            "p_image" => $imgpath,
            "s_img" => $s_img,
            "t_img" => $t_img,
            "f_img" => $f_img,
            "ft_img" => $ft_img,
            "sx_img" => $sx_img,
            "st_img" => $st_img,
            "e_img" => $e_img,
            "n_img" => $n_img,
            "tn_img" => $tn_img

            ]);
        session()->flash('message', 'Posted car is under review, It will be displayed after being approved by the Admin');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts= Post::find($id);
        return view('show', compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $items= Post::find($id);
        return view('edit', compact('items'));
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
          $item= post::find($id);
          $this->validate($request,[
              'p_name'=>'required',
              'descr'=>'required',
              'p_price'=>'required',
          ]);
            $imgpath = request('p_image')->store('uploads','public');
            $s_img = request('s_img')->store('uploads','public');
            $t_img = request('t_img')->store('uploads','public');
            $f_img = request('f_img')->store('uploads','public');
            $ft_img = request('ft_img')->store('uploads','public');
            $sx_img = request('sx_img')->store('uploads','public');
            $st_img = request('st_img')->store('uploads','public');

          $item->p_name = $request->p_name;
          $item->descr = $request->descr;
          $item->p_price = $request->p_price;
          $item->p_mile = $request->p_mile;
          $item->p_image = $imgpath;
          $item->s_img = $s_img;
          $item->t_img = $t_img;
          $item->f_img = $f_img;
          $item->ft_img = $ft_img;
          $item->sx_img = $sx_img;
          $item->st_img = $st_img;

          $item->save();
          session()->flash('message', 'Car Details Updated Successfully');
          return redirect()->back();
    }


      public function approve($id)
    {
        $ite = Post::find($id);
        $ite->approved = 1;
        $ite->save();
        session()->flash('message', 'Product Approved Successfully');
        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $item = Post::find($id);
        $item->delete();
        session()->flash('message', 'Product Deleted Successfully');
        return redirect('/home');
    }

    public function front()
    {
          //Artisan::call('make:model', ['name' => 'About']);
         //Artisan::call('cache:clear');
         //Artisan::call('storage:link');
        $posts = Post::where('p_cat', 'New')->where('approved', 1)->orderBy('id', 'desc')->offset(0)->limit(4)->get();
        $post = Post::where('approved', 1)->orderBy('id', 'desc')->offset(0)->limit(6)->get();
        return view('index', compact('post', 'posts'));
    }
}
