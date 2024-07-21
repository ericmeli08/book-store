@include('header')


        {{-- ============================================================================================================================================================================== --}}

        <main>
            <div class="livres">

                <div class="card">
                    <a href="{{ route('del_caddie') }}" class="cancel-btn" >Cancel</a>
                    <div class="row">
                        <h4>List Books</h4>
                        <P>{{ count($livres) }} Book{{ count($livres) > 1 ? 's' : '' }}</P>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>REF</th>
                                <th>Title</th>
                                <th>Amount</th>
                                <th>Prices</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $montant = 0;
                                $listeproduits = '';
                            @endphp
                            @foreach ($livres as $livre)

                                <tr class='ligne' >
                                <td>  {{ $livre->REF }} </td>
                                <td> {{ $livre->titre }}</td>
                                <td> x({{ $tab[$livre->id] }})</td>
                                <td>{{ $livre->pu * $tab[$livre->id]  }} $</td>
                                </tr>
                                @php
                                    $montant += $livre->pu * $tab[$livre->id];
                                    $listeproduits .= ',' . $livre->REF;
                                @endphp
                            @endforeach

                            @php
                                $listeproduits[0] = ' ';
                                $montant += 1000; //frais de livraison
                            @endphp

                            <tr class='ligne' ><td class='total'>Montant + Frais (1000) </td>
                            <td></td>
                            <td></td>
                            <td class='total'>{{ $montant }} frcs </td>
                            </tr>

                        </tbody>
                    </table>

                    <div class="table_footer">
                    <button class="previous" id="previous">Previous</button>
                    <div id="pagination" ></div>
                    <button class="next" id="next">Next</button>
                  </div>
                </div>
            </div>

            <div class="register">
                <div class="card">
                    <h1>Register book{{  count($livres)>1? 's': '' }}</h1>

                    <form action="{{ route('voir_caddie.traitement') }}" method="post">
                        @csrf

                        <input type="hidden" name="montant" value="{{  $montant }}" />
                        <input type="hidden" name="produits" value="{{ $listeproduits }}" />

                        <div>
                            <label for="name">Name :</label>
                            <input type="text" name="nomPrenom" id="name"  value="{{  isset($tab_profil) ? $tab_profil->nom : ""  }}" placeholder="name">
                        </div>
                        <div>
                            <label for="adresse">Adress :</label>
                            <input type="" name="adresse" id="adresse" value="{{ isset($tab_profil) ? $tab_profil->adresse : ""  }}" placeholder="Adresse">
                        </div>
                        <input type="submit" name="submit" value="Enregister la commande">
                    </form>
                </div>

            </div>
        </main>



        {{-- ============================================================================================================================================================================== --}}
        @include("footer")
