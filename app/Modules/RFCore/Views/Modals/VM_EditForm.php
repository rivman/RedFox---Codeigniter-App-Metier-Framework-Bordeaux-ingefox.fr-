<?php
/**
 * @var array $errors
 * @var array $roles_cb
 */
?>

<form id="formEditBOUser" accept-charset="utf-8">
    <input name="id" type="hidden" value="<?php echo set_value('id'); ?>">
        <div class="form-group">
            <label>Nom d'utilisateur</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text bg-<?php echo THEME_COLOR; ?>"> <i class="fa fa-user text-white"></i> </div>
                </div>
                <input name="username" class="<?php if (isset($errors['username']))echo "is-invalid";?> form-control" placeholder="Nom d'utilisateur" type="text" value="<?php echo set_value('username'); ?>">
                <?php if (isset($errors['username']))echo "<div class=\"invalid-feedback\" role=\"alert\">".$errors['username']."</div>"; ?>
            </div>
        </div>
        <div class="form-group">
            <label>Mot de passe</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text bg-<?php echo THEME_COLOR; ?>"> <i class="fa fa-lock text-white"></i> </div>
                </div>
                <input name="password" class="<?php if (isset($errors['password']))echo "is-invalid";?> form-control" placeholder="******" type="password">
                <?php if (isset($errors['password'])) echo "<div class=\"invalid-feedback\" role=\"alert\">".$errors['password']."</div>"; ?>
            </div>

        </div>
        <div class="form-group">
            <label>Confirmer le mot de passe</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text bg-<?php echo THEME_COLOR; ?>"> <i class="fas fa-unlock text-white"></i> </div>
                </div>
                <input name="pass_confirm" class="<?php if (isset($errors['pass_confirm']))echo "is-invalid";?> form-control" placeholder="******" type="password">
                <?php if (isset($errors['pass_confirm']))echo "<div class=\"invalid-feedback\" role=\"alert\">".$errors['pass_confirm']."</div>"; ?>
            </div>

        </div>
        <input name="submitted" type="hidden" value="true">

    <?php if (isset($alert) && isset($type)) echo "<div class=\"alert alert-" . $type . "\" role=\"alert\">".$alert."</div>";?>

    <div class="form-group">
        <button type="submit" class="btn btn-<?php echo THEME_COLOR; ?> btn-block">Modifier</button>
    </div>
</form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/js-sha256/0.9.0/sha256.min.js" integrity="sha256-cVdRFpfbdE04SloqhkavI/PJBWCr+TuyQP3WkLKaiYo=" crossorigin="anonymous"></script>
<script>
    var passwordField = $("[name='password']");
    var pass_confField = $("[name='pass_confirm']");
    var form = $('#formEditBOUser');

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
            loadHTML('<?php echo base_url('RF-BackOffice/EditUserBO')?>', form.serialize(), form.parent());
            e.preventDefault();
        });
    });
</script>