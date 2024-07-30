@extends('layouts.layout-cliente')
@section('content')
<!-- End Navbar -->
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Clientes</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead class="align-items-center mb-0">
                    <tr >
                    <th class="text-xs font-weight-bold mb-0">#</th>
                      <th class="text-xs font-weight-bold mb-0">Nome</th>
                      <th class="text-xs font-weight-bold mb-0">Email</th>
                      <th class="text-xs font-weight-bold mb-0">Password</th>
                      <th class="text-xs font-weight-bold mb-0">Telefone</th>
                      <th class="text-xs font-weight-bold mb-0">Endereço</th>
                      <th class="text-xs font-weight-bold mb-0">País</th>
                      <th class="text-xs font-weight-bold mb-0">Cidade</th>
                      <th class="text-xs font-weight-bold mb-0">Codigo postal</th>
                      <th class="text-xs font-weight-bold mb-0">Empresa</th>
                      <th class="text-xs font-weight-bold mb-0">NUIT</th>
                      <th class="text-xs font-weight-bold mb-0">Ação</th>
                    </tr>
                  </thead>
                  <tbody class="align-items-center mb-0">
                    <!--start foreach and count-->
                    @if(count ($users) > 0)
                    @foreach ($users as $user)
                    <tr onclick="">
                      <td>
                        <p class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{$loop->iteration}}</p>
                      </td>
                      <td>
                        <p class="text-center text-xxs font-weight-bolder ">{{$user->nome}} {{$user->apelido}}</p>
                      </td>
                      <td>
                        <p class="text-center text-secondary text-xxs font-weight-bolder ">{{$user->email}}</p>
                      </td>
                      <td>
                        <p class="text-center text-secondary text-xxs font-weight-bolder ">{{$user->password}}</p>
                      </td>
                      <td>
                        <p class="text-center text-secondary text-xxs font-weight-bolder ">{{$user->telefone}}</p>
                      </td>
                      <td>
                        <p class="text-center text-secondary text-xxs font-weight-bolder ">{{$user->endereco}}</p>
                      </td>
                      <td>
                        <p class="text-center text-secondary text-xxs font-weight-bolder ">{{$user->pais}}</p>
                      </td>
                      <td>
                        <p class="text-center text-secondary text-xxs font-weight-bolder ">{{$user->cidade}}</p>
                      </td>
                      <td>
                        <p class="text-center text-secondary text-xxs font-weight-bolder ">{{$user->codigo_postal}}</p>
                      </td>
                      <td>
                        <p class="text-center text-secondary text-xxs font-weight-bolder ">{{$user->empresa}}</p>
                      </td>
                      <td>
                        <p class="text-center text-secondary text-xxs font-weight-bolder ">{{$user->nuit}}</p>
                      </td>

                      <td class="align-middle text-center text-sm" style="display: flex;">
                          <button type="submit" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#basicModal"><i class="material-icons text-sm me-2" title="Alterar cliente">edit</i>Alterar

                          </button>                                 
                          <div class="card-body p-3">
                                <div class="d-flex align-items-start  justify-content-center">       
                                  <!-- Modal -->
                                  <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">

                                        <form method="POST" action="" style="display: flex;">
                                          @csrf
                                          <!--form create start-->
                                          @include('cliente.alterar-cliente')
                                          <!--form create end-->
                                        </form>
                                      </div>
                                    </div>
                                  </div>    
                                </div>
                          </div>

                        
                          <a href="">
                            <form action="" method="post">
                                    @csrf
                                    @method('DELETE')
                              <button type="button" class="btn btn-outline-secondary"><i class="material-icons text-sm me-2" title="Apagar cliente">delete</i>Apagar</a>

                              </button>
                            </form>   
                          </a>
                      </td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                      <td colspan="9" style="color: red; "> Nenhum resultado encontrado!</td>
                    </tr>
                    <td>

                      <a href="">
                          <button type="button" class="btn btn-outline-secondary"><i class="material-icons text-sm me-2" title="Apagar conta">delete</i>Apagar</a>

                          </button>
                      </a>
                      <a class="btn btn-link text-dark px-3 mb-0" data-bs-toggle="modal" data-bs-target="#basicModal"><i class="material-icons text-sm me-2" title="Edit Profile">save</i>Salvar</a> 
                      
                      </a>
                      
                         
                  </div>


                  </div>
                  </div>
                  </td>
                    @endif
                    <!--end foreach and count-->
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
