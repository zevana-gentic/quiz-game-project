<?php

namespace App\Http\Controllers\Admin;

use DB;
use Exception;
use File;
use Storage;
use Validator;
use App\Models\Option;
use App\Models\Question;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class QuestionController extends Controller
{
    public function question_list(Request $request)
    {
        $data['page_title'] = 'Kelola Kuis';
        $questions = Question::orderBy('id', 'asc');
        $data['questions'] = $questions->paginate(20);

        return view('list-question', $data);
    }

    public function question_add(Request $request)
    {
        $data['page_title'] = 'Tambah Kuis';

        return view('question-add', $data);
    }

    public function question_submit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            // 'question_value'            => 'required',
            'option_value'              => 'required',
            'answer_key'                => 'required',
            'image'                     => 'mimes:jpg,jpeg,png|max:2048',
        ],[
            'image.mimes'               => 'Format file salah. Format file harus JPG atau PNG.',
            'image.max'                 => 'Ukuran file terlalu besar. Ukuran maksimum file adalah 2MB (2048KB).',
            'question_value.required'   => 'Pertanyaan harus diisi.',
            'option_value.required'     => 'Pilihan Jawaban harus diisi.',
            'answer_key.required'       => 'Kunci Jawaban harus dipilih.',
        ]);

        if ($validator->fails()) {
            return redirect()->route('question.add')
                ->withErrors($validator)
                ->withInput()
                ->with(['error' => 'Lengkapi Data']);
        }

        try {
            DB::beginTransaction();

            $data = [
                'question_value'    => $request->question_value,
                'answer_key'        => $request->answer_key,
            ];

            if ($request->image) {
                $filename = Storage::disk('public_uploads')->put('question-image', $request->image);
                $data['image'] = $filename;
            }

            $question = Question::create($data);

            $data_option = [
                [
                    'question_id'   => $question->id,
                    'option_key'    => 'A',
                    'option_value'  => $request->option_value[0],
                    'created_at'    => now(),
                    'updated_at'    => now()
                ],
                [
                    'question_id'   => $question->id,
                    'option_key'    => 'B',
                    'option_value'  => $request->option_value[1],
                    'created_at'    => now(),
                    'updated_at'    => now()
                ],
                [
                    'question_id'   => $question->id,
                    'option_key'    => 'C',
                    'option_value'  => $request->option_value[2],
                    'created_at'    => now(),
                    'updated_at'    => now()
                ],
            ];

            Option::insert($data_option);

            DB::commit();

            return redirect()->route('question.add')->with(['success' => 'Berhasil Menambahkan Data Kuis']);
        } catch (Exception $e) {
            DB::rollback();
            File::delete('./uploads/' . $data['image']);

            return redirect()->route('question.add')>with(['error' => 'Lengkapi Data']);
        }

    }

    public function question_edit($question_id, Request $request)
    {
        $data['page_title'] = 'Ubah Data Kuis';
        $data['question'] = Question::find($question_id);
        $data['options'] = Option::where('question_id', $question_id)->get();

        return view('question-edit', $data);
    }

    public function question_update($question_id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            // 'question_value'            => 'required',
            'option_value'              => 'required',
            'answer_key'                => 'required',
            'image'                     => 'mimes:jpg,jpeg,png|max:2048',
        ],[
            'image.mimes'               => 'Format file salah. Format file harus JPG atau PNG.',
            'image.max'                 => 'Ukuran file terlalu besar. Ukuran maksimum file adalah 2MB (2048KB).',
            'question_value.required'   => 'Pertanyaan harus diisi.',
            'option_value.required'     => 'Pilihan Jawaban harus diisi.',
            'answer_key.required'       => 'Kunci Jawaban harus dipilih.',
        ]);

        if ($validator->fails()) {
            return redirect()->route('question.edit' , ['question_id' => $question_id])
                ->withErrors($validator)
                ->withInput()
                ->with(['error' => 'Terjadi Kesalahan']);
        }

        $question = Question::find($question_id);
        $option = Option::where('question_id', $question_id)->get();

        $data = [
            'question_value'    => $request->question_value,
            'answer_key'        => $request->answer_key,
        ];

        if ($request->image) {
            $filename = Storage::disk('public_uploads')->put('question-image', $request->image);
            $data['image'] = $filename;
        }
        if ($request->hasFile('image')) {
            $filename = Storage::disk('public_uploads')->put('question-image', $request->image);
            $data['image'] = $filename;
            if ($question->image) {
                File::delete('./uploads/' . $question->image);
            }
        } else {
            $data['image'] = $question->image;
        }

        $question ->update($data);


        $data_option = [
                'question_id'   => $question->id,
                'option_value'  => $request->option_value[0],
                'updated_at'    => now()
        ];
        $data_option2 = [
            'question_id'   => $question->id,
            'option_value'  => $request->option_value[1],
            'updated_at'    => now()
        ];
        $data_option3 = [
            'question_id'   => $question->id,
            'option_value'  => $request->option_value[2],
            'updated_at'    => now()
        ];

        $option[0]->update($data_option);
        $option[1]->update($data_option2);
        $option[2]->update($data_option3);


        return redirect()->route('question.edit', ['question_id' => $question->id])->with(['success' => 'Berhasil Mengubah Data Kuis']);
    }

    public function question_delete($question_id, Request $request)
    {
        $question = Question::find($question_id);
        $option = Option::where('question_id', $question_id);

        if ($question->image) {
            File::delete('./uploads/' . $question->image);
        }

        $option->delete();

        $question->delete();

        return redirect()->route('question.list')->with(['success' => 'Berhasil Menghapus Data Kuis']);
    }
}
