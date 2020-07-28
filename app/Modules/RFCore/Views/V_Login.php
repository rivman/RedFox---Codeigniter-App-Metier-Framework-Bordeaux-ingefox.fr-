<?php
/**
 * @var $errors array
 * @var $action string
 */
?>
<div class="row h-100 justify-content-center">
    <article class="card-body">
        <h4 class="card-title mb-4 mt-1">Connexion</h4>
        <form id="formLogin" action="<?php echo base_url($action); ?>" method="post">
            <div class="form-group">
					<label>Nom d'utilisateur</label>
                <div class="input-group">
						<div class="input-group-prepend">
                            <span class="input-group-text bg-<?php echo THEME_COLOR; ?>"> <i
									class="fa fa-user text-white"></i> </span>
                    </div>
						<input name="username" class="form-control <?php if (isset($errors['username'])) echo "is-invalid";?>" placeholder="Nom d'utilisateur" type="text" value="<?php echo set_value('username'); ?>">
                    <?php
                    if (isset($errors['username'])) {
                        $error = "<div class=\"invalid-feedback\" role=\"alert\" style='margin-top: 7px'>";
                        $error .= $errors['username'];
                        $error .= "</div>";
                        echo $error;
                    }
                    ?>
                </div>
            </div>
            <div class="form-group">
				<label>Mot de passe</label>
                <div class="input-group">
					<div class="input-group-prepend">
                            <span class="input-group-text bg-<?php echo THEME_COLOR; ?>"> <i
									class="fa fa-lock text-white"></i> </span>
                    </div>
                    <input name="password" class="form-control <?php if (isset($errors['password'])) echo "is-invalid";?>" placeholder="******" type="password">
                    <?php
                    if (isset($errors['password'])) {
                        $error = "<div class=\"invalid-feedback\" role=\"alert\" style='margin-top: 7px'>";
                        $error .= $errors['password'];
                        $error .= "</div>";
                        echo $error;
                    }
                    ?>
                </div>

            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-<?php echo THEME_COLOR; ?> btn-block"> Connexion</button>
            </div>
        </form>

        <?php
        if (isset($alert) && isset($type)) {
            $alertDisp = "<div class=\"alert alert-" . $type . "\" role=\"alert\">";
            $alertDisp .= $alert;
            $alertDisp .= "</div>";
            echo $alertDisp;
        }
        ?>
    </article>
</div>

<script>
    $('#formLogin').submit(
        function(){
            if($("[name='password']").val()!="")
            {
                let pass = $("[name='password']").val();
                $("[name='password']").val(sha256(pass));
            }
            if($("[name='pass_confirm']").val()!="")
            {
                let pass_conf = $("[name='pass_confirm']").val();
                $("[name='pass_confirm']").val(sha256(pass_conf));
            }
            return true;
        });
</script>

