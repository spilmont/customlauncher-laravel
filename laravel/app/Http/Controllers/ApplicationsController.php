<?php

namespace App\Http\Controllers;

use App\Application;
use App\Categories;
use App\Http\Requests\AplliCreateEditRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ApplicationsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $applications = Application::where('user_id',Auth::user()->getAuthIdentifier())->get();



        return view('Appli.index',compact('applications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $application = new Application();
        $category= Categories::pluck('name', 'id');

        return view('Appli.create',compact('application','category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       Application::create([
            'name' => request('name'),
            'path' => request('path'),
            'cover' =>request('cover'),
            'categories_id' => request('categories_id'),
            'user_id' => auth()->id()
        ]);




        return redirect(route('app.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function show(Application $application)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $application= Application::findOrFail($id);
        return view('Appli.edit', compact('application'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function update(AplliCreateEditRequest $request, $id)
    {
        $application = Application::findOrFail($id);
        $application->fill(['user_id'=>Auth::user()->getAuthIdentifier()]);
        $application->update($request->all());





        return redirect(route('app.index', compact('application') ))->with('sucess',"L'application a bien était mise a jour");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){



    Application::find($id)->delete();



    return redirect()->route('app.index')->with('sucess',"L'application a était supprimée du launcher");
}



    public function start($id){

        $application = Application::findOrFail($id);

        system($application->path);




        return back();




    }
}
