<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Series;
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
        $series=Series::paginate(10);
        //return $series;
        return view('frontend.series.index',compact('series'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Series $series)
    {
        return view('frontend.series.showSeries',compact('series'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function episodes(Series $series, $episodeNumber)
    {
       $video=$series->videos()->where('episode_number',$episodeNumber)->first();

        $nextVideo=$series->videos()->where('episode_number',$episodeNumber+1)->first();
        $nextVideoUrl=$nextVideo-> ulr ?? null;

        $breadCrumbs = [
            [
                'text'=> 'Browse',
                'href'=> route('series.index')
            ],
            [
                'text'=> $series->title,
                'href'=> route('series.show', $series)
            ],
            [
                'text'=> $video->title,
                'active'=> true
            ],

        ];
        return view('frontEnd.series.videos',compact('series','episodeNumber','video','nextVideoUrl','breadCrumbs'));
    }
}
