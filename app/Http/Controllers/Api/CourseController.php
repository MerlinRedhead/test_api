<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CourseStoreRequest;
use App\Http\Requests\StudentStoreRequest;
use App\Http\Resources\CourseResource;
use App\Http\Resources\StudentResource;
use App\Models\Course;
use Illuminate\Http\Request;

use App\Models\Student;
use Illuminate\Http\Response;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CourseResource::collection(Course::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CourseStoreRequest $request)
    {

        $created_course = Course::create($request->validated());

        return new CourseResource($created_course);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new CourseResource(Course::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CourseStoreRequest $request, Course $id)
    {
        $updated_course = Course::update($request->validated($id));

        return new CourseResource($updated_course);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();

        return response(null,Response::HTTP_NO_CONTENT);
    }

    public function new(StudentStoreRequest $request){
        $created_student = Student::create($request->validated());

        return new StudentResource($created_student);
    }
}
