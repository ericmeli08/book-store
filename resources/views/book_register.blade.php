@include('header')
        {{-- -------------------------------------------------------------------------------------------------------- --}}




<main>
    <div class="register">

        @if (session('status'))
        <div>
            <p style="color: green;">{{ session('status') }}</p>
        </div>
        @endif

        <ul>
            @foreach ($errors->all() as $error)
                <li style="color: red;" >{{ $error }}</li>
            @endforeach
        </ul>
        <div class="card">
            <h1>Book register</h1>
            <form action="/book_register/traitement" method="post">
                @csrf

                <div>
                    <label for="isbn">ISBN :</label>
                    <input type="text" name="ISBN" id="isbn">
                </div>
                <div>
                    <label for="titre">Title :</label>
                    <input type="text" name="titre" id="titre">
                </div>
                <div>
                    <label for="auteur">Autor :</label>
                    <input type="text" name="auteur" id="auteur">
                </div>
                <div>
                    <label for="stock">Stock :</label>
                    <input type="number" name="stock" id="stock">
                </div>
                <div>
                    <label for="pu">Unit price:</label>
                    <input type="number" step="0.01" name="pu" id="pu">
                </div>
                <div>
                    <label for="resumer">Resume:</label>
                    <input type="text"  name="resumer" id="resumer">
                </div>
                    <input type="hidden" name="codeLivre" value="0" >
                    <input type="hidden" name="REF" value="0">

                <input type="submit" name="submit" value="Register">
            </form>
        </div>
    </div>
    <div class="missing">
        <div class="card">
            <div class="row">
                <h4>Missing Books</h4>
                <P>{{ count($livres) }} Book{{ count($livres) > 1 ? 's' : '' }}</P>
            </div>
            <table class="table align-items-center mb-0">
                <thead>
                    <tr>
                        <th>REF</th>
                        <th>Titles</th>
                        <th>Autors</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($livres as $livre)

                        <tr class="ligne">
                            <td> {{ $livre->REF }} </td>
                            <td> {{ $livre->titre }} </td>
                            <td> {{ $livre->auteur }} </td>
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
    </div>
</main>


{{-- ========================================================================================================================================================== --}}
@include("footer")
