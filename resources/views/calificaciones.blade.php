@extends('layout')

@section('title', 'Ingreso de Calificaciones')

@section('content')
    <h2>Ingreso de Calificaciones</h2>

    <form id="calificacionForm" method="POST" action="{{ route('calificaciones.submit') }}">
        @csrf
        <div class="form-group">
            <label for="student_name">Nombre del Estudiante:</label>
            <input type="text" id="student_name" name="student_name" value="{{ old('student_name') }}" class="form-control">
            <span class="error-message" id="student_name-error"></span>
        </div>
        <div class="form-group">
            <label for="course_name">Nombre del Curso:</label>
            <input type="text" id="course_name" name="course_name" value="{{ old('course_name') }}" class="form-control">
            <span class="error-message" id="course_name-error"></span>
        </div>
        <div class="form-group">
            <label for="grade">Nota:</label>
            <input type="number" id="grade" name="grade" value="{{ old('grade') }}" class="form-control">
            <span class="error-message" id="grade-error"></span>
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
@endsection

@section('styles')
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
@endsection
