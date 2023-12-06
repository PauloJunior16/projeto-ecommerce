<?php include('partials/header.php'); ?>


<div class="banner">
    <form>
        <input type="radio" name="fancy" autofocus value="1" id="1" />
        <input type="radio" name="fancy" value="2" id="2" />
        <input type="radio" name="fancy" value="3" id="3" />
        <input type="radio" name="fancy" value="4" id="4" />
        <label for="1"><img class="img-carrosel" src="media/interior.jpg"></label>
        <label for="2"><img class="img-carrosel" src="media/interior3.jpg"></label>
        <label for="3"><img class="img-carrosel" src="media/interior2.jpg"></label>
        <label for="4"><img class="img-carrosel" src="media/interior5.jpg">
    </form>
</div>

<main>
    <section class="principal">
        <div>
            <h2 class="titulo-principal"> Sobre a Barbearia Invictus </h2>

            <img class="utensilios" src="media/util.jpg" alt="Utensilios">

            <p> Localizada no centro da cidade a <strong> Barbearia Invictus </strong> traz para o mercado o que há de
                melhor das barbearias atuais mesclado com um estudio de tatuagem bem equipado. Fundada em 2019, Barbearia Invictus
                já é destaque na cidade e conquista
                novos clientes a cada dia.
            </p>
            <p id="missao"><em>Nossa missão é: <strong>"Proporcionar auto-estima e qualidade de vida aos nossos
                        clientes".</strong></em>
            </p>
            <p class="txt-final">Oferecemos profissionais experientes e antenados às mudanças no mundo da moda. O
                atendimento possui
                padrão de excelência e agilidade, garantindo qualidade e satisfação dos nossos clientes.
            </p>
        </div>
    </section>

    <section class="beneficios">
        <h3 class="titulo-principal">Nosso diferencial</h3>

        <div class="conteudo-beneficios">
            <ul class="lista-beneficios">
                <li class="itens">Atendimento aos Clientes</li>
                <li class="itens">Espaço diferenciado</li>
                <li class="itens">Localização</li>
                <li class="itens">Profissionais Qualificados</li>
                <li class="itens">Pontualidade</li>
                <li class="itens">Higiene</li>
            </ul><img src="media/beneficios.jpg" class="imagem-beneficios"><img src="media/beneficios2.jpg"
                class="imagem-beneficios" alt="imagem-beneficios"><img src="media/beneficios3.jpg" class="imagem-beneficios"
                alt="imagem-beneficios" style="padding-left: 285px;"><img src="media/beneficios4.jpg"
                class="imagem-beneficios" alt="imagem-beneficios">
        </div>

        <div class="video">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/wcVVXUV0YUY" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
    </section>

    <section class="mapa">
        <h3 class="titulo-principal">Localização</h3>
        <p>Nosso estabelecimento está localizado no centro da cidade de São Paulo</p>

        <div class="mapa-conteudo">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.156384648548!2d-46.65787122445045!3d-23.56282626164648!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59c8dc125527%3A0x723ba07f4fe31aa3!2sUniversidade%20Cruzeiro%20do%20Sul!5e0!3m2!1spt-BR!2sbr!4v1701819914131!5m2!1spt-BR!2sbr"
                width="100%" height="400" frameborder="0" allowfullscreen="" class="mapa-janela">
            </iframe>
        </div>

    </section>
</main>
</main>

<?php include('partials/footer.php'); ?>