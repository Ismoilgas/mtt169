<?php

namespace App\Repositories;

use App\Models\ {

    Image

};
use Illuminate\Support\Facades\DB;

class PhotoRepository
{
    /**
     * The Model instance.
     *
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $model_image;


    /**
     * Create a new ProductRepository instance.
     *
     * @param  \App\Models\Product $product
     */
    public function __construct(Image $image)
    {
        $this->model_image = $image;
    }

    
    /**
     * Create a query for Gallery.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function gallery()
    {
        $query = $this->model_image
            ->select('id', 'image');
            // ->orderBy('id', 'desc');
        // dd($query);    
        return $query->get();
    }

        /**
     * Store a newly created product in storage.
     *
     * @param  \App\Http\Requests\CartRequest $request
     * @return \Illuminate\Http\Response
     */      
    public function store($request)
    {
       Image::create($request->all());
    }

        
    
}
