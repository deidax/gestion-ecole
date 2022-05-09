<!-- create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="card">
  <div class="card-body">
    <h4 class="card-title">List Etudiants</h4>
  </div>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">CIN</th>
      <th scope="col">Telephone</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($etudiants as $etudiant)
    <tr>
      <th scope="row">*</th>
      <td>{{$etudiant->user['name']}}</td>
      <td>{{$etudiant->user['prenom']}}</td>
      <td>{{$etudiant->user['cin']}}</td>
      <td>{{$etudiant->user['telephone']}}</td>
      <td>{{$etudiant->user['email']}}</td>
    </tr>
  @endforeach
  </tbody>
</table>
@endsection