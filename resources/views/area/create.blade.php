@extends('layouts.app')

@section('content')
<div class="card p-4 shadow-sm" style="border-radius: 40px 0px 40px 0px; max-width: 480px; margin: 0 auto; border: 1px solid #e0e0e0;">
    <h2 class="text-center text-secondary mb-3" style="font-family: sans-serif; font-weight: 400;">
        Form<span style="color: #f0a030;">Area</span>
    </h2>
    <hr class="text-muted opacity-25">

    <form action="{{route('area.store')}}" method="POST">
        @csrf

        
        <div class="mb-3">
            <label for="full_name" class="form-label fw-semibold text-secondary small" >Nombre de Area :</label>
            <div class="input-group shadow-sm-inset">
                <span class="input-group-text bg-white text-muted border-end-0"> <i class="bi bi-caret-right-fill"></i></span>
                <input type="text" name="name" id="name" class="form-control border-start-0 ps-1" placeholder="Area">
            </div>

            <div class="text-center mb-2">
            <button type="submit" class="btn text-white px-5 py-2 fw-semibold" style="background-color: #cf7357; border-radius: 6px; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">Subir</button>
        </div>
        </div>
    </form>
</div>
@endsection