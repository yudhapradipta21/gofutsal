@extends('layouts.app')
@section('content')
<h1>Lapangan</h1>
@if(count($lapangan) > 0)
    @foreach($lapangan as $lapang)
        <div class="well">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <img src="https://placeimg.com/640/480/arch" alt="No Image" style="width:100%; height:100%" >
                </div>
                <div class="col-md-8 col-sm-8">
                    <h3><a href="/posts/{{$lapang->id}}">{{$lapang->nama_lapang}}</a></h3>
                    <small>Dipasang tanggal {{$lapang->created_at}}</small>
                    <br>
                    {!! Form::open(['action' => ['LapanganController@destroy', $lapang->id] , 'method' => 'POST']) !!}
                    {!! Form::hidden('_method', 'DELETE') !!}
                    {!! Form::submit('Hapus', ['class' => 'btn btn-danger float-sm-right px-3 mx-1']) !!}
                    {!! Form::close() !!}
                    <a href="/lapangan/{{$lapang->id}}/edit" class="btn btn-primary float-sm-right px-4 mx-1">Ubah</a>
                    <a href="/lapangan/{{$lapang->id}}/edit" class="btn btn-primary float-sm-right px-4 mx-1">Lihat</a>
                </div>
            </div>
        </div>
    @endforeach
        {{-- {{$lapangan->links()}} --}}
    @else
        <p>No posts found</p>
@endif
@endsection