<?php
 class Contact {
    private $id;
    private $name;
    private $email;  
    private $fone;

    public function __construct($id, $name, $email, $fone) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->fone = $fone;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }
    public function setName( $name ) {
        $this->name = $name;
    }
    
    public function getEmail() {
        return $this->email;
    }
    public function setEmail( $email ) {
        $this->email = $email;
    }

    public function getFone() {
        return $this->fone;
    }
    public function setFone( $fone ) {
        $this->fone = $fone;
    }
}

class Agenda{
    private $contacts = [];

    public function addContact($contact) {
        $this->contacts[] = $contact;
    }

    public function getContacts() {
        return $this->contacts;
    }

    public function buscarPorId($id) {
    foreach ($this->contacts as $contact) {
        if ($contact->getId() === $id) {
            return $contact;
        }
    }
    return null;
}
 public function removerPorId($id) {
    foreach ($this->contacts as $index => $contact) {
        if ($contact->getId() === $id) {
            unset($this->contacts[$index]);
            $this->contacts = array_values($this->contacts);
            return true;
        }
    }
    return false;
}


    public function atualizarContato($id, $name, $email, $fone) {
        foreach ($this->contacts as $contact) {
            if ($contact->getId() === $id) {
                $contact->setName($name);
                $contact->setEmail($email);
                $contact->setFone($fone);
                return true;
            }
        }
        return false;
    }

}