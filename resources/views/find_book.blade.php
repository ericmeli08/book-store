@include('header')




{{-- ================================================================================================================================================================================ --}}
<div class="search">
    <div>
        <h1> Recherche d'un livre </h1>
        <form action="{{ route('find_book.traitement') }}" method="post">
            @csrf

            <div>
                <label for="">Choose the search field :</label><br>
                <select name="typeRech">
                    <option value="auteur"> Autor</option>
                    <option value="titre"> Title </option>
                    <option value="isbn"> ISBN</option>
                </select>
            </div>
            <div>
                <label for="">Enter the search term :</label><br>
                <input name="termeRech" type="text">
            </div>
            <br>
            <input type="submit" name="submit"  value="Rechercher">
        </form>
    </div>
</div>
<main>
    <aside class="services">
        <div>
            <h1>DELIVERY</h1>
            <div>
                For better experience you can book a delivery to directly go your book at home or at your workplace.
                <br><br><a href="#">READ MORE</a>
            </div>
            <div>
                <img src="{{ asset('img/illustrations/rocket-dark.png') }}" alt="">
            </div>
        </div>

    </aside>
    <article class="livres">

        <div class="card">
            <div class="row">
                <h4>List Books</h4>
                <P>{{ count($livres) }} Book{{ count($livres) > 1 ? 's' : '' }}</P>
            </div>
            <table class="table align-items-center mb-0">
                <thead>
                    <tr>
                        <th>REF</th>
                        <th>Autors</th>
                        <th>Titles</th>
                        <th>Amount</th>
                        <th>Completion</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($livres as $livre)

                        <tr class="ligne">
                            <td> <a href="{{ $_SERVER['PHP_SELF']."/{ $livre->id}" }}"> {{ $livre->REF }} </a> </td>
                            <td> {{ $livre->titre }} </td>
                            <td> {{ $livre->auteur }} </td>
                            <td><span> {{ $livre->pu * 1 }} frcs</span></td>
                            <td class="progress"> {{ $livre->stock }} <span><span class="progress-bar"></span></span></td>
                            <td>
                                <a class='edit' href="{{ route('edit_book.index',['id' => $livre->id]) }}">Edit</a>
                                <a class='delete' href="{{ route('delete_book',['id' => $livre->id]) }}"  onclick="return confirm('Etes vous sure de vouloir supprimer cette element ?')" > Delete</a>
                            </td>
                            @if($admin)
                            @endif
                        </tr>
                    @endforeach

                </tbody>
            </table>

            <div class="table_footer">
                <button class="previous" id="previous">Previous</button>
                <div id="pagination"></div>
                <button class="next" id="next">Next</button>
            </div>
        </div>
    </article>

    <aside class="section-commentaires">
        <h1>users comments</h1>
        <div class="commentaires">
            @foreach($commentaires as $commentaire)
                <div class='commentaire'>
                    <img src='{{ asset("img/icon/contacts.png") }}' alt=''>
                    <div class='cmt'>
                        <h5>{{ $commentaire->email }}</h5>
                        <span>{{ $commentaire->commentaire }}</span>
                        <span>{{ $commentaire->created_at }}</span>
                    </div>
                </div>
            @endforeach

        </div>
    </aside>
</main>


{{-- ========================================================================================================================================================================== --}}

@include("footer")
