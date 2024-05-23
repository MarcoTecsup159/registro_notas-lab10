<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calificacion;

class CalificacionController extends Controller
{
    public function showForm()
    {
        return view('calificaciones');
    }

    public function submitForm(Request $request)
    {
        $request->validate([
            'student_name' => 'required|string|max:100',
            'course_name' => 'required|string|max:100',
            'grade' => 'required|integer|min:0|max:100',
        ]);

        Calificacion::create([
            'student_name' => $request->input('student_name'),
            'course_name' => $request->input('course_name'),
            'grade' => $request->input('grade'),
        ]);

        return redirect()->back()->with('success', 'Calificación registrada con éxito!');
    }
}
