@extends('layouts.layout-facturacao')
@section('content')
<!-- End Navbar -->
<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">As minhas facturas</h6>
              </div>
     
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive">
                <table class="table table-striped table-hover ">

                <div class="card-body p-3">
                  <ul class="list-group">                    
                    <li class="list-group-item border-0 d-flex align-items-center px-0">
                      <div class="d-flex align-items-start  justify-content-center">

                        <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#basicModal"><i class="material-icons text-sm me-2" title="Criar">add</i>Criar</button>
                        <!-- Modal -->
                        <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">

                        <form method="POST" action="{{ route('cliente.criar-factura')}}" style="display: flex;">
                          @csrf
                          <!--form create start-->
                          <!--criar factura formulario inicio-->
                          <!--criar factura formulario inicio-->
                          <div class="col-12 col-xl-12">
                                <div class="card card-plain h-100">
                                  <div class="card-header pb-0 p-3" >
                                      <div class="card-body p-3">
                                        <ul class="list-group">
                                          <div class="input-group input-group-outline mb-3">
                                            <label class="form-label">Descrição</label>
                                            <input type="text" id="descricao" name="descricao" class="form-control">
                                          </div>

                                          <div class="input-group input-group-outline mb-3">
                                            <label class="form-label">Data de Emissão</label>
                                            <input type="date" id="data_emissao" name="data_emissao" class="form-control">
                                          </div>

                                          <div class="input-group input-group-outline mb-3">
                                            <label class="form-label">Data de Vencimento</label>
                                            <input type="date" id="data_vencimento" name="data_vencimento"class="form-control" >
                                          </div>
                                          
                                          <div class="input-group input-group-outline mb-3">
                                            <label class="form-label">Cliente</label>
                                              <select class="form-select color-dropdown" name="user_id" id="user_id" required>
                                                <option value="bg-primary" selected>Selecione</option>
                                                @foreach($users as $user)
                                                <option value="{{$user->id}}">{{$user->nome}} {{$user->apelido}}</option>
                                                @endforeach
                                              </select>
                                          
                                          </div>
                                          
                                          <div class="input-group input-group-outline mb-3">
                                            <label class="form-label">Total</label>
                                            <input type="number" id="total" name="total" step="0.01" min="0" placeholder="0.00" class="form-control">
                                          </div>

                                          <div class="input-group input-group-outline mb-3">
                                            <label class="form-label">Estado</label>
                                              <select class="form-select color-dropdown" name="status_id" id="status_id" required>
                                                <option value="bg-primary" selected>Selecione</option>
                                                @foreach($status as $statu)
                                                <option value="{{$statu->id}}">{{$statu->descricao}}</option>
                                                @endforeach
                                              </select>
                                            
                                          </div>
                          
                                          <div class="input-group input-group-outline mb-3">
                                            <!--
                                            <button type="reset" class="btn btn-danger"><i class="material-icons text-sm me-2" title="Limpar">delete</i></button>
                                            -->
                                            <button type="submit" class="btn btn-success"><i class="material-icons text-sm me-2" title="Salvar">save</i>Salvar</button>
                                          </div>
                                        </ul>
                                      </div>
                                  </div>
                                </div>        
                              </div>
                          </div>
                          <!--criar factura formulario fim-->
                          <!--form create end-->
                        </form>
                      </div>
                </div>
                  <thead class="">
                    <tr>
                    <th class="">#</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Factura N°</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Descrição</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Data de Emissão</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Data de Vencimento</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Cliente</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Total</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Estado</th>
                    </tr>
                  </thead>
                  <tbody class="">
                  @if(count ($facturas) > 0)
                    @foreach ($facturas as $factura)
                    <tr onclick="" class="align-items-center mb-0">
                      <td>
                        <p class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">{{$loop->iteration}}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{$factura->factura_n}}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{$factura->descricao}}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{$factura->data_emissao}}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{$factura->data_vencimento}}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{ $factura->user->nome }} {{ $factura->user->apelido }}</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{$factura->total}} </p>
                      </td>
                      <td>
                        <p class="badge badge-sm bg-gradient-success">{{$factura->status->descricao}}</p>
                      </td>
                    </tr>
                    @endforeach
                    @else
                    <tr>
                      <td colspan="9" style="color: red; "> Nenhum resultado encontrado!</td>
                    </tr>
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
