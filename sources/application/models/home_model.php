<?php

class home_model extends Model {
    
    public function get_url($alias) {
        $url = $this->getField("SELECT `url` FROM `links` WHERE `alias`='".$alias."'");
        
        if (!empty($url))
            $this->executeDML("UPDATE `links` SET `views` = `views` + 1
                WHERE `alias`='".$alias."'");

        return $url;
    }

    public function get_folder($alias) {
        $folder = $this->getRecord("SELECT * FROM `folders` WHERE `alias`='".$alias."'");

        if (!empty($folder))
            $this->executeDML("UPDATE `folders` SET `views` = `views` + 1
                WHERE `alias`='".$alias."'");

        return $folder;
    }

    public function save_link() {
        $alias = empty($_POST['alias']) ? $this->get_random_alias() : $_POST['alias'];
        
        $query = ('INSERT INTO `links` (`user_id`, `alias`, `url`, `created`, `expiration`)
            VALUES (:user_id, :alias, :url, :created, :expiration)');
        
        $params = [
            ':user_id'  => NULL,
            ':alias'    => $alias,
            ':url'      => $_POST['url'],
            ':created'  => date("Y-m-d H:i:s"),
            ':expiration'   => date("Y-m-d H:i:s", strtotime("+7 day"))
        ];
        
        $response = $this->executeDML($query, $params);
        $_SESSION['new_url'] = isset($response) ? $response : URL.'/'.$alias;
    }

    public function save_folder() {
        var_dump($_POST);
        $alias = empty($_POST['alias']) ? $this->get_random_alias() : $_POST['alias'];

        $query = ('INSERT INTO `folders` (`user_id`, `alias`, `name`, `folder`, `created`, `expiration`)
            VALUES (:user_id, :alias, :name, :folder, :created, :expiration)');
        
        $params = [
            ':user_id'  => NULL,
            ':alias'    => $alias,
            ':folder'	  => $_POST['folder'],
            ':created'  => date("Y-m-d H:i:s"),
            ':expiration'   => date("Y-m-d H:i:s", strtotime("+7 day")) //$_POST['expiration']
        ];
        
        $response = $this->executeDML($query, $params);
        $_SESSION['new_url'] = isset($response) ? $response : URL.'/'.$alias;
    }

    private function get_random_alias() {
        return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil(6/strlen($x)))),1,6);
    }
}