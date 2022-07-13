<?php

namespace App\Http\Controllers;

use App\Models\Summernote;
use Illuminate\Http\Request;

class SummernoteController extends Controller
{
    public function postSummernoteeditor(Request $request){
        $this->validate($request, [
            'detail' => 'required',
            'feature' => 'required'
        ]);

        $detail = $request->input('detail');
        $feature = $request->input('feature');

        $dom = new \DomDocument();
        $dom->loadHTML($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

        $images = $dom->getElementsByTagName('img');

        foreach($images as $k => $img){
            $data = $img->getAttribute('src');

            list($type, $data) = explode(';', $data);
            list(, $data) = explode(',', $data);

            $data = base64_decode($data);

            $image_name = "/upload/" . time().$k.'.png';

            $path = public_path() . $image_name;

            file_put_contents($path, $data);

            $img->removeAttribute('src');
            $img->setAttribute('src', $image_name);
        }

        $detail = $dom->saveHTML();

        $summernote = new Summernote();
        $summernote->content = $detail;
        $summernote->feature = $feature;
        $summernote->save();

        echo "<h1>Feature</h1>" , $feature;
        echo "<h2>Details</h2>" , $detail;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\Summernote  $summernote
     * @return \Illuminate\Http\Response
     */
    public function show(Summernote $summernote)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Summernote  $summernote
     * @return \Illuminate\Http\Response
     */
    public function edit(Summernote $summernote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Summernote  $summernote
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Summernote $summernote)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Summernote  $summernote
     * @return \Illuminate\Http\Response
     */
    public function destroy(Summernote $summernote)
    {
        //
    }
}
