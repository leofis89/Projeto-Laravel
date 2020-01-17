@extends('layouts.app')

@section('content')

     <pagina-component tamanho="9" >      
        
        <painel-component titulo="Painel"> 

        <migalhas-component :lista="{{$listaMigalhas}}"  ></migalhas-component>

            <div class="row">
                
                <div class="col-md-4">    
                    <caixa-component qtd="80" titulo="Arigos" url="{{route('artigos.index')}}" cor="#f39c12" icone="fa fa-shopping-cart">
                    </caixa-component  >
                </div>

                <div class="col-md-4">
                    <caixa-component qtd="72" titulo="Usuarios" url="{{route('usuarios.index')}}" cor="blue" icone="ion ion-person-add">
                    </caixa-component>
                </div>

                <div class="col-md-4">
                    <caixa-component qtd="21" titulo="Autores" url="{{route('autores.index')}}" cor="green" icone="ion ion-stats-bars">
                    </caixa-component>
                </div>                    
            
            </div>

        </painel-component>

    </pagina-component>         
    
@endsection

