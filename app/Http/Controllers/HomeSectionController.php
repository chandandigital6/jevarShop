<?php

namespace App\Http\Controllers;

use App\Http\Requests\HomeSectionRequest;
use App\Models\HomeSection;
use Illuminate\Http\Request;

class HomeSectionController extends Controller
{
    public function index(Request $request){
        $keyword = $request->input('keyword');
        $homeSection = HomeSection::query();

        if (!empty($keyword)) {
            $homeSection->where('title', 'like', "%$keyword%");
        }
        $homeSectionData = $homeSection->paginate(5);

        return view('homeSection.index',compact('homeSectionData'));
    }

    public function create(){
        return view('homeSection.create');
    }

    public function store(HomeSectionRequest $request){
//        dd($request);
        $homeSection=HomeSection::create($request->all());
//        $image = $request->file('image')->store('public/homeSection');
//
//        $homeSection->image = str_replace('public/', '', $image);
//        $homeSection->save();
        return redirect()->route('homeSection.index')->with('success', 'HomeSection  created successfully.');
    }

    public function edit(HomeSection $homeSection){

        return view('homeSection.edit',compact('homeSection'));
    }

    public function update(HomeSection $homeSection , HomeSectionRequest $request){
        $homeSectionData = $request->all();

//        if ($request->hasFile('image')) {
//            $imagePath = $request->file('image')->store('public/homeSection');
//            $homeSectionData['image'] = str_replace('public/', '', $imagePath);
//        }

        $homeSection->update($homeSectionData);

        return redirect()->route('homeSection.index')->with('success', 'homeSection item successfully updated');
    }


    public function delete(HomeSection $homeSection){
        $homeSection->delete();
        return redirect()->route('homeSection.index')->with('error','Successfully  homeSection items deleted');

    }
    public function duplicate(HomeSection $homeSection){
        $productDuplicate=$homeSection->replicate();
        $productDuplicate->save();
        return redirect()->back();
    }
}
