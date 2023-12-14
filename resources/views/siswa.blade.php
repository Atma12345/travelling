<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Laravel</title>
</head>
<body>

@extends('layouts.main')
@section ('content')
<center><h2>Data Siswa XII RPL A</h2></center>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Nisn</th>
      <th scope="col">Alamat</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Aan Fakthuroman</td>
      <td>00562731195</td>
      <td>Pule</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Dimas Sunar K</td>
      <td>0063837679</td>
      <td>Munjungan</td>
    </tr>
    <tr>
    <th scope="row">3</th>
      <td>Atma Wijaya K</td>
      <td>0065670026</td>
      <td>Dongko</td>
    </tr>
    <tr>
    <th scope="row">4</th>
      <td>Della Ayu</td>
      <td>0056743524</td>
      <td>Karangan</td>
    </tr>
    <tr>
    <th scope="row">5</th>
      <td>Arkan Arya</td>
      <td>0055870959</td>
      <td>Suruh</td>
    </tr>
    <tr>
    <th scope="row">6</th>
      <td>Achmad Rozaki</td>
      <td>0051613467</td>
      <td>Pogalan</td>
    </tr>
    <tr>
    <th scope="row">7</th>
      <td>Eka Nanda S</td>
      <td>0077392751</td>
      <td>Pule</td>
    </tr>
    <tr>
    <th scope="row">8</th>
      <td>Arya Endsha Wira Setia</td>
      <td>0066870052</td>
      <td>Karangan</td>
    </tr>
    <tr>
    <th scope="row">9</th>
      <td>Bagas Dwi Cahyo</td>
      <td>006034687</td>
      <td>Pule</td>
    </tr>
    <tr>
    <th scope="row">10</th>
    <td>Alfinanda Rangga S</td>
      <td>0062542906</td>
      <td>Pule</td>
    </tr>
  </tbody>
</table>
@endsection
</body>
</html>