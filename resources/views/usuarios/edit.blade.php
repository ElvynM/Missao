<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Teste</title>
</head>

<body>

    <div class="container mb-2">
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Edição</a>
            </div>
        </nav>

        <div class="jumbotron jumbotron-fluid mb-2">
            <div class="container">
                <h1 class="display-4">
                    @if (!empty($mensagem))
                        <div class="alert alert-success">
                            {{ $mensagem }}
                        </div>
                    @endif
                </h1>
            </div>
        </div>
    </div>

    <div class="container mb-2">
        <div class="card text-center" style="width: 18rem; border: 3px solid #48a5b9; border-radius: 10px;">
            <div class="card-body">
                <h5 class="card-title">Meus Usuários</h5>
                <button class="btn btn-primary">
                    <a class="card-text" href="{{ route('update', $usuarios->id) }}" data-bs-toggle="modal"
                        data-bs-target="#exampleModal"><i class="fa-solid fa-user-pen fa-2x"
                            style="color:#fff;"></i></a>
                </button>
                {{-- <a href="{{ route('update',$usuarios->id)}}" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary">Update</a> --}}
            </div>
        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal Edit</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('update', $usuarios->id) }}">
                            @csrf
                            <div class="row mb-2">
                                <div class="col">
                                    <input type="text" name="nome" value="{{ $usuarios->nome }}"
                                        class="form-control" placeholder="Nome">
                                </div>
                                <div class="col">
                                    <input type="text" name="email" value="{{ $usuarios->email }}"
                                        class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col">
                                    <input type="text" name="telefone" value="{{ $usuarios->telefone }}"
                                        class="form-control" placeholder="Telefone">
                                </div>
                                <div class="col">
                                    <input type="text" name="endereco" value="{{ $usuarios->endereco }}"
                                        class="form-control" placeholder="Endereco">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col">
                                    <input type="text" name="cidade" value="{{ $usuarios->cidade }}"
                                        class="form-control" placeholder="Cidade">
                                </div>
                                <div class="col">
                                    <input type="text" name="complemento" value="{{ $usuarios->complemento }}"
                                        class="form-control" placeholder="Complemento">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col">
                                    <input type="date" value="{{ $usuarios->dt_nascimento }}" name="dt_nascimento"
                                        class="form-control">
                                </div>
                                <div class="col">
                                    <input type="date" name="dt_batismo" value="{{ $usuarios->dt_batismo }}"
                                        class="form-control" placeholder="Batismo">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col">
                                    <input type="date" name="dt_conversao" value="{{ $usuarios->dt_conversao }}"
                                        class="form-control">
                                </div>
                                <div class="col">
                                    <input type="text" name="genero" class="form-control"
                                        value="{{ $usuarios->genero }}">
                                    {{-- <select name="genero" class="form-control">
                                        @foreach ($generos as $value => $label)
                                           @if ($label === '')
                                           <option value="">Selecione um gênero</option> 
                                           @endif
                                            <option value="{{ $value }}">{{ $label }}</option>
                                        @endforeach
                                    </select> --}}
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" id="close" class="btn btn-secondary"
                                    onclick="redirect();" data-bs-dismiss="modal">Close</button>
                                <button class="btn btn-primary">atualizar</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/functions.js') }}"></script>
</body>

</html>
