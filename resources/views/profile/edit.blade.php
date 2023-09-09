<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('userdashboard/main.css')}}" />
    
    <title>profile</title>
</head>
<body>
    @include('big-ecommerce-main.layouts.header')
    <x-app-layout>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>
    
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>
    
                <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                    <div class="max-w-xl">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>
        </div>
    </x-app-layout>
    
</body>
<script src="{{asset('userdashboard/main.js')}}"></script>
<style>
    .alert {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 15px;
        border-radius: 4px;
        margin-bottom: 15px;
    }

    .alert.alert-success {
        background-color: #d4edda;
        border-color: #c3e6cb;
        color: #155724;
    }

    .alert a.close {
        color: inherit;
        text-decoration: none;
     }  
</style>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const closeButtons = document.querySelectorAll(".alert .close");
        
        closeButtons.forEach(function (button) {
            button.addEventListener("click", function () {
                const alert = this.closest(".alert");
                alert.style.display = "none";
            });
        });
    });
</script>
</html>
{{-- @extends('indexUser')
@section('title')
profile
@endsection
@section('content')
<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
@endsection
     --}}