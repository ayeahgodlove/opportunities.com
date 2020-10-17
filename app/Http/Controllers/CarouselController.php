<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carousel;
use App\Http\Requests\Carousel\CreateCarouselRequest;
use App\Http\Requests\Carousel\UpdateCarouselRequest;

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.carousel.index')->with('carousel', Carousel::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.carousel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCarouselRequest $request)
    {
        $image = $request->image->store('carousels');
        $carousel = Carousel::create([
            'title' => $request->title,
            'caption' => $request->caption,
            'image' => $image,
        ]);

        session()->flash('success', 'Carousel Added successfully.');

        return redirect(route('carousel.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Carousel $carousel)
    {
        return view('dashboard.carousel.create')->with('carousel', $carousel);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCarouselRequest $request, Carousel $carousel) 
    {
        $image = $request->image->store('carousels');
        $carousel->update([
            'title' => $request->title,
            'caption' => $request->caption,
            'image' => $image,
        ]);

        session()->flash('success', 'Carousel Banner Updated Successfully');
        
        return redirect(route('carousel.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $carousel = Carousel::find($id);
        $carousel->delete();

        session()->flash('success', 'Post deleted successfully.');
        
        return redirect(route('carousel.index'));
    }
}
