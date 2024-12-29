<?php

namespace App\Http\Controllers\Admin;

use App\Activity;
use App\Menu;
use App\Objects;
use App\Others;
use App\Service;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $service =   Service::all();
        return view('admin.service.index',compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'title' => 'required',

        ]);

        $image = $request->file('image');
        $slug = Str::slug($request->title);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug .'-'. $currentDate .'-'. uniqid() .'.'. $image->getClientOriginalExtension();
            if (!file_exists('uploads/service'))
            {
                mkdir('uploads/service', 0777 , true);
            }
            $image->move('uploads/service',$imagename);
        }else {
            $imagename = 'dafault.png';
        }


        $service = new Service();
        $service->title = $request->title;
        $service->sub_title = $request->sub_title;
        $service->short = $request->short;
        $service->slug = $slug;
        $service->image = $imagename;
        $service->description = $request->description;

        $service->save();
        return redirect()->route('service.index')->with('successMsg','Events Successfully Saved');

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
        $service =   Service::find($id);
        return view('admin/service/edit',compact('service'));
    }

    public function view($id)
    {
        $slug = $id;
        $service =   Service::find($id);

        return view('admin/service/view',compact('service','slug'));
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
        $this->validate($request,[
            'title' => 'required',
            'image' => 'mimes:jpeg,jpg,bmp,png',
        ]);
        $image = $request->file('image');
        $slug = Str::slug($request->title);
        $service = Service::find($id);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slug .'-'. $currentDate .'-'. uniqid() .'.'. $image->getClientOriginalExtension();
            if (!file_exists('uploads/service'))
            {
                mkdir('uploads/service', 0777 , true);
            }
            $image->move('uploads/service',$imagename);
        }else {
            $imagename = $service->image;
        }

        $service->title = $request->title;
        $service->slug = $slug;
        $service->short = $request->short;
        $service->sub_title = $request->sub_title;
        $service->description = $request->description;
        $service->image = $imagename;
        $service->save();
        return redirect()->route('service.index')->with('successMsg','Feature Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::find($id);
        if (file_exists('uploads/service/'.$service->image))
        {
            unlink('uploads/service/'.$service->image);
        }
        $service->delete();
        return redirect()->back()->with('successMsg','Feature Successfully Deleted');
    }

    public function details($slug){
        $news = Service::where('slug',$slug)->first();
        $main   =   Menu::orderBy('sequence','ASC')
            ->where('display',1)
            ->get();
        $objects2  =   Objects::orderBy('id','ASC')
            ->where('id',2)
            ->get();
        $footer   =   Menu::orderBy('sequence','ASC')
            ->where('footer1',1)
            ->get();
        $prnews   =   Activity::orderBy('id','DESC')
            ->limit(3)
            ->get();
            $contact1  =   Others::orderBy('id','ASC')
            ->where('id',2)
            ->get();

        return view('frontend/service.details',compact('main','objects2','contact1','footer','prnews','news'));
    }
}
