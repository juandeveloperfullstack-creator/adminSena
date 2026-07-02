@extends('layouts.app')

@section('content')
<h1>formulario computer</h1>

<div class="card p-4 shadow-sm" style="border-radius: 40px 0px 40px 0px; max-width: 480px; margin: 0 auto; border: 1px solid #e0e0e0;">
    <h2 class="text-center text-secondary mb-3" style="font-family: sans-serif; font-weight: 400;">
        Form<span style="color: #f0a030;">Area</span>
    </h2>
    <hr class="text-muted opacity-25">

    <form action="{{route('computer.store')}}" method="POST">
        @csrf

        <!-- Full Name -->
        <div class="mb-3">
            <label for="full_name" class="form-label fw-semibold text-secondary small">Full Name :</label>
            <div class="input-group shadow-sm-inset">
                <span class="input-group-text bg-white text-muted border-end-0"><i class="bi bi-person-fill"></i></span>
                <input type="text" name="full_name" id="full_name" class="form-control border-start-0 ps-1" placeholder="Full Name">
            </div>
        </div>

        <!-- Email -->
        <div class="mb-3">
            <label for="email" class="form-label fw-semibold text-secondary small">Email :</label>
            <div class="input-group">
                <span class="input-group-text bg-white text-muted border-end-0"><i class="bi bi-envelope-fill"></i></span>
                <input type="email" name="email" id="email" class="form-control border-start-0 ps-1" placeholder="Email">
            </div>
        </div>

        <!-- Contact Number -->
        <div class="mb-3">
            <label for="contact_number" class="form-label fw-semibold text-secondary small">Contact Number :</label>
            <div class="input-group">
                <span class="input-group-text bg-white text-muted border-end-0"><i class="bi bi-phone-fill"></i></span>
                <input type="text" name="contact_number" id="contact_number" class="form-control border-start-0 ps-1" placeholder="Contact Number">
            </div>
        </div>

        <!-- Address -->
        <div class="mb-4">
            <label for="address" class="form-label fw-semibold text-secondary small">Address :</label>
            <div class="input-group">
                <span class="input-group-text bg-white text-muted border-end-0"><i class="bi bi-house-door-fill"></i></span>
                <input type="text" name="address" id="address" class="form-control border-start-0 ps-1" placeholder="Address">
            </div>
        </div>

        <!-- Submit Button -->
        <div class="text-center mb-2">
            <button type="submit" class="btn text-white px-5 py-2 fw-semibold" style="background-color: #cf7357; border-radius: 6px; box-shadow: 0 4px 6px rgba(0,0,0,0.1);">Submit</button>
        </div>
    </form>
</div>
@endsection


