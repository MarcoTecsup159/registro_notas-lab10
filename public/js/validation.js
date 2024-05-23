document.getElementById('calificacionForm').addEventListener('submit', function(event) {
    var studentName = document.getElementById('student_name').value.trim();
    var courseName = document.getElementById('course_name').value.trim();
    var grade = document.getElementById('grade').value.trim();
    var studentNameError = document.getElementById('student_name-error');
    var courseNameError = document.getElementById('course_name-error');
    var gradeError = document.getElementById('grade-error');
    var isValid = true;

    studentNameError.innerHTML = '';
    courseNameError.innerHTML = '';
    gradeError.innerHTML = '';

    if (studentName === '') {
        studentNameError.innerHTML = 'El nombre del estudiante es obligatorio';
        isValid = false;
    }

    if (courseName === '') {
        courseNameError.innerHTML = 'El nombre del curso es obligatorio';
        isValid = false;
    }

    if (grade === '') {
        gradeError.innerHTML = 'La nota es obligatoria';
        isValid = false;
    } else if (isNaN(grade) || grade < 0 || grade > 100) {
        gradeError.innerHTML = 'La nota debe ser un número entre 0 y 100';
        isValid = false;
    }

    if (!isValid) {
        event.preventDefault();
    }
});
