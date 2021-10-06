<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectFormController extends Controller
{
    public function projectForm() {
        return view('projectForm');
    }

    public function projectStore(Request $request) {
        $checklist=$request->input('lists');
        $content=$request->input('contents');
        $title=$request->projectTitle;
        $peole=$request->people;
        $email=$request->input('emails');
        $outline=$request->outline;
        $expectation=$request->expectation;
        // dd($content);

        // checklist에서 값들을 하나씩 가져와서 
        // check_list 테이블에 listname, content(내용) 저장
        // project 먼저 생성해두고 project_id를 외래키로 참조해서 저장
        // ㄴ> 이거 하려면 먼저 projects 테이블에 project 생성 해놓고 checklist 저장
        // project_name, outline, expectation 먼저 저장
        // project 테이블에 user_id 외래키로 가져와서 프로젝트 생성자의 user_id 외래키로 참조해서 저장

        $project = new Project();
        $project->project_name = $title;
        $project->outline = $outline;
        $project->expectation = $expectation;
        $project->user_id = auth()->user()->id;

        // dd($project);
        $project->save();


        // dd($project->id);
        // dd(DB::table('projects')->select('id')->where('project_name', '=', $title)->get());
        foreach($email as $e) {
            $participant = new Participant();
            $participant->project_id = $project->id;
            $participant->email = $e;
            $participant->save();
        };
        dd($participant);


    }
}
