@extends('layouts.layout-autenticacao')
@section('content')
<body class="">
<!-- End Navbar -->
  <div class="container-fluid py-4">
    <div class="row">

    </div>
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">

            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                  <form method="POST" action="{{ route('autenticacao.registo') }}" >
                    <!--formulario registo start-->
                    @csrf
                    @include('autenticacao.formulario-registo')
                  </form>
                </table>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
@endsection
