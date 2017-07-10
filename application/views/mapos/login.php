
<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/matrix-login.css" />
        <link href="<?php echo base_url(); ?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        <script src="<?php echo base_url() ?>assets/js/jquery-1.10.2.min.js"></script>
        <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/fav.png">

    </head>
    <body>
        <div id="loginbox">
            <form id="loginform" method="post" action="<?php echo base_url() ?>index.php/mapos/verificarLogin">
                <?php if ($this->session->flashdata('error') != null) { ?>
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <?php echo $this->session->flashdata('error'); ?>
                    </div>
                <?php } ?>
                <div class="control-group normal_text"> <h3><img src="<?php echo base_url() ?>assets/img/logo.png" alt="Logo" /></h3></div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lo"><i class="icon-user"> </i></span><input type="email" id="email" name="email" placeholder="Email" />
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span><input type="password" id="senha" name="senha" placeholder="Senha" />
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link btn btn-danger" id="to-recover">Perdeu a Senha?</a></span>
                    <span class="pull-right"><button id="btn-acessar" class="btn btn-success btn"/> Acessar</button></span>
                </div>
            </form>
            <form id="recoverform" action="#" class="form-vertical">
                <p class="normal_text">Por favor digite seu E-mail cadastrado no sistema para receber instruções para nova senha</p>

                <div class="controls">
                    <div class="main_input_box">
                        <span class="add-on bg_lo"><i class="icon-envelope"></i></span><input type="text" placeholder="E-mail" />
                    </div>
                </div>

                <div class="form-actions">
                    <span class="pull-left"><a href="#" class="flip-link btn btn-info" id="to-login">Voltar para Login</a></span>
                    <span class="pull-right"><a class="btn btn-success"/>Enviar nova senha</a></span>
                </div>
            </form>
        </div>

        <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/matrix.login.js"></script>
        <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>assets/js/validate.js"></script>




        <script type="text/javascript">
            $(document).ready(function () {

                $('#email').focus();
                $("#loginform   ").validate({
                    rules: {
                        email: {required: true, email: true},
                        senha: {required: true}
                    },
                    messages: {
                        email: {required: 'Campo Requerido.', email: 'Insira Email válido'},
                        senha: {required: 'Campo Requerido.'}
                    },
                    submitHandler: function (form) {
                        var dados = $(form).serialize();
                        $('#btn-acessar').addClass('disabled');
                        $('#progress-acessar').removeClass('hide');

                        $.ajax({
                            type: "POST",
                            url: "<?php echo base_url(); ?>index.php/mapos/verificarLogin?ajax=true",
                            data: dados,
                            dataType: 'json',
                            success: function (data)
                            {
                                if (data.result == true) {
                                    window.location.href = "<?php echo base_url(); ?>index.php/mapos";
                                } else {


                                    $('#btn-acessar').removeClass('disabled');
                                    $('#progress-acessar').addClass('hide');

                                    $('#call-modal').trigger('click');
                                }
                            }
                        });

                        return false;
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



        <a href="#notification" id="call-modal" role="button" class="btn" data-toggle="modal" style="display: none ">notification</a>

        <div id="notification" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="myModalLabel">Aparecidanet</h4>
            </div>
            <div class="modal-body">
                <h5 style="text-align: center">Os dados de acesso estão incorretos, por favor tente novamente!</h5>
            </div>
            <div class="modal-footer">
                <button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Fechar</button>

            </div>
        </div>
    </body>

</html>
