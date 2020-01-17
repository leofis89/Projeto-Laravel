@extends('layouts.app')

@section('content')

     <pagina-component tamanho="9" >      
        
        <painel-component titulo="Lista de Artigos"> 
          
        <migalhas-component :lista="{{$listaMigalhas}}"  ></migalhas-component>
            <tabela-lista-component 

            v-bind:titulos="['ID', 'Titulo', 'Descrição']"
            v-bind:itens="[['1', 'PHP', 'Curso de PHP OO'], ['2', 'Vue.Js', 'Introdução ao Vue.Js'],
            ['3', 'Laravel', 'APIRest com Laravel'], ['4', 'Xampp', 'Servidores xampp']]"

            criar="#criar"
            detalhe="#detalhe"
            editar="#editar"
            deletar="#deletar"
            token="7887522323"
            >

            </tabela-lista-component>

        </painel-component>

    </pagina-component>         
    
@endsection


