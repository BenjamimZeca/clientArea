<!--criar factura formulario inicio-->
<div class="col-12 col-xl-12">
      <div class="card card-plain h-100">
        <div class="card-header pb-0 p-3" >
            <div class="card-body p-3">
              <ul class="list-group">
                <div class="input-group input-group-outline mb-3">
                  <label class="form-label">Descrição</label>
                  <input type="text" class="form-control">
                </div>
                <div class="input-group input-group-outline mb-3">
                  <label class="form-label">Data de Emissão</label>
                  <input type="date" class="form-control">
                </div>
                <div class="input-group input-group-outline mb-3">
                  <label class="form-label">Data de Vencimento</label>
                  <input type="date" id="factura_n" name="factura_n"class="form-control" >
                </div>
                <div class="input-group input-group-outline mb-3">
                  <label class="form-label">Total</label>
                  <input type="number" id="total" name="total" step="0.01" min="0" placeholder="0.00" class="form-control">
                </div>
                <div class="input-group input-group-outline mb-3">
                  <label class="form-label">Cliente</label>
                  <input type="text" id="user_id" name="user_id" class="form-control">
                </div>
                <div class="input-group input-group-outline mb-3">
                  <label class="form-label">Estado</label>
                    <select class="form-select color-dropdown" name="user_id" id="user_id" required>
                      <option value="bg-primary" selected>Selecione</option>
                      @foreach($users as $user)
                      <option value="{{$sexo->id}}">{{$user->nome}} {{$user->apelido}}</option>
                      @endforeach
                    </select>
                  <input type="text" id="status_id" name="status_id" class="form-control">
                </div>
                <!--
                <div class="col mb-0">
                  <label for="emailBasic" class="form-label">SEXO</label>
                  <select class="form-select color-dropdown" name="user_sexo_id" id="user_sexo_id" required>
                  <option value="bg-primary" selected>Selecione</option>
                  @foreach($sexos as $sexo)
                  <option value="{{$sexo->id}}">{{$sexo->descricao}}</option>
                  @endforeach
                  </select>
                </div>
                -->
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
