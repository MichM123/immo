@extends('layouts.appadmin')

@session('status')
    <div class="alert alert-danger">
        Vous avez bien supprimer l'utilisateur
    </div>
@endsession

@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class=" text-danger">Liste des propiétaires</h5>
        </div>
        <div class="card-block table-border-style">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Adresse</th>
                            <th>Téléphone</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $item)
                            <tr>
                                <th scope="row">{{ $item->id }}</th>
                                <td>{{ $item->nom }}</td>
                                <td>{{ $item->prenom }}</td>
                                <td>{{ $item->adresse }}</td>
                                <td>{{ $item->telephone }}</td>
                                <td>
                                    <form action="{{route('admin.deleteuser',$item->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class=" btn btn-danger" onclick="confirm('Voulez vous vraiment supprimer ce utilisateur?')">
                                            Supprimer
                                        </button>
                                    </form>
                                </td>
                                <td><a href=" "
                                        class=" btn btn-info text-white">Voir</a></td>
                            </tr>
                        @empty
                            <div class="alert alert-danger col-md">Aucun biens trouvé</div>
                        @endforelse

                    </tbody>
                </table>
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        @if ($users->onFirstPage())
                            <li class="page-item disabled">
                                <span class="page-link">&laquo;</span>
                            </li>
                        @else
                            <li class="page-item">
                                <a class="page-link" href="{{ $users->previousPageUrl() }}" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                        @endif

                        @foreach ($users->getUrlRange(1, $users->lastPage()) as $page => $url)
                            <li class="page-item {{ $page == $users->currentPage() ? 'active' : '' }}">
                                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endforeach

                        @if ($users->hasMorePages())
                            <li class="page-item">
                                <a class="page-link" href="{{ $biens->nextPageUrl() }}" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        @else
                            <li class="page-item disabled">
                                <span class="page-link">&raquo;</span>
                            </li>
                        @endif
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection

