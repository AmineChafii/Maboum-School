<?php

  require_once 'config.php';

  class Database extends Config {
    // Insert User Into Database
    public function insert($nom, $prenom, $etablissement, $classe, $representant, $telephone, $adresse, $complement, $codepostal, $ville, $email, $typesoutien, $matiere, $campus, $heure_payee, $heure) {
      $sql = 'INSERT INTO client (nom, prenom, etablissement, classe, representant, telephone, adresse, complement, codepostal, ville, email, type_soutien, matiere, campus, heure_payee, heure) VALUES (:nom, :prenom, :etablissement, :classe, :representant, :telephone, :adresse, :complement, :codepostal, :ville, :email, :typesoutien, :matiere, :campus, :heurep, :heure)';
      $stmt = $this->conn->prepare($sql);
      $stmt->execute([
          'nom' => $nom,
          'prenom' => $prenom,
          'etablissement' => $etablissement,
          'classe' => $classe,
          'representant' => $representant,
          'telephone' => $telephone,
          'adresse' => $adresse,
          'complement' => $complement,
          'codepostal' => $codepostal,
          'ville' => $ville,
          'email' => $email,
          'typesoutien' => $typesoutien,
          'matiere' => $matiere,
          'campus' => $campus,
          'heurep' => $heure_payee,
          'heure' => $heure
      ]);
      return true;
  }
  

    // Fetch All client From Database
    public function read() {
      $sql = 'SELECT * FROM client WHERE admin != 1 ORDER BY id DESC';
      $stmt = $this->conn->prepare($sql);
      $stmt->execute();
      $result = $stmt->fetchAll();
      return $result;
    }

    // Fetch Single User From Database
    public function readOne($id) {
      $sql = 'SELECT * FROM client WHERE id = :id';
      $stmt = $this->conn->prepare($sql);
      $stmt->execute(['id' => $id]);
      $result = $stmt->fetch();
      return $result;
    }

    // Update Single User
    public function update($id, $nom, $prenom, $etablissement, $classe, $representant, $telephone, $adresse, $complement, $codepostal, $ville, $email, $typesoutien, $matiere, $campus, $heure_payee, $heure) {
      $sql = 'UPDATE client SET nom = :nom, prenom = :prenom, etablissement = :etablissement, classe = :classe, representant = :representant, telephone = :telephone, adresse = :adresse, complement = :complement, codepostal = :codepostal, ville = :ville, email = :email, type_soutien = :typesoutien, matiere = :matiere, campus = :campus, heure_payee = :heurep, heure = :heure WHERE id = :id';
      $stmt = $this->conn->prepare($sql);
      $stmt->execute([
          'nom' => $nom,
          'prenom' => $prenom,
          'etablissement' => $etablissement,
          'classe' => $classe,
          'representant' => $representant,
          'telephone' => $telephone,
          'adresse' => $adresse,
          'complement' => $complement,
          'codepostal' => $codepostal,
          'ville' => $ville,
          'email' => $email,
          'typesoutien' => $typesoutien,
          'matiere' => $matiere,
          'campus' => $campus,
          'heurep' => $heure_payee,
          'heure' => $heure,
          'id' => $id
      ]);
  
      return true;
  }
  

    // Delete User From Database
    public function delete($id) {
      $sql = 'DELETE FROM client WHERE id = :id';
      $stmt = $this->conn->prepare($sql);
      $stmt->execute(['id' => $id]);
      return true;
    }
  }

?>