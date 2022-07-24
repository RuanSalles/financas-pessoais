@extends('auth.layout.layout')
@section('title')
    Login
@endsection

@section('content')
    <section class="container-sm">

        <div class="pt-5">

            <form action="" method="post"
                  class="d-flex flex-wrap align-content-center justify-content-center flex-column">
                <div class="card-header">
                <a class="navbar-brand link-primary fw-bold" href="#"><i class="fa-solid fa-coins"></i> Financas
                    Pessoais</a>
                </div>
                <div class="w-50">
                    <label class="col-form-label">E-mail:</label>
                    <input type="text" class="form-control">
                </div>
                <div>
                    <label class="col-form-label">Senha:</label>
                    <input type="password" class="form-control">
                </div>
                <div class="flex-row justify-content-around">
                    <input type="checkbox">
                    <label class="form-label text-primary mt-2">Lembrar</label>
                </div>

                <a href="" class="btn btn-outline-primary mt-2 text-uppercase">Entrar</a>
                <a href="{{route('register')}}" class="btn btn-outline-success mt-2 text-uppercase">Registrar</a>

                <a href="{{route('recovery')}}" class="text-center mt-2 link-danger text-decoration-none">Esqueceu a senha?</a>

            </form>
        </div>
    </section>
@endsection
