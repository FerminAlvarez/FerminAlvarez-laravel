@extends('layouts.template')

@section('title', 'Autores')

@section('content')
    <h2 class="card-title">Autores</h2>
    <div class="row">
        <div class="aligns-items-center mt-3 col-lg-12 shadow-lg p-3 mb-5 bg-body rounded">
            <table class="table align-middle table-striped display nowrap" cellspacing="0" id="authors-table" width=100%>
                <thead class="bg-light text-center">
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($authors as $author)
                        <tr class="text-center">
                            <td>{{$author->id}}</td>
                            <td>
                                <a href="/author/{{$author->id}}" class ="fw-bold mb-1 text-decoration-none">
                                    {{$author->name}}
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @section('table_name', 'authors-table')
@endsection
