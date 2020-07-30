<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ {
    Repositories\KiddyRepository,
    Models\Staf,
    Models\Kiddynew,
    Models\Image 
};

class KiddyController extends Controller
{
    /**
     * The Controller instance.
     *
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $repository;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(KiddyRepository $repository)
    {
        // $this->middleware('auth');
        $this->repository = $repository;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('front.index');
    }

    /**
     * Show the staff.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
        public function about(Staf $staf)
    {
        $teachers = $this->repository->about();

        return view('front.about', compact('teachers'));
        // return view('kiddy.about');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
        public function contact()
    {
        return view('front.contact');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */    
        public function gallery(Image $image)
    {
        $photos = $this->repository->gallery();

        return view('front.gallery', compact('photos'));
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */    
        public function packages()
    {
        return view('kiddy.packages');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */    
        public function pricing()
    {
        return view('kiddy.pricing');
    }
}
