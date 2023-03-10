@extends('master')
@section('title', 'Liste des réservations')
@section('body-class')
<body class="sub_page">
@endsection
@section('activeReservation')
<span class="sr-only">(current)
@endsection
@section('activeClassReservation')
active
@endsection
@section('content')
</div>
  <section class="about_section layout_padding">
    <div class="container  bg-white">
      <table class="table table-striped">
        <thead thead-dark>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Téléphone</th>
            <th scope="col">Email</th>
            <th scope="col">Nombre d'invités</th>
            <th scope="col">Date</th>
            <th scope="col">Heure d'arrivée</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($books as $book)
          <tr>
            <th scope="row">{{ $book->id }}</th>
            <td>{{ $book->name }}</td>
            <td>{{ $book->phone_number }}</td>
            <td>{{ $book->email }}</td>
            <td>{{ $book->guest_nbr }}</td>
            <td>{{ $book->date }}</td>
            <td>{{ $book->time }}</td>
          </tr>
        @endforeach  
        </tbody>
      </table>
      {{ $books }}
    </div>
  </section>
@endsection