<section>
    <table class="table mt-3 text-center">
        <thead>
            <th>#</th>
            <th>Valor digital</th>
            <th>Valor fisico</th>
            <th>Valor total</th>
            <th>Data</th>
        </thead>
        <tbody>
            <?php foreach ($historicos as $historico) { ?>
                <tr>
                    <td> <?= $historico->id ?></td>
                    <td> <?= $historico->valorDigital ?></td>
                    <td> <?= $historico->valorFisico ?></td>
                    <td> <?= $historico->valor_total ?></td>
                    <td> <?= date("d/m/Y | h-i-s", strtotime($historico->DATETIME)) ?>; </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</section>