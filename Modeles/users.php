<?php


class Users
{
    public $_prenom;
    public $_nom;
    public $_email;
    public $_role;
    public $_mdp;
    public $_cmdp;
    public $_photo;

    public function __construct($prenom, $nom, $email, $role, $mdp, $cmdp, $photo)
    {
        $this->_prenom = $prenom;
        $this->_nom = $nom;
        $this->_email = $email;
        $this->_role = $role;
        $this->_mdp = $mdp;
        $this->_cmdp = $cmdp;
        $this->_photo = $photo;
    }

    public function ajouterUsers()
    {
        SetUsers($this->_prenom, $this->_nom, $this->_email, $this->_role, $this->_mdp, $this->_cmdp, $this->_photo);
    }

    public static function recup_id($id)
    {
        return getId($id);
    }

    public static function verifyMail($mail)
    {
        foreach(getMail() as $courrier)
        {
            if ($mail == $courrier['email'])
            {
                return true;
                break;
            }
        }
    }

}

