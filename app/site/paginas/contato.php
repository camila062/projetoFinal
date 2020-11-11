<div class="container ">

    <div class="display-4"> <h1>Contato</h1></div>

    <div class="col-6 offset-3 mb-5">
        <form action="?pg=validaLogin" method="POST">

            <div class="form-group">
                <label for="inputEmail4">Nome</label>
                <input type="text" name="nome" class="form-control" id="inputEmail4" placeholder="Nome">
            </div>
            <div class="form-group">
                <label for="inputEmail4">E-mail</label>
                <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Mensagem</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="form-group text-right">
                <button type="submit" class="btn btn-primary alert alert-warning"> <span class="icon-minutemailer"></span> Enviar</button>
            </div>
        </form>

    </div>
</div>