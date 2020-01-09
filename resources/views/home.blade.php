@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
               
           
                <painel-component titulo="Dashboard">

                    TESTE DE CONTEÚDO

                    <div class="row">
                        <div class="col-md-4">
                            <painel-component titulo="Titulo 1" cor=" panel-danger">
                                Teste conteúdo 1...
                            </painel-component>
                        </div>

                        <div class="col-md-4">
                            <painel-component titulo="Titulo 2"cor=" panel-warning">
                                Teste conteúdo 2...
                            </painel-component>
                        </div>

                        <div class="col-md-4">
                            <painel-component titulo="Titulo 3" cor=" panel-info"> 
                                Teste conteúdo 3...
                            </painel-component>
                        </div>                    
                    </div>

                </painel-component>

               
            
            </div>
        </div>
    </div>
@endsection