@extends('template')

@section('content')

<div class="col-12">
    <div class="card">
        <div class="card-header">
            <div class="row align-items-center">
                <div class="col-8">
                    <h3 class="mb-0">Editar proprietário</h3>
                </div>
            </div>
        </div>
        <div class="card-body">
            
            <form action="{{ route('proprietario.atualizar', $proprietario['id_proprietario']) }}" method="POST">

                @csrf

                <h6 class="heading-small text-muted mb-4">Informações gerais</h6>
                <div class="pl-lg-4">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-control-label" for="input-nome">Nome</label>
                                <input type="text" id="input-nome" class="form-control" name="nome" value="{{ $proprietario['nome'] }}" required>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-control-label" for="input-cpf">CPF *</label>
                                <input type="text" id="input-cpf" class="form-control cpf" name="cpf" value="{{ $proprietario['cpf'] }}" required>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label class="form-control-email" for="input-nome">Email *</label>
                                <input type="email" id="input-email" class="form-control" name="email" value="{{ $proprietario['email'] }}" required>
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-primary" type="submit">Salvar</button>
                    <a class="btn btn-light" href="{{ route('proprietario') }}">Cancelar</a>
                </div>

            </form>
        </div>
    </div>
</div>


@endsection