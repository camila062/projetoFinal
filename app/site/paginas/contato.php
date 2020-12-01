<div class="container ">

    <div class="display-4">
        <h1>Contato</h1>
    </div>

    <div class="col-6 offset-3 mb-5">
        <form action="?pg=cad-mensagem" method="POST">

            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" autofocus class="form-control" id="nome" placeholder="Nome">
            </div>

            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Email">
            </div>

            <div class="form-group">
                <label for="assunto">Selecione o assunto:</label>
                <div class="form-check">
                    <input class="form-check-input" name="assunto" type="radio" id="exampleRadios1" value="elogios" checked>
                    <label class="form-check-label" for="assunto">
                       Elogios
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" name="assunto" type="radio" id="exampleRadios2" value="agendamento" checked>
                    <label class="form-check-label"for="assunto">
                        Agendamento
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" name="assunto" type="radio" id="exampleRadios3" value="criticas" checked>
                    <label class="form-check-label" for="assunto">
                        Críticas / Problemas
                    </label>
                </div>
            </div>

            <div class="form-group">
                <label for="mensagem">Mensagem:</label>
                <textarea class="form-control" name="mensagem" id="mensagem" rows="3"></textarea>
            </div>

            <div class="form-group text-right">
                <button type="submit" class="btn btn-primary alert alert-warning"> <span class="icon-minutemailer"></span> Enviar</button>
            </div>
        </form>

    </div>
</div>