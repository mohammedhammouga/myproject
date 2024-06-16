<!-- resources/views/profile/show.blade.php -->
@extends('user.layoute')
@section('content')
<x-app-layout>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="card mt-10 sm:mt-0">
    <div class="card-body">
        <h4 class="card-title">Bio</h4>
        <form method="POST" action="{{ route('profile.updateBio') }}">
            @csrf
            <div class="form-group">
                <label for="bio">Your Bio</label>
                <textarea class="form-control" id="bio" name="bio" rows="4">{{ old('bio', $user->bio) }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update Bio</button>
        </form>
        <hr>
        <h4 class="mt-4">Your Current Bio</h4>
        <p>{{ $user->bio }}</p>
    </div>
</div>
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        @if (Laravel\Fortify\Features::canUpdateProfileInformation())
            @livewire('profile.update-profile-information-form')
            <x-section-border />
        @endif

        @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
            <div class="mt-10 sm:mt-0">
                @livewire('profile.update-password-form')
            </div>
            <x-section-border />
        @endif

        @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
            <x-section-border />
            <div class="mt-10 sm:mt-0">
                @livewire('profile.delete-user-form')
            </div>
        @endif

       
    </div>
</x-app-layout>
@endsection