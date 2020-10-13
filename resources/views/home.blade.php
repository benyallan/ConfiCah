@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="antialiased text-center">
                <h1 class="alert alert-primary alert-link"> {{ Auth::user()->name }} </h1>
                <form>
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder=" {{ Auth::user()->email }} " readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="cpf">CPF</label>
                            <input type="text" class="form-control" id="cpf" placeholder=" {{ Auth::user()->cpf }} " readonly>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-2">
                            <label for="patente">Posto ou Graduação</label>
                            <select class="form-control" id="patente">
                                <option>Escolher...</option>
                                <option>Sd 2ª Cl PM</option>
                                <option>Sd PM</option>
                                <option>Cb PM</option>
                                <option>3º Sgt PM</option>
                                <option>2º Sgt PM</option>
                                <option>1º Sgt PM</option>
                                <option>Subten PM</option>
                                <option>Al Of PM</option>
                                <option>2º Ten PM</option>
                                <option>1º Ten PM</option>
                                <option>Cap PM</option>
                                <option>Maj PM</option>
                                <option>Ten Cel PM</option>
                                <option>Cel PM</option>
                            </select>
                          </div>
                        <div class="form-group col-md-6">
                            <label for="nomeGuerra">Nome de Guerra</label>
                            <input type="text" class="form-control" id="nomeGuerra" placeholder="">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="re">RE</label>
                            <input type="text" class="form-control" id="re" placeholder="RE somente números sem dígito">
                        </div>
                        <div class="form-group col-md-1">
                            <label for="reDig">Dígito</label>
                            <input type="text" class="form-control" id="reDig" placeholder="Dígito">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg">Entrar</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
