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


@section("calc")
  <div class="calc_list">
    <p>PREZZO MINIMO: <br> {{ $min }}</p>
  </div>

  <div class="calc_list">
    <p>PREZZO MASSIMO: <br> {{ $max }}</p>
  </div>

  <div class="calc_list">
    <p>MEDIA PREZZI: <br> {{ $avg }}</p>
  </div>
@endsection
