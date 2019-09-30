@extends("layouts.bevande-layout")

@section("content")

  @foreach ($bevande as $bevanda)
    <div class="bev_list">
      <p>{{ $bevanda -> nome_bevanda}}</p>
      <p>{{ $bevanda -> marca}}</p>
      <p>{{ $bevanda -> prezzo}}</p>
      <p>{{ $bevanda -> data_di_scadenza}}</p>
    </div>
  @endforeach

@endsection
