<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        {{-- bootstrap.min.css --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Add Comuna</title>
</head>

<body>
    <div class="card">

        <div class="card-header">
<div class="container">
    <h1 class="h1">Add Comuna</h1>
</div>
</div>

<div class="card-body">
<form method="POST" action="{{ route('comunas.update', ['comuna'=>$comuna->comu_codi]) }}">
    @method('put')
    <div class="mb-3">
      <label for="codigo" class="form-label">code</label>
      <input type="text" class="form-control" id="codigo" aria-describedby="codigoHelp" disabled value="{{ $comuna->comu_codi }}">
      <div id="codigoHelp" class="form-text">Commune Id.</div>
    </div>
    <div class="mb-3">
      <label for="name" class="form-label">Commune</label>
      <input type="text" required class="form-control" id="name" aria-describedby="nameHelp" placeholder="Comuna name." value="{{ $comuna->comu_nomb }}">
    </div>
    <div class="mb-3">
        <select class="form-select" id="municipaly" name="code" aria-label="Default select example">
          <option selected>Choose one...</option>
    @if ($municipio->muni_codi == $comuna->muni_codi)
        <option selected value="{{ $municipio->muni_codi }}">{{ $municipio->muni_nomb }}</option>
    @else
        <option selected value="{{ $municipio->muni_codi }}">{{ $municipio->muni_nomb }}</option>
    @endif
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
    <a href="{{ route('comunas.index') }}" class="btn btn-warning">Cancel</a>
  </form>
</div>
</div>
</body>

{{-- bootstrap.bundle.min.js --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
{{-- popper.min.js --}}
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
{{-- bootstrap.min.js --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>