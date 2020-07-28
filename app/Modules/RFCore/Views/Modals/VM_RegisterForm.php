<?php
/**
 * @var array $errors
 * @var array $roles_cb
 */
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/js-sha256/0.9.0/sha256.min.js" integrity="sha256-cVdRFpfbdE04SloqhkavI/PJBWCr+TuyQP3WkLKaiYo=" crossorigin="anonymous"></script>

<div class="row h-100 justify-content-center">
    <form id="formRegisterBOUser" accept-charset="utf-8">
    <div class="form-group">
        <label>Nom d'utilisateur</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text bg-<?php echo THEME_COLOR; ?>"> <i class="fa fa-user text-white"></i> </span>
            </div>
            <input name="username" class="form-control" placeholder="Nom d'utilisateur" type="text" value="<?php echo set_value('username'); ?>">
        </div>
        <?php if (isset($errors['username']))echo "<div class=\"alert alert-danger form-alert\" role=\"alert\">".$errors['username']."</div>"; ?>
    </div>
    <div class="form-group">
        <label>Mot de passe</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text bg-<?php echo THEME_COLOR; ?>"> <i class="fa fa-lock text-white"></i> </span>
            </div>
            <input name="password" class="form-control" placeholder="******" type="password">
        </div>
        <?php if (isset($errors['password'])) echo "<div class=\"alert alert-danger form-alert\" role=\"alert\">".$errors['password']."</div>"; ?>
    </div>
    <div class="form-group">
        <label>Confirmer le mot de passe</label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text bg-<?php echo THEME_COLOR; ?>"> <i class="fas fa-unlock text-white"></i> </span>
            </div>
            <input name="pass_confirm" class="form-control" placeholder="******" type="password">
        </div>
        <?php if (isset($errors['pass_confirm']))echo "<div class=\"alert alert-danger form-alert\" role=\"alert\">".$errors['pass_confirm']."</div>"; ?>
    </div>
    <?php if (isset($alert) && isset($type)) echo "<div class=\"alert alert-" . $type . "\" role=\"alert\">".$alert."</div>";?>
    <div class="form-group">
        <button type="submit" class="btn btn-<?php echo THEME_COLOR; ?> btn-block">Ajouter</button>
    </div>
</form>
</div>
<script>
    var passwordField = $("[name='password']");
    var pass_confField = $("[name='pass_confirm']");
    var form = $('#formRegisterBOUser');

    $(function () {
        form.on('submit',function (e) {
            if(passwordField.val()!=="")
            {
                let pass = passwordField.val();
                passwordField.val(sha256(pass));
            }
            if(pass_confField.val()!=="")
            {
                let pass_conf = pass_confField.val();
                pass_confField.val(sha256(pass_conf));
            }
            loadHTML('<?php echo base_url('RF-BackOffice/RegisterBO')?>', form.serialize(), form.parent());
            e.preventDefault();
        });
    });
</script>
