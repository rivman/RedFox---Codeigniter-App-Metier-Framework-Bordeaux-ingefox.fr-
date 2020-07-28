<div class="row tableTitle">
	<h3>Gestion des utilisateurs BackOffice </h3>&nbsp;
            <br>
	<button class="btn btn-success" style="margin-bottom: 10px;margin-left: 20px;"
			onclick="openModal('<?php echo base_url("RF-BackOffice/RegisterBO") ?>', 'Ajouter un utilisateur')"><i
			class="fas fa-user-plus text-white"></i> Ajouter
	</button>
	<button class="btn btn-success" style="margin-bottom: 10px;margin-left: 10px;" onclick="reloadUsersTable()"><i
			class="fas fa-sync-alt text-white"></i> Actualiser
	</button>
</div>

<table id="users-table" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom d'utilisateur</th>
                    <th>Actions</th>
                </tr>
                </thead>
</table>
<script>
    let userTable;

    $(document).ready(function() {
        userTable = $('#users-table').DataTable({
            "ajax": {
                "url": "<?php echo base_url("RF-BackOffice/getUserList")?>",
                "type": "POST",
                "dataType": "json"
            },
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.20/i18n/French.json"
            },
            "columns": [
                {"data": "id"},
                {"data": "username"}
            ],
            "columnDefs": [
                {
                    'targets': 2,
                    'searchable': false,
                    'className': 'dt-center',
                    'render': function (data, type, full, meta) {
                        if (<?php echo session()->get('id'); ?> !== full['id']) {
                            return '<button class="btn btn-danger" type="button" onclick="deleteUser(\'' + full['username'] + '\')"><i class="fas fa-trash-alt text-white"></i></button> <button class="btn btn-warning" type="button" onclick="openModal(\'<?php echo base_url("RF-BackOffice/EditUserBO")?>\', \'Modifier un utilisateur\',{\'id\':\'' + full['id'] + '\'})"><i class="fas fa-user-edit text-white"></i></button>';
                        }
                    else {
                            return '<button class="btn btn-secondary" type="button" onclick="alert(\'Vous ne pouvez pas supprimer votre compte.\')"><i class="fas fa-trash-alt text-white"></i></button> <button class="btn btn-warning" type="button" onclick="openModal(\'<?php echo base_url("RF-BackOffice/EditUserBO")?>\', \'Modifier un utilisateur\',{\'id\':\'' + full['id'] + '\'})"><i class="fas fa-user-edit text-white"></i></button>';
                        }
                    }
                }
            ]
        });
    } );

    function deleteUser(username) {
        let answer = window.confirm("Êtes-vous sûr de vouloir supprimer l'utilisateur '" + username + "' ?");
        if (answer) {
            let data = {
                'url' : '<?php echo base_url("RF-BackOffice/deleteUser")?>',
                'type' : 'post',
                "dataType": "json",
                'data': {'username' : username},
                'callBack' : function (ret) {
                    if (ret['status'] === 'ok') {
                        userTable.ajax.reload();
                    }
                    else alert("Une erreur s'est produite : " + ret['errorThrown'] + " \n" + ret['textStatus'])
                }
            };
            sendAjax(data)
        }
    }

    function reloadUsersTable(){
        userTable.ajax.reload();
    }

    $(document).on('hide.bs.modal','#RF_MODAL', function () {
        reloadUsersTable();
    })

</script>
