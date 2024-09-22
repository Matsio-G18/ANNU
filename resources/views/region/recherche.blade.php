<!DOCTYPE html>
<html>
    <head>
        <title>Recherche une region</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container mt-5">
            <h1 class="mb-4">Recherche une region </h1>

            {{-- Formulaire de recherche --}}
            <form action="{{ url('/search') }}" method="GET">
                <div class="input-group mb-3">
                    <input type="text" name="search" class="form-control" placeholder="Rechercher une region" value="{{ request('search') }}">
                    <button class="btn btn-primary" type="submit">Rechercher</button>
                </div>
            </form>

            {{-- Affichage des résultats de recherche --}}
            @if($tb_regions->isNotEmpty())
                <ul class="list-group">
                    @foreach($tb_regions as $tb_region)
                        <li class="list-group-item">{{ $tb_region->tb_libelle_reg }}</li>
                    @endforeach
                </ul>
            @else
                <div class="alert alert-warning">Aucune region trouvée .</div>
            @endif
        </div>
    </body>
</html>