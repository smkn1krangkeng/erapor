@extends('layout.frontend.main')
@section('judul_hal','Halaman Coba')
@push('css')
<h4>ini push css</h4>
@endpush
@push('scripts')
<h4>ini push script</h4>
@endpush
@section('konten')
<h1>Hello World</h1>
<i class="bi-alarm"></i> ini contoh icon bootstrap 5
@endsection