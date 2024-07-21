

<footer>
    <div class="foot-head">
        <div class="location">
            <img src="{{ asset('img/icon/location-32.png') }}" alt="">
            <div class="text">
                <span>ADRESS</span>
                <span>Douala Camtel Bepanda, Douala Ndokoti Tradex station</span>
            </div>
        </div>
        <div class="phone">
            <img src="{{ asset('img/icon/phone-2-32.png') }}" alt="">
            <div class="text">
                <span>PHONE</span>
                <span>6 81 96 09 30</span>
            </div>
        </div>
        <div class="email">
            <img src="{{ asset('img/icon/new-post-32.png') }}" alt="" >
            <div class="text">
                <span>E-MAIL</span>
                <span>fouegangmeli@gmail.com</span>
            </div>
        </div>
    </div>
    <div class="foot-body">
        <div class="logo">
            <img src="{{ asset('img/logo.png') }}" alt="">
        </div>
        <div class="nav">
            <h3>NAVIGATION</h3>
            <ul>
                <li class="nav-item"><a href="boutiqueController.php" >Librairy Shop</a></li>
                <li class="nav-item"><a href="#" >About Us</a></li>
                <li class="nav-item"><a href="sign_upController.php" >Sign Up</a></li>
                <li class="nav-item"><a href="sign_inController.php" >Sign In</a></li>

            </ul>
        </div>
        <div class="qualif">
            <H3>QUALIFICATION</H3>
            <div>
                <img src="{{ asset('img/icon/logo.png') }}" alt="">
                <img src="{{ asset('img/icon/logo1.png') }}" alt="">
                <img src="{{ asset('img/icon/children.png') }}" alt="">
            </div>
        </div>
        <div class="cmt">
            <form action="/commentaire" method="post">
                @csrf

                <label for="cmt">Comment : </label>
                <textarea name="commentaire" id="cmt" cols="30" rows="6" placeholder="comment ........." ></textarea>
                <input type="hidden" name="id">
                <input type="hidden" name="email" >
                <button type="submit">send</button>
            </form>

        </div>
    </div>
    <div class="foot-foot">
        <span>Copyright &copy; 2024 - 2025 - Tous les droit reserves. </span>
        <span>Mention legales</span>
    </div>
</footer>

</div>
<script src="{{ asset('js/boutique.js') }}"></script>
<script src="{{ asset('js/find_book.js') }}"></script>
<script src="{{ asset('js/pagination.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>

</body>
</html>

