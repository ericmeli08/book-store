@php
    $mon_panier = json_decode(request()->cookie('mon_panier'), true);
@endphp

@include('header')
        {{-- -------------------------------------------------------------------------------------------------------- --}}



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
                @if (session('status'))
                <div>
                    <p style="color: green;">{{ session('status') }}</p>
                </div>
                @endif
                <div class="card">
                    <div class="row">
                        <h4>List Books</h4>
                        <P>{{ count($livres) }} Book{{ count($livres) > 1 ? 's' : '' }}</P>
                    </div>
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th>REF</th>
                                <th>Titles</th>
                                <th>Autors</th>
                                <th>Amount</th>
                                <th>Completion</th>
                                <th>Actions</th>

                                @if($admin)
                                @endif
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($livres as $livre)

                                <tr class="ligne">
                                    <td> <a href="{{ route('boutique.affiche',['id' => $livre->id]) }}"> {{ $livre->REF }} </a> </td>
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
                    <div id="pagination" ></div>
                    <button class="next" id="next">Next</button>
                  </div>
                </div>
                <div class="select">
                    <div class="resume">
                        <h3>Resume</h3>
                        <br>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae atque repellat magnam sequi qui temporibus numquam similique possimus a dolor officiis molestias iusto alias voluptatem, odit aliquam fuga unde. Quos.
                            Totam beatae perspiciatis veniam ex! Laboriosam expedita placeat ut, enim maxime doloremque delectus incidunt, eveniet earum accusantium magnam porro rerum necessitatibus id nesciunt perferendis quidem vitae laudantium nam quasi quisquam?</p>
                        <br>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel quasi consectetur asperiores vero aut nobis eum saepe reiciendis fugit facilis ducimus molestiae mollitia deserunt, earum autem distinctio, officia eligendi! Culpa?
                            At corrupti labore quam dolorum eos sapiente maiores sunt nam praesentium debitis in quos alias porro beatae dolor blanditiis quia, pariatur sequi omnis rem nisi quaerat non. Mollitia, minima doloremque!</p>
                        <br>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores quo ipsa minus laudantium illo reprehenderit praesentium rem tempore quidem deleniti perferendis, voluptates blanditiis voluptatibus totam libero unde magnam itaque accusantium?
                            Fuga soluta magni iste aspernatur nesciunt velit libero voluptate unde, inventore accusantium, aut, possimus maiores saepe magnam! At, aliquid accusantium laboriosam saepe voluptatibus rerum fuga, unde quod vitae atque sit.</p>
                    </div>
                    <div class="info">
                        <h2>{{ $book->titre }}</h2>
                        <p>REF    : <i>{{ $book->REF }}</i> </p>
                        <p>ISBN   : <i>{{ nl2br($book->ISBN) }}</i> </p>
                        <p>Autor : <i>{{ nl2br($book->auteur) }}</i> </p>
                        <p> Stock : <i>{{ $book->stock }}</i></p>
                        <p><i>Add to cart </i></p>
                        <form action="{{ route('ajout_caddie') }}" method="post">
                            @csrf

                            <input type="hidden" name="id" value="{{ $id }}" />
                            <input type="submit" class="add-panier" value="{{ $book->pu * 1 }} frcs" />
                        </form>
                    </div>
                </div>

                @if (isset($mon_panier) && !empty($mon_panier))
                    <div class='panier'>
                        <p> Number of books in the cart : <span>{{ count($mon_panier) }} livre{{ empty($mon_panier) ? 's' : '' }}</span></p>
                        <form action='{{ route('voir_caddie.index') }}' method='get'>
                            @csrf
                            <input type='submit' class='add-panier' value='see the order'/>
                        </form>
                    </div>
                @endif

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

        {{-- ========================================================================================================================================================== --}}

        @include("footer")
