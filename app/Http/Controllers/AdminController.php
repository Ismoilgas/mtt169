<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Http\Controllers\Controller;
use App\ {
    Http\Controllers\Controller,
    Repositories\AdminRepository,
    Models\Staf,
    Models\Kiddynew,
    Models\Image
   
};


class AdminController extends Controller
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
    public function __construct(AdminRepository $repository)
    {
        // $this->middleware('auth');
        // $this->middleware('admin');
        // $this->middleware('admin')->only('create', 'store', 'edit', 'update', 'destroy');
        $this->middleware('admin');
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
     
        $teachers = $this->repository->about();

        return view('back.index', compact('teachers'));
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
       return view('back.products.create');     
    }

    /**
     * Store a new card.
     *
     * @return void
     */
    public function store(Request $request)
    {
       $this->repository->store($request);   

       return redirect(route('products.create'))->with('card-ok', 'New cards has been created...');     
    }

    /**
     * Edit-view for selected card.
     *
     * @return void
     */
    public function edit(Staf $card) /// !!!RESTful->find($id)
    {
       $this->authorize('manage', $card);

       return view('back.products.edit', compact('card'));     
    }

    /**
     * Update selected card.
     *
     * @return void
     */
    public function update(Request $request, Staf $card) // !!!RESTful->find($id)
    {
       $this->authorize('manage', $card);

       $this->repository->update($request, $card);

       return redirect(route('dashboard'))->with('card-updated', __('The card has been successfully updated'));     
    }

    /**
     * Delete selected card.
     *
     * @return void
     */
        public function destroy(Request $request, Staf $product)
    {
        $product->delete();

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
        return view('back.products.create', ['image' => $filename]);
    } 

}
