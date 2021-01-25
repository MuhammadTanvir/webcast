<?php

namespace App\Http\Controllers\Backend\Series;

use App\Series;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $series=Series::all();
        return view('backend.pages.series.index',compact('series'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.series.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $series= new Series();
       $series->title= $request->title;
       $series->description= $request->description;
       $series->save();

       session()->flash('success','Data Stored Successfully!!!');
       return redirect()->route('admin.series.index');
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
    public function edit($id)
    {
        $series=Series::find($id);
        return view('backend.pages.series.edit',compact('series'));
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
       $series=Series::find($id);
       $series->title= $request->title;
       $series->description= $request->description;
       $series->save();

       session()->flash('success','Data Updated Successfully!!!');
       return redirect()->route('admin.series.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $series=Series::find($id);
       $series->delete();
       session()->flash('success','Data Updated Successfully!!!');
       return redirect()->route('admin.series.index');
    }
}
