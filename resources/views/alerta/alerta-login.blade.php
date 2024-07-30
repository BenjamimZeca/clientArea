<!--Start Message Error-->
@if(\Illuminate\Support\Facades\Session::has('success'))
    <div class="alert alert-success alert-dismissible text-white" role="alert">
        <span class="text-sm">Sucesso: <a href="javascript:;" class="alert-link text-white"></a>{{session('success')}}</span>
        <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

@if(\Illuminate\Support\Facades\Session::has('error'))
    <div class="alert alert-danger alert-dismissible" role="alert">
        <!--<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>-->
        <strong>Erro de autenticação:</strong>{{session('error')}}
    </div>
@endif
<!--End Message Error-->
