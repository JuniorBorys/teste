<?php if ($this->permission->checkPermission($this->session->userdata('permissao'), 'aAposentados')) { ?>
    <a href="<?php echo base_url(); ?>index.php/aposentados/adicionar" class="btn btn-success"><i class="icon-plus icon-white"></i> Adicionar Cliente</a>
<?php } ?>

<?php if (!$results) { ?>

    <div class="widget-box">
        <div class="widget-title">
            <span class="icon">
                <i class="icon-user"></i>
            </span>
            <h5>Aposentados</h5>

        </div>

        <div class="widget-content nopadding">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Matricula</th>
                        <th>Nome</th>
                        <th>Decreto</th>
                        <th>CPF</th>
                        <th>RG</th>
                        <th>Dt. Nascimento</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="5">Nenhum Aposentado Cadastrado</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

<?php } else {
    ?>
    <div class="widget-box">
        <div class="widget-title">
            <span class="icon">
                <i class="icon-user"></i>
            </span>
            <h5>Aposentados</h5>

        </div>

        <div class="widget-content nopadding">


            <table class="table table-bordered ">
                <thead>
                    <tr>
                        <th>Matricula</th>
                        <th>Nome</th>
                        <th>Decreto</th>
                        <th>CPF</th>
                        <th>RG</th>
                        <th>Dt.Nascimento</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($results as $r) {
                        echo '<tr>';
                        echo '<td>' . $r->matricula . '</td>';
                        echo '<td>' . $r->idAposentados . '</td>';
                        echo '<td>' . $r->nomeAposentado . '</td>';
                        echo '<td>' . $r->decreto . '</td>';
                        echo '<td>' . $r->cpf . '</td>';
                        echo '<td>' . $r->rg . '</td>';
                        echo '<td>' . $r->DataNascimento . '</td>';
                        echo '<td>';
                        if ($this->permission->checkPermission($this->session->userdata('permissao'), 'vAposentado')) {
                            echo '<a href="' . base_url() . 'index.php/aposentados/visualizar/' . $r->idAposentados . '" style="margin-right: 1%" class="btn tip-top" title="Ver mais detalhes"><i class="icon-eye-open"></i></a>';
                        }
                        if ($this->permission->checkPermission($this->session->userdata('permissao'), 'eAposentado')) {
                            echo '<a href="' . base_url() . 'index.php/aposentados/editar/' . $r->idAposentados . '" style="margin-right: 1%" class="btn btn-info tip-top" title="Editar Aposentado"><i class="icon-pencil icon-white"></i></a>';
                        }
                        if ($this->permission->checkPermission($this->session->userdata('permissao'), 'dAposentado')) {
                            echo '<a href="#modal-excluir" role="button" data-toggle="modal" aposentado="' . $r->idAposentados . '" style="margin-right: 1%" class="btn btn-danger tip-top" title="Excluir Aposentado"><i class="icon-remove icon-white"></i></a>';
                        }


                        echo '</td>';
                        echo '</tr>';
                    }
                    ?>
                    <tr>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <?php
    echo $this->pagination->create_links();
}
?>




<!-- Modal -->
<div id="modal-excluir" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <form action="<?php echo base_url() ?>index.php/aposentados/excluir" method="post" >
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h5 id="myModalLabel">Excluir Aposentado</h5>
        </div>
        <div class="modal-body">
            <input type="hidden" id="idCliente" name="id" value="" />
            <h5 style="text-align: center">Deseja realmente excluir este aposentado?</h5>
        </div>
        <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
            <button class="btn btn-danger">Excluir</button>
        </div>
    </form>
</div>






<script type="text/javascript">
    $(document).ready(function () {


        $(document).on('click', 'a', function (event) {

            var cliente = $(this).attr('cliente');
            $('#idCliente').val(cliente);

        });

    });

</script>
