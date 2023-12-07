<?php

namespace App\Models;

use App\Core\Model;

class Charity extends Model
{
     public function show()
     {
        $query = "SELECT p.*, c.* FROM tb_charities p
          INNER JOIN tb_users c
          ON p.users_id=c.user_id ORDER BY users_id";
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return $this->selects($stmt);
     }

     public function optUsers()
     {
          $query = "SELECT * FROM tb_users";
          $stmt = $this->db->prepare($query);
          $stmt->execute();

          return $this->selects($stmt);
     }
     public function save()
     {
          $charities_username = $_POST['users_id'];
          $charities_nominee = $_POST['charities_nominee'];

          $sql = "INSERT INTO tb_charities
            SET users_id = :users_id,
            charities_total = :charities_total";
          $stmt = $this->db->prepare($sql);

          $stmt->bindParam(":users_id", $charities_username);
          $stmt->bindParam(":charities_total", $charities_nominee);

          $stmt->execute();
     }
     public function edit($id)
     {
          $query = "SELECT * FROM tb_users WHERE user_id=:user_id"; 
          $stmt = $this->db->prepare($query);
          
          $stmt->bindParam(":user_id", $id);
          $stmt->execute();

          return $this->select($stmt);
     }
     public function update()
     {
          $id_username = $_POST["id"];
          $nominee = $_POST["nominee"];

          $query = "UPDATE tb_charities 
          SET charities_total = charities_total + :nominee 
          WHERE users_id = :user_id";
          $stmt = $this->db->prepare($query);

          $stmt->bindParam(":user_id", $id_username);
          $stmt->bindParam(":nominee", $nominee);
          $stmt->execute();
     }
     public function delete($id)
     {
          $query = "DELETE FROM tb_charities WHERE users_id = :charities_id";
          $stmt = $this->db->prepare($query);

          $stmt->bindParam(":charities_id", $id);
          $stmt->execute();
     }
}
?>