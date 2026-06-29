<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FORM APRENDICE</title>
</head>
<body>
<h1>formulario aprendiz</h1>

<form action="{{route('aprendice.store')}}" method="POST" enctype="multipart/form-data">

@csrf

<label>
    Nombre:
    <br>
    <input type="text" name="name">
</label>
<br>
<br>

<label>
    Email:
    <br>
    <input type="email" name="email">
</label>
<br>
<br>

<label>
    Numero de celular:
    <br>
    <input type="number" name="cell_number">
</label>
<br>
<br>

<label>Selecciona el curso</label>

<select name="course_id" id="course_id">
    <option value="">Selecciona un curso</option>

    @foreach ($courses as $course )
    <option value="{{ $course->id }}">{{ $course->course_number}}</option>
    @endforeach
</select>
<br><br>

<label>Selecciona un computador</label>
<select name="computer_id" id="computer_id">
    <option value="">Computador</option>

    @foreach ($computers as $computer )
    <option value="{{ $computer->id }}">{{ $computer->number}}</option>
    @endforeach
</select>
<br><br>


<button type="submit">Enviar Formulario:</button>
</form>
