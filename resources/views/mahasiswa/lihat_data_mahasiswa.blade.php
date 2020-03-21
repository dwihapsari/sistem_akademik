@extends('template')

@section('main')
<div id="mahasiswa">
<h2>Data Mahasiswa</h2>
    @if(!empty($mahasiswa))
        <ul>
            @foreach($mahasiswa as $data)
            <li>{{ $data }}</li>
            @endforeach
        </ul>
            @else:
        <p>Data mahasiswa kosong.</p>
        @endif 
</div>
@stop

@section('footer')
<div id="footer">
    <p>&copy; Polines 2020</p>
</div>
@stop