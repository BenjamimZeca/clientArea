@extends('layouts.layout-perfil')
@section('content')
<!-- End Navbar -->
<div class="container-fluid px-2 px-md-4">
      <br><br><br>
      <div class="card card-body mx-3 mx-md-4 mt-n6">
        <div class="row gx-4 mb-2">
          <div class="col-auto">
            <div class="avatar avatar-xl position-relative">
              <img src="{{ url('assets/img/avatars/1.png')}}" alt="profile_image" class="w-100 border-radius-lg rounded-circle shadow-sm" alt="main_logo">

            </div>
          </div>
          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1">
                <!--personalizacao start-->
                @include('identificacao.nome')
                <!--personalizacao end-->
              </h5>
              <p class="mb-0 font-weight-normal text-sm">
                CLIENTE
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="row">
          <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-header pb-0 p-3">
                  <div class="row">
                    <div class="col-md-8 d-flex align-items-center">
                      <h6 class="mb-0">Dados Pessoais</h6>
                    </div>
                  </div>
                </div>
                <div class="card-body p-3">
                  <ul class="list-group">
                    <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Nome: </strong> 
                      <!--personalizacao start-->
                      @include('identificacao.nome')
                      <!--personalizacao end-->
                    </li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Email: </strong>
                      <!--personalizacao start-->
                      @include('identificacao.email')
                      <!--personalizacao end-->
                    </li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Telefone: </strong>
                      <!--personalizacao start-->
                      @include('identificacao.telefone')
                      <!--personalizacao end-->
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-header pb-0 p-3">
                  <div class="row">
                    <div class="col-md-8 d-flex align-items-center">
                      <h6 class="mb-0">Dados Facturação</h6>
                    </div>
                    <div class="col-md-4 text-end">
                    </div>
                  </div>
                </div>
                <div class="card-body p-3">
                  <ul class="list-group">
                    <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Endereço: </strong>
                      <!--personalizacao start-->
                      @include('identificacao.endereco')
                      <!--personalizacao end-->
                    </li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">País:</strong>
                      <!--personalizacao start-->
                      @include('identificacao.pais')
                      <!--personalizacao end-->
                    </li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Cidade: </strong>
                      <!--personalizacao start-->
                      @include('identificacao.cidade')
                      <!--personalizacao end-->
                    </li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Codigo Postal: </strong>
                     <!--personalizacao start-->
                     @include('identificacao.codigo-postal')
                      <!--personalizacao end-->
                    </li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Empresa: </strong>
                     <!--personalizacao start-->
                     @include('identificacao.empresa')
                      <!--personalizacao end-->
                    </li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">NUIT: </strong>
                     <!--personalizacao start-->
                     @include('identificacao.nuit')
                      <!--personalizacao end-->
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-header pb-0 p-3">
                  <h6 class="mb-0">Acção</h6>
                </div>
                <div class="card-body p-3">
                  <ul class="list-group">                    
                    <li class="list-group-item border-0 d-flex align-items-center px-0">
                      <div class="d-flex align-items-start  justify-content-center">
                        <!--<a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="material-icons text-sm me-2" title="Apagar conta">delete</i>Conta</a>-->
                        <!-- Button trigger modal start-->
                        <!--<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal"><i class="bx bx-plus"></i> CRIAR</button>-->
                        <!-- Button trigger modal start-->
                        
                      
                      
                        <!-- Default Modal -->
                        <!-- Button trigger modal -->
                        
                        
                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#basicModal"><i class="material-icons text-sm me-2" title="Alterar Profile">edit</i>Alterar</button>
                      
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
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
