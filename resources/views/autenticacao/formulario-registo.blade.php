
<div class="container-fluid px-2 px-md-4">
      <br><br><br>
      <div class="card card-body mx-3 mx-md-4 mt-n6">
        <div class="row gx-4 mb-2">

          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1">
                <!--personalizacao start-->
                Registo de Cliente
                <!--personalizacao end-->
              </h5>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="row">
          <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-header pb-0 p-3">

                </div>
                <div class="card-body p-3">
                <ul class="list-group">
                <div class="input-group input-group-outline mb-3">
                  <label class="form-label">Nome</label>
                  <input type="text" name="nome" id="nome"  class="form-control">
                </div>
                <div class="input-group input-group-outline mb-3">
                  <label class="form-label">Apelido</label>
                  <input type="text" name="apelido" id="apelido" class="form-control">
                </div>
                <div class="input-group input-group-outline mb-3">
                  <label class="form-label">Email</label>
                  <input type="email" name="email" id="email" class="form-control">
                </div>
                <div class="input-group input-group-outline mb-3">
                  <label class="form-label">Password</label>
                  <input type="password" name="password" id="password" class="form-control">
                </div>
                <div class="input-group input-group-outline mb-3">
                  <label class="form-label">Telefone</label>
                  <input type="text" name="telefone" id="telefone" class="form-control">
                </div>
                <div class="input-group input-group-outline mb-3">
                  <label class="form-label">Endereço</label>
                  <input type="text" name="endereco" id="endereco" class="form-control">
                </div>
              </ul>
                </div>
              </div>
            </div>
            <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-header pb-0 p-3">

                </div>
                <div class="card-body p-3">
                  <ul class="list-group">
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">País</label>
                      <input type="text" name="pais" id="pais" class="form-control">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Cidade</label>
                      <input type="text" name="cidade" id="cidade" class="form-control">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Codigo postal</label>
                      <input type="text" name="codigo_postal" id="codigo_postal" class="form-control">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">Empresa</label>
                      <input type="text" name="empresa" id="empresa" class="form-control">
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <label class="form-label">NUIT</label>
                      <input type="text" name="nuit" id="nuit" class="form-control">
                    </div>
                  </ul>
                  <a class="btn btn-link text-dark text-gradient px-3 mb-0" href="{{ route('autenticacao.login')}}"><i class="material-icons text-sm me-2" title="Voltar">login</i>Voltar a login</a>
                  <button type="reset" class="btn btn-danger"><i class="material-icons text-sm me-2" title="Limpar">delete</i></button>
                  <button type="submit" class="btn btn-success"><i class="material-icons text-sm me-2" title="Salvar">save</i></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

