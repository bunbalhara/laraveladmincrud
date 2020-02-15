<?php

namespace App\Http\Controllers\Admin;

use App\Models\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::all();
        return view('admin.question.index', compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.question.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'noseId'=>'required',
            'matalaId'=>'required',
            'question_text'=>'required',
            'question_points'=>'required',
        ]);

        if($validator->passes()){
            $question = new Question();

            $question->noseId = $request->noseId;
            $question->matalaId = $request->matalaId;
            $question->question_text = $request->question_text;
            $question->question_answer_1= $request->question_answer_1;
            $question->question_answer_2 = $request->question_answer_2;
            $question->question_answer_3 = $request->question_answer_3;
            $question->question_right_answer = $request->quesion_right_answer;
            $question->question_points = $request->question_points;
            $question->question_full_answer = $request->question_full_answer;
            $question->question_status = $request->question_status;

            $question->save();

            return redirect()->route('admin.question.index')->with(['success'=>'New Question created Successfully!']);
        }

        return back()->withErrors($validator->errors()->all());
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
        Question::find($id)->delete();
        return back()->with(['success'=>'One item deleted successfuly!']);
    }

    public function uploadImage(Request $request){
        try{
            $file=$request->file('file');
            $name = uniqid() . '_' . trim($file->getClientOriginalName());
            $path= asset('assets/images/question/'.$name);
            $file->move(public_path('assets/images/question/'), $name);
            $fileNameToStore= $path;
            return json_encode(['location' => $fileNameToStore]);
        }
        catch(\Exception $e){
            echo json_encode($e->getMessage());
        }
    }
}
