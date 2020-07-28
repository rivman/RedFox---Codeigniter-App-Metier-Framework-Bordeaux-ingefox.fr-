<?php
/**
 * @var array $errors
 * @var array $roles_cb
 * @var string $action
 * @var string $actionButton
 */
?>

<form id="formUser" accept-charset="utf-8" method="POST" >
    <input name="userId" type="hidden" value="<?php echo set_value('userId'); ?>">

        <div class="form-group">
            <label>Adresse Email</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text bg-<?php echo THEME_COLOR; ?>"> <i class="fa fa-user text-white"></i> </div>
                </div>
                <input id='userEmail' name="user[email]" class="<?php if (isset($errors['user.email'])) echo "is-invalid";?> form-control" placeholder="email" type="text" value="<?php echo $userEmail ?? set_value('user[email]'); ?>">
                <?php if (isset($errors['user.email']))echo "<div class=\"text-danger\" role=\"alert\">".$errors['user.email']."</div>"; ?>
            </div>
        </div>


        <div class="form-group">
            <label>Mot de passe</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text bg-<?php echo THEME_COLOR; ?>"> <i class="fa fa-lock text-white"></i> </div>
                </div>
                <input name="user[password]" class="<?php if (isset($errors['user.password']))echo "is-invalid";?> form-control" placeholder="******" type="password">
                <?php if (isset($errors['user.password'])) echo "<div class=\"text-danger\" role=\"alert\">".$errors['user.password']."</div>"; ?>
            </div>
        </div>

        <div class="form-group">
            <label>Confirmer le mot de passe</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text bg-<?php echo THEME_COLOR; ?>"> <i class="fas fa-unlock text-white"></i> </div>
                </div>
                <input name="user[passConfirm]" class="<?php if (isset($errors['user.passConfirm']))echo "is-invalid";?> form-control" placeholder="******" type="password">
                <?php if (isset($errors['user.passConfirm'])) echo "<div class=\"text-danger\" role=\"alert\">".$errors['user.passConfirm']."</div>"; ?>
            </div>
        </div>

        <div class="form-group">
            <label>Rôles</label>
            <?php
                 $selTypeUser = $typeUser ?? 0;

                 $disp='';
                 $disp.='<select id=\'typeUser\' name=\'user[type]\' class=\'form-control form-control-sm\'  >'.PHP_EOL;

                 $selected=($selTypeUser==0)?'selected':'';
                 $disp.="\t".'<option value=\'0\' '.$selected.'></option> '.PHP_EOL;
                 $selected=($selTypeUser==ROLE_USER)?'selected':'';
                 $disp.="\t".'<option value=\''.ROLE_USER.'\' '.$selected.'>Utilisateur</option> '.PHP_EOL;
                 $disp.='</select>'.PHP_EOL;

                 if (isset($errors['user.type']))
                     $disp.='<div class=\'text-danger d-block\' role=\'alert\'>'.$errors['user.type'].'</div>';
                 echo $disp;
                ?>
        </div>

        <input name="submitted" type="hidden" value="true">

    <?php if (isset($alert) && isset($type)) echo "<div class=\"alert alert-" . $type . "\" role=\"alert\">".$alert."</div>";?>

    <div class="form-group">
        <button type="submit" class="btn btn-<?php echo THEME_COLOR; ?> btn-block"><?php echo $actionButton;?></button>
    </div>
</form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/js-sha256/0.9.0/sha256.min.js" integrity="sha256-cVdRFpfbdE04SloqhkavI/PJBWCr+TuyQP3WkLKaiYo=" crossorigin="anonymous"></script>
<script>
    var passwordField = $("[name='user[password]']");
    var passConfField = $("[name='user[passConfirm]']");
    var form = $('#formUser');

    $(function () {
        form.on('submit',function (e) {
            if(passwordField.val()!=="")
            {
                let pass = passwordField.val();
                passwordField.val(sha256(pass));
            }
            if(passConfField.val()!=="")
            {
                let passConf = passConfField.val();
                passConfField.val(sha256(passConf));
            }
            return true;
            //loadHTML('<?php echo base_url($action)?>', form.serialize(), form.parent());
            //e.preventDefault();
        });
    });
</script>
