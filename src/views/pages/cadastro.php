<?php $render('header'); ?>

<div class="container" style="box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px; padding: 30px">
    
    <div class="row">
        <div class="col-12">
            <h1>📋 Cadastro</h1>
            <hr>
            <?php if (isset($mensagem)) : ?>
                <div class="alert alert-success" role="alert">
                    <p><?php echo $mensagem; ?></p>
                </div>
            <?php endif; ?>
            <br>
           
            <form method="POST" action="registrar">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nome de Guerra:</label>
                    <input required name="nome_guerra" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ex: 2º Ten Shirley">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Assunto:</label>
                    <textarea required name="assunto" class="form-control" id="exampleFormControlTextarea1" placeholder="Documentos sobre..." rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Registrar</button>
            </form>
        </div>
    </div>
</div>

<?php $render('footer'); ?>