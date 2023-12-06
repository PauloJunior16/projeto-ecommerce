<?php include('partials/header-contato.php'); ?>

<main>
    <h2>Preencha nosso formulário para agendar seu horário e ficar por dentro de nossas promoções!</h2>

    <form autocomplete="off" method="post" action="partials/processa-formulario.php">
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" class="input-padrao" required placeholder="Digite seu nome">

        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" class="input-padrao" required placeholder="seuemail@dominio.com">

        <label for="telefone">Telefone</label>
        <input type="tel" id="telefone" name="telefone" class="input-padrao" required placeholder="(xx) xxxxx-xxxx">

        <label for="mensagem">Mensagem</label>
        <textarea id="mensagem" name="mensagem" cols="70" rows="10" class="input-padrao" required></textarea>

        <fieldset>
            <legend>Como prefere nosso contato?</legend>
            <label for="radio-email"> <input type="radio" name="contato" value="email" id="radio-email">Email</label>
            <label for="radio-telefone"> <input type="radio" name="contato" value="telefone" id="radio-telefone">Telefone</label>
            <label for="radio-whatsapp"> <input type="radio" name="contato" value="whatsapp" id="radio-whatsapp" checked>Whatsapp</label>
        </fieldset>

        <fieldset>
        <legend>Qual horário prefere ser atendido?</legend>
        <select name="horario">
            <option value="Manhã">Manhã</option>
            <option value="Tarde">Tarde</option>
            <option value="Noite">Noite</option>
        </select>
    </fieldset>

    <label class="checkbox">
        <input type="checkbox" name="novidades" checked> Gostaria de receber nossas novidades por email?
    </label>

    <input type="submit" value="Enviar formulário" class="enviar">
</form>
</main>


<?php include('partials/footer.php'); ?>
