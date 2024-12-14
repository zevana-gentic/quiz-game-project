<?php

namespace App\Http\Controllers;

use Auth;
use Validator;
use App\Models\User;
use App\Models\Question;
use App\Models\UserScore;
use App\Models\UserAnswer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class QuizController extends Controller
{
    public function quiz_start(Request $request)
    {
        $data['page_title'] = 'Pengerjaan Kuis';
        $data['user'] = Auth::user()->id;

        $questions = Question::with(['options']);

        if (Session::get('questions') == null) {
            $request->session()->put('questions', $questions->inRandomOrder()->limit(10)->get());
        }

        $data['questions'] = Session::get('questions');

        $request->session()->forget('last_url');
        $current_url = $request->fullUrl();
        $request->session()->put('last_url', $current_url);
        $data['last_url'] = Session::get('last_url');

        return view('quiz', $data);
    }

    public function quiz_submit(Request $request)
    {
        $current_url = $request->fullUrl();
        $request->session()->put('last_url', $current_url);
        $data['last_url'] = Session::get('last_url');

        $object = $request->all();

        $rules = [
            'question_id' => 'required',
            'answer'      => 'required'
        ];

        $validator = Validator::make($object, $rules);

        if ($validator->fails()) {
            return redirect()->to($current_url)->withErrors($validator)->withInput();
        } else {
            $user_answer = UserAnswer::where('question_id', $request->question_id)->first();
            $question = Question::find($request->question_id);

            if ($user_answer !== null) {
                if ($question->answer_key == $request->answer) {
                    $user_answer->update(['answer' => $request->answer, 'score' => 1]);
                } else {
                    $user_answer->update(['answer' => $request->answer, 'score' => 0]);
                }
            } else {
                if ($question->answer_key == $request->answer) {
                    UserAnswer::create([
                        'user_id'       => Auth::id(),
                        'question_id'   => $request->question_id,
                        'answer'        => $request->answer,
                        'score'         => 1
                    ]);
                } else {
                    UserAnswer::create([
                        'user_id'       => Auth::id(),
                        'question_id'   => $request->question_id,
                        'answer'        => $request->answer,
                        'score'         => 0
                    ]);
                }
            }
        }

        return response()->json($object, 200);
    }

    public function show_score(Request $request)
    {
        $data['page_title'] = 'Lihat Skor';
        $user = User::find(Auth::user()->id);
        $total_score = UserAnswer::where('user_id', $user->id)->sum('score');

        $user_score = UserScore::create([
            'user_id'     => $user->id,
            'total_score' => $total_score,
            'do_date'     => now(),
        ]);

        UserAnswer::where('user_id', $user->id)->delete();

        $data['user_score'] = $user_score;

        $request->session()->forget('questions');

        $request->session()->forget('last_url');
        $current_url = $request->fullUrl();
        $request->session()->put('last_url', $current_url);
        $data['last_url'] = Session::get('last_url');

        return view('quiz-result', $data);
    }
}
