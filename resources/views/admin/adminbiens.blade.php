@extends('layouts.appadmin')

@section('content')
<div class="card">
    <div class="card-header">
        <h5 class=" text-danger">Liste des biens</h5>
    </div>
    <div class="card-block table-border-style">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nom</th>
                        <th>Adresse</th>
                        <th>Propietaire</th>
                        <th>Etat</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($biens as $item)
                        <tr>
                            <th scope="row">{{ $item->id}}</th>
                            <td>{{ $item->nom}}</td>
                            <td>{{ $item->adresse}}</td>
                            <td>{{ $item->User->nom}}</td>
                            <td>
                                @if ($item->accept === 0)
                                    <form action="{{ route('admin.bien.update',$item->id)}}" method="post">
                                        @csrf
                                        @method('PUT')
                                        <button type="submit" class=" btn btn-danger">
                                            Publiez
                                        </button>
                                    </form>
                                @else
                                    <button class="btn btn-success">Ajouté</button>
                                @endif
                            </td>
                            <td><a href="{{ route('admin.bien.show',$item->id)}}" class=" btn btn-info text-white">Voir</a></td>
                        </tr>
                    @empty
                    <div class="alert alert-danger col-md">Aucun biens trouvé</div>
                    @endforelse

                </tbody>
            </table>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    @if ($biens->onFirstPage())
                        <li class="page-item disabled">
                            <span class="page-link">&laquo;</span>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $biens->previousPageUrl() }}" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                    @endif

                    @foreach ($biens->getUrlRange(1, $biens->lastPage()) as $page => $url)
                        <li class="page-item {{ $page == $biens->currentPage() ? 'active' : '' }}">
                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endforeach

                    @if ($biens->hasMorePages())
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