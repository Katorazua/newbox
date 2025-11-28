@extends('layouts.admin')

@section('title', 'Dashboard')
@section('page-title', 'Admin Dashboard')

@section('content')
<div class="grid grid-cols-3 gap-4">

    <div class="bg-white p-6 shadow rounded">
        <h2 class="text-lg font-bold">Total Posts</h2>
        <p class="text-2xl mt-2">{{ $post_count ?? 0 }}</p>
    </div>

    <div class="bg-white p-6 shadow rounded">
        <h2 class="text-lg font-bold">Total Users</h2>
        <p class="text-2xl mt-2">{{ $user_count ?? 0 }}</p>
    </div>

    <div class="bg-white p-6 shadow rounded">
        <h2 class="text-lg font-bold">Gallery Images</h2>
        <p class="text-2xl mt-2">{{ $gallery_count ?? 0 }}</p>
    </div>

</div>
@endsection
