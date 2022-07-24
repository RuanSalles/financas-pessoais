@extends('auth.layout.layout')
@section('title')
    Login
@endsection

@section('content')
    <section class="container-sm">

        <div class="pt-5">

            <form action="" method="post" class="d-flex flex-wrap align-content-center justify-content-center flex-column">
                <div>
                    <div class="d-flex justify-content-center">
                        <a class="navbar-brand link-primary text-center fw-bold" href="#"><i class="fa-solid fa-unlock-keyhole"></i> Recuperar Senha</a>
                    </div>
                </div>

                <div class="w-50 mt-2">
                    <input type="text" class="form-control" placeholder="E-mail">
                </div>

                <a href="" class="btn btn-outline-primary mt-2 text-uppercase">Recuperar Senha</a>
                <a href="{{route('login')}}" class="btn btn-outline-danger mt-2 text-uppercase">Cancelar</a>
            </form>
        </div>
    </section>
@endsection
