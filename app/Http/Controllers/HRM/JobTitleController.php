<?php

namespace App\Http\Controllers\HRM;

use App\HRM\JobTitle;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class JobTitleController extends Controller
{
    public function index()
    {
        $job_titles = JobTitle::orderBy('created_at', 'DESC')->get();
        return view('hrm.job_title.index')->with('job_titles', $job_titles);
    }

    public function create()
    {
        $job_title = new JobTitle;
        // $positions = Position::orderBy('created_at', 'DESC')->get();
        return view('hrm.job_title.create')
            ->with('job_title', $job_title);
    }


    public function store(Request $request)
    {
        // dd($request->all());
        $data =  $this->validate($request, [
            'name' =>  'required|unique:jobtitles,name',
            'job_description' =>  '',
        ]);

        // $job_title = job_title::create($data);
        $job_title = new JobTitle;
        $job_title->name = $request->name;
        $job_title->job_description = $request->job_description;
        $job_title->save();


        Session::flash('success',  $job_title->name .  ' registered successfully');
        return redirect()->route('job_title.index');
    }

    public function edit($id)
    {

        $job_title = JobTitle::findOrFail($id);
        return view('hrm.job_title.edit')
            ->with('job_title', $job_title);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [

            'name' =>  'required|unique:jobtitles,name,' . $id,
            'job_description' =>  '',
        ]);

        $job_title = JobTitle::findOrFail($id);
        $job_title->name = $request->name;
        $job_title->job_description = $request->job_description;
        $job_title->save();
        Session::flash('success',  $job_title->name . ' updated successfully');
        return redirect()->route('job_title.index');
    }
    public function destroy($id)
    {
        $job_title = JobTitle::findOrFail($id);
        $job_title->delete();
        return response()->json(['success' => 'job_title deleted successfully']);
    }
}
