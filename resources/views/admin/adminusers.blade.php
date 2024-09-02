@extends('layouts.appadmin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class=" text-danger">Liste des proprietaires</h5>
        </div>
        <div class="card-block table-border-style">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Adresse</th>
                            <th>profession</th>
                            <th>Numero</th>
                            <th>Etat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $item)
                            <tr>
                                <th scope="row">{{ $item->id}}</th>
                                <td>{{ $item->nom}}</td>
                                <td>{{ $item->adresse}}</td>
                                <td>{{ $item->profession}}</td>
                                <th>{{$item->numero}}</th>
                                <td>
                                    @if ($item->admin === 0)
                                        <form action="" method="post">
                                            <button type="submit" class=" btn btn-danger">
                                                Publiez
                                            </button>
                                        </form>
                                    @else
                                        <button class="btn btn-success">Ajouté</button>
                                    @endif
                                </td>
                                <td><a href="" class=" btn btn-info text-white">Voir</a></td>
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
                                <a class="page-link" href="{{ $users->nextPageUrl() }}" aria-label="Next">
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