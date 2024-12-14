<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstructionController extends Controller
{
    public function show_instruction()
    {
        $data['page_title'] = 'Instruksi Penggunaan Aplikasi';

        return view('instruction', $data);
    }
}
