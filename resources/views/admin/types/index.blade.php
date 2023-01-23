@extends('layouts.admin')

@section('content')
    <div class="container-fluid">
        <div class="row">
            @include('admin.partials.aside')
            <div class="col-10">
                <h3 class="text-center fw-bold py-4">GESTISCI I LINGUAGGI ED I FRAMEWORK PRESENTI NEL DB</h3>

                <table class="table w-50 m-auto mt-5">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">NOME</th>
                            <th scope="col">AGGIORNA</th>
                            <th scope="col">ELIMINA</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($types as $type)
                            <tr>
                                <th scope="row">{{ $type->id }}</th>
                                <form action="">
                                    <td>
                                        <input class="border-0" type="text" value="{{ $type->name }}">
                                    </td>
                                    <td>
                                        <button class="btn btn-warning">
                                            <i class="fa-regular fa-pen-to-square"></i>
                                        </button>
                                    </td>
                                </form>

                                <form method="POST" action="">
                                    @csrf
                                    @method('DELETE')
                                    <td>
                                        <button class="btn btn-danger" type="submit"><i
                                                class="fa-solid fa-trash"></i></button>
                                    </td>
                                </form>

                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection

@section('title')
    Progetti
@endsection
