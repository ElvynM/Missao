<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>project</title>
</head>

<body>

    <div class="container mb-2">
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
            </div>
        </nav>

        <div class="jumbotron jumbotron-fluid mb-2">
            <div class="container">
                <h1 class="display-4">
                  @if (!empty($mensagem))
                      <div class="alert alert-success">
                        {{ $mensagem}}
                      </div>
                  @endif

                </h1>
            </div>
        </div>
    </div>

    <div class="container mb-2">

        <a href="usuarios/criar" class="btn btn-dark mb-4" data-bs-toggle="modal"
            data-bs-target="#exampleModal">Adicionar</a>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="/usuarios/criar">
                            @csrf
                            <div class="row mb-2">
                                <div class="col">
                                    <input type="text" name="nome" class="form-control" placeholder="Nome">
                                </div>
                                <div class="col">
                                    <input type="text" name="email" class="form-control" placeholder="Email">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col">
                                    <input type="text" name="telefone" class="form-control" placeholder="Telefone">
                                </div>
                                <div class="col">
                                    <input type="text" name="endereco" class="form-control" placeholder="Endereco">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col">
                                    <input type="text" name="cidade" class="form-control" placeholder="Cidade">
                                </div>
                                <div class="col">
                                    <input type="text" name="complemento" class="form-control"
                                        placeholder="Complemento">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col">
                                    <input type="date" name="dt_nascimento" class="form-control">
                                </div>
                                <div class="col">
                                    <input type="date" name="dt_batismo" class="form-control" placeholder="Batismo">
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col">
                                    <input type="date" name="dt_conversao" class="form-control">
                                </div>
                                <div class="col">
                                    <select name="genero" class="form-control">
                                        <option value="">Selecione um gênero</option>
                                        <option value="masculino">Masculino</option>
                                        <option value="Feminino">Feminino</option>
                                        {{-- @foreach ($generos as $id => $genero)
                                            <option value="{{ $id }}">{{ $genero }}</option>
                                        @endforeach --}}
                                    </select>
                                </div>
                            </div>
                            <button class="btn btn-primary">Adicionar</button>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button class="btn btn-primary">Adicionar</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">Nº</th>
                        <th scope="col">Name</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Email</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($usuarios as $usuario)
                            <th scope="row"><?= $usuario->id ?></th>
                            <td><?= $usuario->nome ?></td>
                            <td><?= $usuario->telefone ?></td>
                            <td><?= $usuario->email ?></td>
                            <td>
                                <a href="{{ route('list_edit',$usuario->id)}}">Editar</a>
                                <a href="/nome_da_rota/delete/{{ $usuario->id }}">Excluir</a>
                            </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
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
</body>

</html>
