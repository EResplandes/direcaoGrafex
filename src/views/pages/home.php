<?php $render('header'); ?>

<div class="container" style="box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px; padding: 30px">

    <div class="row">
        <div class="col-12">
            <h1>📋 Fila de Despacho</h1>
            <hr>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col-1">Nome de Guerra</th>
                        <th scope="col-4">Assunto</th>
                        <th scope="col-1">Status</th>
                        <th scope="col-3">Prioridade</th>
                        <th scope="col-3">...</th>

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
                            <td>

                                <div class="col-md-4">
                                    <select class="form-select" id="state" required>
                                        <option value="">Selecione...</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please provide a valid state.
                                    </div>
                                </div>


                            </td>
                            <td>
                                <div style="display: flex; gap: 5px;">

                                    <form method="POST" action="finalizar">
                                        <input name="id" value="<?= $dado['id']; ?>" type="hidden"></input>
                                        <button style="margin: 3px;" type="submit" class="btn btn-success">Finalizar</button>
                                    </form>
                                    <?php if ($dado['status'] == 'Despachando') continue ?>
                                    <form method="POST" action="despachar">
                                        <input name="id" value="<?= $dado['id']; ?>" type="hidden"></input>
                                        <button style="color:white; display: inline;" type="submit" class="btn btn-info">Despachando</button>
                                    </form>
                                </div>
                            </td>
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