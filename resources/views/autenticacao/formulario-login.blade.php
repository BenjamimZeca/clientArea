    <div class="input-group input-group-outline my-3">
        <label class="form-label">Email</label>
        <input type="email" id="email" name="email" class="form-control">
    </div>
    <div class="input-group input-group-outline mb-3">
        <label class="form-label">Password</label>
        <input type="password" id="password" name="password"class="form-control">
    </div>
    <div class="form-check form-switch d-flex align-items-center mb-3">
        <input class="form-check-input" type="checkbox" id="rememberMe" checked>
        <label class="form-check-label mb-0 ms-3" for="rememberMe">Lembrar-me</label>
    </div>
    <div class="text-center">
        <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Entrar</button>
    </div>
    <p class="mt-4 text-sm text-center">
        Não tem uma conta?
        <a href="{{ route('autenticacao.formularioregisto') }}" class="text-primary text-gradient font-weight-bold">Registar</a>
    </p>
