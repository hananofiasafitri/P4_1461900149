<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/tailwindcss@1.0.4/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<div class="w-2/3 mx-auto">
  <div class="bg-white shadow-md rounded my-6">
    <table class="text-left w-full border-collapse"> <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
      <thead>
        <tr>
          <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">ID</th>
          <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Judul</th>
          <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Jenis</th>
          <th class="py-4 px-6 bg-grey-lightest font-bold uppercase text-sm text-grey-dark border-b border-grey-light">Tahun Terbit</th>
        </tr>
      </thead>
      <tbody>
      @foreach($bukucontroller as $data)
        <tr class="hover:bg-grey-lighter">
          <td class="py-4 px-6 border-b border-grey-light">{{$data->id}}</td>
          <td class="py-4 px-6 border-b border-grey-light">{{$data->judul}}</td>
          <td class="py-4 px-6 border-b border-grey-light">{{$data->jenis}}</td>
          <td class="py-4 px-6 border-b border-grey-light">{{$data->tahun_terbit}}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>    
</body>
</html>