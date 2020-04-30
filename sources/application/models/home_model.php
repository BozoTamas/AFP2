<?php

class home_model extends Model {
    
    public function get_url($alias) {
        $url = $this->getRecord("SELECT `url` FROM `links` WHERE `alias`='".$alias."'");
        
        if (!empty($url))
            return $url['url'];
    }

    public function getDir($alias) {
        $file = $this->getRecord("SELECT * FROM `dir` WHERE `alias`='".$alias."'");

        if (!empty($file))
            $this->executeDML("UPDATE `dir` SET `views` = `views` + 1
                WHERE `alias`='".$alias."'");

        return $file;
    }

    public function getLastLinks() {
        return $this->getList("SELECT `alias`, `created` FROM `dir` ORDER BY `created` DESC LIMIT 8");
    }

    public function save_link() {
        $alias = empty($_POST['alias']) ? $this->get_random_alias() : $_POST['alias'];
        
        $query = ('INSERT INTO `links` (`userID`, `alias`, `url`, `created`)
            VALUES (:userID, :alias, :url, :created)');
        
        $params = [
            ':userID'   => NULL,
            ':alias'    => $alias,
            ':url'      => $_POST['url'],
            ':created'  => date("Y-m-d H:i:s")
        ];
        
        $response = $this->executeDML($query, $params);
        $_SESSION['linkMessage'] = isset($response) ? $response : URL.'/'.$alias;
    }

    public function createDir() {

        if (empty($_FILES['files']) || empty($_POST['text'])) {
            $_SESSION['dirMessage'] = 'Nem töltöttél fel semmit';
        
        } else {

            $alias = empty($_POST['alias']) ? $this->get_random_alias() : $_POST['alias'];
    
            if (!empty($this->getDir($alias))) {
                $_SESSION['dirMessage'] = 'Ez a link már létezik, válassz más rövidítést!';
    
            } else {
                $query = ('INSERT INTO `dir` (`alias`, `created`, `expiration`)
                    VALUES (:alias, :created, :expiration)');
                
                $params = [
                    ':alias'    => $alias,
                    ':created'  => date("Y-m-d H:i:s"),
                    ':expiration'   => date("Y-m-d H:i:s", strtotime("+".$_POST['expiration']." day"))
                ];
                
                $response = $this->executeDML($query, $params);
                $_SESSION['dirMessage'] = isset($response) ? $response : 'Successful uploading, your link: '.URL.'/'.$alias;
            
                mkdir('./assets/uploads/'.$alias);
                
                for ($i=0; $i < count($_FILES['files']['name']); $i++) {
                    $targetFile = 'assets/uploads/'.$alias.'/'.$_FILES['files']['name'][$i];
                    move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFile);
                }
    
                if (!empty($_POST['text'])) {
                    $textFile = fopen('assets/uploads/'.$alias.'/text.txt', "a");
                    fwrite($textFile, $_POST['text']);
                    fclose($textFile);
                }
            }
        }
    }

    private function get_random_alias() {
        return substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil(6/strlen($x)))),1,6);
    }
}
