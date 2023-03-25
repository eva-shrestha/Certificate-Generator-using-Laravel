<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Template;

class TemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $templates = Template::all();
        return view('templates.index', compact('templates'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('templates.create');
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
            'image'=>'required|image|mimes:jpg,png,jpeg|max:2000',
            'name_x'=>'required',
            'name_y'=>'required',
            'position_x'=>'required',
            'position_y'=>'required',
            'event_x'=>'required',
            'event_y'=>'required',
            'date_x'=>'required',
            'date_y'=>'required',
        ]);

        $templates = new Template;

        // storing image 
        $file = $request->file('image');               
        $extension = $request->file('image')->extension();
                  
        $name = time().'.'.$extension;
        $templates->image = $name;

        // $file->storeAs('public/images/'.$name);
        $file->move(public_path('images'), $name);

        $templates->name_x = $request['name_x'];
        $templates->name_y = $request['name_y'];
        $templates->position_x = $request['position_x'];
        $templates->position_y = $request['position_y'];
        $templates->event_x = $request['event_x'];
        $templates->event_y = $request['event_y'];
        $templates->date_x = $request['date_x'];
        $templates->date_y = $request['date_y'];

        $templates->save();

        return redirect('admin/templates');

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
        $templates = Template::find($id);
        return view('templates.edit', compact('templates'));
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
        $request->validate([
            'image'=>'required|image|mimes:jpg,png,jpeg|max:2000',
        ]);

        $templates = Template::find($id);

        if($request->hasFile('image')){
           if(Storage::exists('public/images/'.'/'.$templates->image)){
               Storage::delete('public/images/'.'/'.$templates->image);
           }

            $file = $request->file('image');               
            $extension = $request->file('image')->extension();
            $name = date().'.'.$extension;
            
            $file->storeAs('public/images/'.$name);
            
            $templates->image = $name;
        }

        $templates->name_x = $request->get('name_x');
        $templates->name_y = $request->get('name_y');
        $templates->position_x = $request->get('position_x');
        $templates->position_y = $request->get('position_y');
        $templates->event_x = $request->get('event_x');
        $templates->event_y = $request->get('event_y');
        $templates->date_x = $request->get('date_x');
        $templates->date_y = $request->get('date_y');

        $templates->save();

        return redirect('admin/templates');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $templates = Template::find($id);
        $templates->delete();
        return redirect('admin/templates');
    }

    public function userdashboard(){
        $templates = Template::all();
        return view('dashboard', compact('templates'));
    }
}
