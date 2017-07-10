<div class="row-fluid" style="margin-top:0">
    <div class="span12">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="icon-user"></i>
                </span>
                <h5>Editar Aposentado</h5>
            </div>
            <div class="widget-content nopadding">
                <?php
                if ($custom_error != '') {
                    echo '<div class="alert alert-danger">' . $custom_error . '</div>';
                }
                ?>
                <form action="<?php echo current_url(); ?>" id="formAposentado" method="post" class="form-horizontal" >
                    <div class="control-group">
                        <?php echo form_hidden('idAposentados', $result->idAposentados) ?>
                        <label for="matricula" class="control-label">Matricula<span class="required">*</span></label>
                        <div class="controls">
                            <input id="matricula" type="text" name="matricula" value="<?php echo $result->matricula; ?>"  />
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="nomeAposentado" class="control-label">Nome<span class="required">*</span></label>
                        <div class="controls">
                            <input id="nomeAposentado" type="text" name="nomeAposentado" value="<?php echo $result->nomeAposentado; ?>"  />
                        </div>
                    </div>
                    <div class="control-group">
                        <label  class="control-label">Status*</label>
                        <div class="controls">
                            <select name="status" id="status">
                                <?php
                                if ($result->situacao == 1) {
                                    $ativo = 'selected';
                                    $inativo = '';
                                } else {
                                    $ativo = '';
                                    $inativo = 'selected';
                                }
                                ?>
                                <option value="1" <?php echo $ativo; ?>>Ativo</option>
                                <option value="0" <?php echo $inativo; ?>>Inativo</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="decreto" class="control-label">Decreto<span class="required">*</span></label>
                        <div class="controls">
                            <input id="decreto" type="text" name="decreto" value="<?php echo $result->decreto; ?>"  />
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="cpf" class="control-label">CPF<span class="required">*</span></label>
                        <div class="controls">
                            <input id="cpf" type="text" name="cpf" value="<?php echo $result->cpf; ?>"  />
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="rg" class="control-label">Rg<span class="required">*</span></label>
                        <div class="controls">
                            <input id="rg" type="text" name="rg" value="<?php echo $result->rg; ?>"  />
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="dataNascimento" class="control-label">Dt. Nascimento</label>
                        <div class="controls">
                            <input id="dataNascimento" class="span12 datepicker" type="text" name="dataNascimento" value="<?php echo date('d/m/Y', strtotime($result->dataNascimento)); ?>"  />
                        </div>
                    </div>

                    <div class="form-actions">
                        <div class="span12">
                            <div class="span6 offset3">
                                <button type="submit" class="btn btn-primary"><i class="icon-ok icon-white"></i> Alterar</button>
                                <a href="<?php echo base_url() ?>index.php/aposentados" id="" class="btn"><i class="icon-arrow-left"></i> Voltar</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<script src="<?php echo base_url() ?>assets/js/jquery.validate.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#formCliente').validate({
            rules: {
                nomeCliente: {required: true},
                documento: {required: true},
                telefone: {required: true},
                email: {required: true},
                rua: {required: true},
                numero: {required: true},
                bairro: {required: true},
                cidade: {required: true},
                estado: {required: true},
                cep: {required: true}
            },
            messages: {
                nomeCliente: {required: 'Campo Requerido.'},
                documento: {required: 'Campo Requerido.'},
                telefone: {required: 'Campo Requerido.'},
                email: {required: 'Campo Requerido.'},
                rua: {required: 'Campo Requerido.'},
                numero: {required: 'Campo Requerido.'},
                bairro: {required: 'Campo Requerido.'},
                cidade: {required: 'Campo Requerido.'},
                estado: {required: 'Campo Requerido.'},
                cep: {required: 'Campo Requerido.'}

            },

            errorClass: "help-inline",
            errorElement: "span",
            highlight: function (element, errorClass, validClass) {
                $(element).parents('.control-group').addClass('error');
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).parents('.control-group').removeClass('error');
                $(element).parents('.control-group').addClass('success');
            }
        });
    });
</script>

