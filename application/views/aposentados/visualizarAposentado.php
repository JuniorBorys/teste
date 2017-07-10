<div class="accordion" id="collapse-group">
    <div class="accordion-group widget-box">
        <div class="accordion-heading">
            <div class="widget-title">
                <a data-parent="#collapse-group" href="#collapseGOne" data-toggle="collapse">
                    <span class="icon"><i class="icon-list"></i></span><h5>Dados do Aposentado</h5>
                </a>
            </div>
        </div>
        <div class="collapse in accordion-body">
            <div class="widget-content">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td style="text-align: right; width: 30%"><strong>Matricula</strong></td>
                            <td><?php echo $result->matricula; ?></td>
                        </tr>
                        <tr>
                            <td style="text-align: right"><strong>Nome</strong></td>
                            <td><?php echo $result->nome; ?></td>
                        </tr>
                        <tr>
                            <td style="text-align: right"><strong>Decreto</strong></td>
                            <td>R$ <?php echo $result->decreto; ?></td>
                        </tr>
                        <tr>
                            <td style="text-align: right"><strong>CPF</strong></td>
                            <td>R$ <?php echo $result->cpf; ?></td>
                        </tr>
                        <tr>
                            <td style="text-align: right"><strong>RG</strong></td>
                            <td><?php echo $result->rg; ?></td>
                        </tr>
                        <tr>
                            <td style="text-align: right"><strong>Data Nasc</strong></td>
                            <td><?php echo $result->dataNascimento; ?></td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

