@extends('template')

@section('content')

<div class="container-fluid div-list">
    <div class="row justify-content-md-center mb-2">
        <div class="col-sm-12 col-md-2">
            <img src="{{ asset('img/bg.png') }}" width="100" height="100" class="rounded-circle mt-3 mb-2 border border-light">
        </div>

        <div class="col-sm-12 col-md-3 text-sm-center text-md-left">
            <h4 class="m-1 pt-4">{{ $animal['nome'] }}</h4>
            <a class="btn btn-sm btn-secondary mb-3" href="{{ route('vacina.registrar', $animal['id_animal']) }}"> Vacinar</a>
            <a class="btn btn-sm btn-secondary mb-3" href="#"><span>Imprimir </span></a>
        </div>
    
    </div>
    
    <h4 class="text-center">Cartão de Vacinação</h4>

    <div class="container div-main-crud">
    
        <form method="post">
            @csrf
            @method('DELETE')
            
            <div class="row align-items-center">
                <div clas="col-md-2">
                    <button formaction="{{ route('vacina.excluirvarios') }}" type="submit" class="btn btn-sm btn-light"> <i class="bi bi-trash"></i> <span>Excluir selecionados</span></button>
                </div>
                
                <div class="col-md-5 ml-auto">
                    Por página:
                    <select class="form-select" id="input-raca" name="por_pagina">
                        <option value="10">10</option>
                        <option value="10">20</option>
                        <option value="10">30</option>
                        <option value="10">50</option>
                        <option value="10">100</option>
                    </select>

                    Ordem:
                    <select class="form-select" id="input-raca" name="ordem">
                        <option value="asc">Crescente</option>
                        <option value="desc">Decrescente</option>
                    </select>

                </div>
            </div>
        
            <table class="table table-sm table-hover table-borderless">
                <thead class="table-head">
                    <tr>
                        <th title="Selecionar todos"><input type="checkbox" class="selectall"/></th>
                        <th>Vacina</th>
                        <th>Dose</th>
                        <th>Aplicação</th>
                        <th>Revacinação</th>
                        <th>Veterinário</th>
                        <th>CRMV</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($vacinas as $item)
                        <tr>
                            <td><input type="checkbox" name="ids[]" value="{{ $item['id_vacina'] }}" class="selectbox"></td>
                            <td>{{ $item['vacina'] }}</td>
                            <td class="dose">{{ $item['dose'] }}</td>
                            <td>{{ $item['data_aplicacao'] }}</td>
                            <td>{{ $item['data_revacinacao'] }}</td>
                            <td>{{ $item['veterinario'] }}</td>
                            <td>{{ $item['registro_crmv'] }}</td>
                            <td>
                                <a href="{{ route('vacina.editar', $item['id_vacina']) }}" class="icon-crud" href=""><i class="bi bi-pencil-square"></i></a>
                                <a href="{{ route('vacina.excluir', $item['id_vacina'])}}" class="icon-crud" href=""><i class="bi bi-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                    
                </tbody>
                <tfoot class="table-head">
                    <tr>
                        <th title="Selecionar todos"><input type="checkbox" class="selectall2"/></th>
                        <th>Vacina</th>
                        <th>Dose</th>
                        <th>Aplicação</th>
                        <th>Revacinação</th>
                        <th>Veterinário</th>
                        <th>CRMV</th>
                        <th></th>
                    </tr>
                </tfoot>
            </table>
            <p>Mostrando 10 de 100 registros.</p>
           
        </form>
        
    </div>
</div>


@endsection