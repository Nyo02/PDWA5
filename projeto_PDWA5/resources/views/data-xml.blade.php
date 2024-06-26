<?xml version='1.0' encoding='UTF-8'?>
<data>
@foreach($registro as $item )
    <item>
        <instrumento>{{$item->Nome}}</instrumento>
        <categoria>{{$item->Categoria}}</categoria>
        <marca>{{$item->Marca}}</marca>
        <material>{{$item->Material}}</material>
        <preco>{{$item->Preco}}</preco>
        <dataCadastro>{{$item->Data_Cadastro}}</dataCadastro>
    </item>
    
@endforeach
</data>
