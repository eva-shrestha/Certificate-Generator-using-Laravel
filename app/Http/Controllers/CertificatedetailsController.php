<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CertificateDetail;
use App\Models\Template;
use Intervention\Image\ImageManagerStatic as Image;
use PDF;


class CertificatedetailsController extends Controller
{
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
    public function create($id)
    {
        
        $templates = Template::find($id);
        return view('certificatedetails',compact('templates'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'template_id' => 'exists:templates,id',
            'name' => 'required',
            'event' => 'required',
            'position' => 'required',
            'date' => 'required',
        ]);


        $certificatedetails = new CertificateDetail;

        $certificatedetails->template_id = $request->template_id;
        $certificatedetails->name = $request['name'];
        $certificatedetails->position = $request['position'];
        $certificatedetails->event = $request['event'];
        $certificatedetails->date = $request['date'];

        $certificatedetails->save();

        $templates = Template::find($request['template_id']);

        $img = Image::make('images/'.$templates->image);
        // $img = Image::make('1.jpg');

        $text_color = "#000";

        $img->text($certificatedetails->name, $templates->name_x, $templates->name_y,function($font) use($text_color) {
            $font->file( public_path('font.ttf') );
            $font->size(70);
            $font->align('center');
            $font->color($text_color);
        });

        $img->text($certificatedetails->position, $templates->position_x, $templates->position_y,function($font) use($text_color) {
            $font->file( public_path('myriad.ttf') );
            $font->size(35);
            $font->align('center');
            $font->color($text_color);
        });

        $img->text($certificatedetails->event, $templates->event_x, $templates->event_y,function($font) use($text_color) {
            $font->file( public_path('myriad.ttf') );
            $font->size(35);
            $font->align('center');
            $font->color($text_color);
        });

        $img->text($certificatedetails->date, $templates->date_x, $templates->date_y,function($font) use($text_color) {
            $font->file( public_path('myriad.ttf') );
            $font->size(35);
            $font->align('center');
            $font->color($text_color);
        });

        // $img->text('Eva Shrestha', 825, 770,function($font) use($text_color) {
        //     $font->file( public_path('font.ttf') );
        //     $font->size(60);
        //     $font->align('center');
        //     $font->color($text_color);
        // });

        // $img->text('A+', 880, 930,function($font) use($text_color) {
        //     $font->file( public_path('myriad.ttf') );
        //     $font->size(35);
        //     $font->align('center');
        //     $font->color($text_color);
        // });

        // $img->text('Phtotshop Workshop conducted by DWIT Media Club', 825, 1010,function($font) use($text_color) {
        //     $font->file( public_path('myriad.ttf') );
        //     $font->size(35);
        //     $font->align('center');
        //     $font->color($text_color);
        // });

        // $img->text('1/5/2021', 270, 1130,function($font) use($text_color) {
        //     $font->file( public_path('myriad.ttf') );
        //     $font->size(35);
        //     $font->align('center');
        //     $font->color($text_color);
        // });
        
        
        // $extension = file($templates->image)->extension();
        // $name = $certificatedetails->name.'.'.$extension;
        $img->save('certificate.jpg', 60);
        return $img->response('jpg');

        // return redirect('dashboard');

    }

    public function downloadPDF(){

        $pdf = PDF::loadView('downloadpdf');
        return $pdf->download('pdf_file.pdf');
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
}
