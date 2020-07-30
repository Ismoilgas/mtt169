<?php

namespace App\Repositories;

use App\Models\ {
    Staf,
    Kiddynew,
    Image

};
use Illuminate\Support\Facades\DB;

class AdminRepository
{
    /**
     * The Model instance.
     *
     * @var \Illuminate\Database\Eloquent\Model
     */
    protected $model_staf;
    protected $model_new;
    protected $model_image;


    /**
     * Create a new ProductRepository instance.
     *
     * @param  \App\Models\Product $product
     */
    public function __construct(Staf $staf, Kiddynew $new, Image $image)
    {
        $this->model_staf = $staf;
        $this->model_new = $new;
        $this->model_image = $image;
    }

    /**
     * Create a query for Gallery.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function about()
    {
        $query = $this->model_staf
            ->select('id', 'name', 'position', 'image');
            // ->orderBy('id', 'desc');
        // dd($query);    
        return $query->get();
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
       Staf::create($request->all());
    }

        
    /**
     * Update product.
     *
     * @param  \App\Models\Product $product
     * @return void
     */            
    public function update($request, $product)
    {
       $product->update($request->all());
    }
}
