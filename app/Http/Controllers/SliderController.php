<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{

    public function index()
    {
        $sliders = Slider::get();
        return view('admin.slider.index', compact('sliders'));
    }
    
    public function create()
    {
        return view('admin.slider.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required|mimes:jpeg,png',
            'name' => 'required',
            'url' => 'required'
        ]);
        $image = $request->file('image')->store('public/slider');
        Slider::create([
            'image' => $image,
            'name' => $request->name,
            'url' => $request->url
        ]);
        notify()->success('Image bien ajouter');
        return redirect()->back();
    }

    public function destroy($id)
    {
        Slider::find($id)->delete();
        notify()->success('Image bien suprimée');
        return redirect()->back();
    }
}
