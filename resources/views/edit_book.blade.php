@include('header')
        {{-- -------------------------------------------------------------------------------------------------------- --}}




<main>
    <div class="register">



        <ul>
            @foreach ($errors->all() as $error)
                <li style="color: red;" >{{ $error }}</li>
            @endforeach
        </ul>
        <div class="card">
            <h1>Book register</h1>
            <form action="/edit_book/traitement" method="post">
                @csrf

                <div>
                    <label for="isbn">ISBN :</label>
                    <input type="text" name="ISBN" id="isbn" value="{{ $livre->ISBN }}">
                </div>
                <div>
                    <label for="titre">Title :</label>
                    <input type="text" name="titre" id="titre"  value="{{ $livre->titre }}">
                </div>
                <div>
                    <label for="auteur">Autor :</label>
                    <input type="text" name="auteur" id="auteur" value="{{ $livre->auteur }}" >
                </div>
                <div>
                    <label for="stock">Stock :</label>
                    <input type="number" name="stock" id="stock" value="{{ $livre->stock }}">
                </div>
                <div>
                    <label for="pu">Unit price:</label>
                    <input type="number" step="0.01" name="pu" id="pu" value="{{ $livre->pu }}" >
                </div>
                <div>
                    <label for="resumer">Resume:</label>
                    <input type="text"  name="resumer" id="resumer" value="{{ $livre->resumer }}">
                </div>
                    <input type="hidden" name="id" value="{{ $livre->id }}" >

                <input type="submit" name="submit" value="Register">
            </form>
        </div>
    </div>

</main>


{{-- ========================================================================================================================================================== --}}
@include("footer")
