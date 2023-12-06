<?php include('partials/header-produtos.php'); ?>


    <main>
        <ul class="produtos">
            <li>
                <h2>Cabelo</h2>
                <img src="media/cabelo.jpg">
                <p class="produto-descricao">Na tesoura ou na maquina, como o cliente preferir</p>
            </li>
            <li>
                <h2>Barba</h2>
                <img src="media/barba.jpg">
                <p class="produto-descricao">Corte e desenho profissional de barba</p>
            </li>
            <li>
                <h2>Cabelo + Barba</h2>
                <img src="media/cabelo+barba.jpg">
                <p class="produto-descricao">Pacote completo de cabelo e barba</p>
            </li>
        </ul>

        <ul class="produtos2">
            <li>
                <h2>Tatuagem e piercing</h2>
                <p class="produto-descricao">Possuimos um extenso portfolio com desenhos nos mais diversos estilos,
                    venha fazer seu orçamento!</p>
                <div class="banner">
                    <form>
                        <input type="radio" name="fancy" autofocus value="1" id="1" />
                        <input type="radio" name="fancy" value="2" id="2" />
                        <input type="radio" name="fancy" value="3" id="3" />
                        <input type="radio" name="fancy" value="4" id="4" />
                        <label for="1"><img class="img-carrosel" src="media/port1.jpg"></label>
                        <label for="2"><img class="img-carrosel" src="media/port2.jpg"></label>
                        <label for="3"><img class="img-carrosel" src="media/port3.jpg"></label>
                        <label for="4"><img class="img-carrosel" src="media/port6.jpg">
                    </form>
                </div>
            </li>
        </ul>

    </main>

    <?php include('partials/footer.php'); ?>