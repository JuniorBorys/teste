<div class="row-fluid" style="margin-top:0">
    <div class="span12">
        <div class="widget-box">
            <div class="widget-title">
                <span class="icon">
                    <i class="icon-user"></i>
                </span>
                <h5>Cadastro de Aposentado</h5>
            </div>
            <div class="widget-content nopadding">
                <?php
                if ($custom_error != '') {
                    echo '<div class="alert alert-danger">' . $custom_error . '</div>';
                }
                ?>
                <form action="<?php echo current_url(); ?>" id="formAposentado" method="post" class="form-horizontal" >
                    <div class="control-group">
                        <label for="matricula" class="control-label">Nome<span class="required">*</span></label>
                        <div class="controls">
                            <input id="nomeCliente" type="text" name="matricula" value="<?php echo set_value('matricula'); ?>"  />
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="nomeAposentado" class="control-label">Nome<span class="required">*</span></label>
                        <div class="controls">
                            <input id="nomeCliente" type="text" name="nomeAposentado" value="<?php echo set_value('nomeAposentado'); ?>"  />
                        </div>
                    </div>
                    <div class="control-group">
                        <label  class="control-label">Status*</label>
                        <div class="controls">
                            <select name="status" id="situacao">
                                <option value="1">Ativo</option>
                                <option value="0">Inativo</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="decreto" class="control-label">Decreto<span class="required">*</span></label>
                        <div class="controls">
                            <input id="decreto" type="text" name="decreto" value="<?php echo set_value('decreto'); ?>"  />
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="cpf" class="control-label">CPF<span class="required">*</span></label>
                        <div class="controls">
                            <input id="documento" type="text" name="cpf" value="<?php echo set_value('cpf'); ?>"  />
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="rg" class="control-label">RG<span class="required">*</span></label>
                        <div class="controls">
                            <input id="rg" type="text" name="rg" value="<?php echo set_value('rg'); ?>"  />
                        </div>
                    </div>

                    <div class="control-group">
                        <label for="dataNascimento" class="control-label">Data de Nascimento</label>
                        <div class="controls">
                            <input id="dataNascimento" class="span12 datepicker" type="text" name="dataNascimento" value=""  />
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="span12">
                            <div class="span6 offset3">
                                <button type="submit" class="btn btn-success"><i class="icon-plus icon-white"></i> Adicionar</button>
                                <a href="<?php echo base_url() ?>index.php/aposentados" id="" class="btn"><i class="icon-arrow-left"></i> Voltar</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script src="<?php echo base_url() ?>assets/js/jquery.cep.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery.validate.js"></script>
<script src="<?php echo base_url() ?>assets/js/jquery.mask.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#formAposentado').validate({
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

        $("#cep").mask("99999-999");
        $("#cpf").mask("999.999.99-99");
    });
</script>




