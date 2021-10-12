<?php
namespace RFCore\Controllers;

use CodeIgniter\Controller;

class RF_Controller extends Controller
{
    public function __construct()
    {
        helper("security");
    }

    /**
     * Return all the defined roles in an array object
     * @return array Roles defined as constants
     */
    public function getRolesArray(){
        $array = get_defined_constants(true)['user'];
        $only_roles = array();
        foreach ($array as $key => $value) {
            if (strpos($key, 'ROLE_') === 0) {
                $only_roles[$key] = $value;
            }
        }
        return $only_roles;
    }

    /**
     * Return a list of checkboxes corresponding to the available roles
     * @param int $roles If passed, all checkboxes matching these roles will be checked
     * @return array
     */
    public function getRolesArrayCB($roles = 0){
        $rolesCB = [];
        foreach (ROLES_ARRAY_STR as $key=>$value){
            $role = array();
            $role['value'] = $key;
            $role['label'] = $value;
            $role['checked'] = ($roles & $key);
//            $role['disabled'] = !(session()->get('roles') & $key);
            $rolesCB[] = $role;
        }
        return $rolesCB;
    }


    /**
     * Convert the mimeType to a file extension 
     * @param string $mime
     * @return string the file extension associated to the mimeType 
     */
    public function mimeTypeToFileExtension($mime)
    {
        return isset(MIME_MAP[$mime]) ? MIME_MAP[$mime] : '';
    }
}
