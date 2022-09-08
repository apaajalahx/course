<?php

namespace App\Http\Controllers;

use App\Models\CourseActive;
use Illuminate\Http\Request;
use DataTables;
use DB;

class CourseActiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = CourseActive::with('mentor')->with('course')->with('member');
            return Datatables::of($data)
                    ->editColumn('mentor', function($data){
                        return $data->mentor->name;
                    })
                    ->editColumn('course', function($data){
                        return $data->course->name;
                    })
                    ->editColumn('member', function($data){
                        return $data->member->name;
                    })
                    ->make(true);
        }
        $member = DB::table('course_actives as a')
                    ->selectRaw('count(a.member_id) as total, b.name')
                    ->leftjoin('members as b', 'b.id', '=', 'a.member_id')
                    ->groupby('a.member_id')
                    ->orderbydesc('total')
                    ->limit(1)
                    ->get()[0];
        $golang = DB::table('course_actives as a')
                    ->selectRaw('count(a.course_id) as total, b.name')
                    ->leftjoin('courses as b', 'b.id', '=', 'a.course_id')
                    ->where('b.name', '=', 'Golang')
                    ->get()[0];
        $mentor = DB::table('course_actives as a')
                    ->selectRaw('count(a.mentor_id) as total, b.name')
                    ->leftjoin('mentors as b', 'b.id', '=', 'a.mentor_id')
                    ->groupby('a.mentor_id')
                    ->orderbydesc('total')
                    ->limit(1)
                    ->get()[0];
        return view('course', compact('member', 'golang', 'mentor'));
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
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        //
    }
}
