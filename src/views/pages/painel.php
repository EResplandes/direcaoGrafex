<?php $render('header_painel'); ?>

<div class="container" style="box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px; padding: 30px">

    <div class="row">
        <div class="col-12">
            <h1>📋 Fila de Despacho</h1>
            <hr>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome de Guerra</th>
                        <th scope="col">Assunto</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <?php $contador = 1; ?>

                <tbody>
                    <?php foreach ($dados as $dado) : ?>
                        <?php if ($dado['status'] == 'Finalizado') continue; ?>
                        <tr>

                            <th scope="row"><?= $contador; ?></th>
                            <td><?= $dado['nome_guerra']; ?></td>
                            <td><?= $dado['assunto']; ?></td>
                            <td><?= $dado['status']; ?></td>

                        </tr>

                    <?php $contador++;
                    endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
    function recarregarPagina() {
        location.reload();
    }
    setInterval(recarregarPagina, 60000);
</script>

<?php $render('footer'); ?>