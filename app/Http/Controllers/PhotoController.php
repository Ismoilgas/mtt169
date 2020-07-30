<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Controllers\Controller;
use App\ {
    Http\Controllers\Controller,
    Repositories\PhotoRepository,
    Models\Image
   
};


class PhotoController extends Controller
{
   

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $repository;    


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(PhotoRepository $repository)
    {
        // $this->middleware('auth');
        // $this->middleware('admin');
        $this->middleware('admin')->only('create', 'store', 'edit', 'update', 'destroy');
        // $this->middleware('admin');
        $this->repository = $repository;
        // $this->namespace = 'back';
    }

    /**
     * Show the application home-page.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
     
        // $photos = $this->repository->about();

        // return view('photo.index', compact('photos'));
    }

     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */    
        public function gallery(Image $image)
    {
        $photos = $this->repository->gallery();

        return view('back.images', compact('photos'));
    }


    /**
     * Create a new view for storing.
     *
     * @return void
     */
    public function create()
    {
       return view('back.photo.create');     
    }

    /**
     * Store a new card.
     *
     * @return void
     */
    public function store(Request $request)
    {
       $this->repository->store($request);   

       return redirect(route('photo.create'));     
    }

    

        /**
     * Delete selected card.
     *
     * @return void
     */
        public function destroy(Request $request, Image $image)
    {
     
        $image->delete();

        return $this->index($request);
    }

    /**
     * Upload a new image for creating a new product in storage.
     *
     * @param  ...
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {
        $file = $request->image;         
        $filecontent = $file->openFile()->fread($file->getSize());  
        $filename = date('YmdHis') . $file->getClientOriginalName();  
        $file->move(public_path() . '/images/', $filename);
        return view('back.photo.create', ['image' => $filename]);
    } 

}
