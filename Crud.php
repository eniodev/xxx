<?php

class Crud {

    private $db;

    function __construct($DB_con) {
        $this->db = $DB_con;
    }

    public function create($fname, $lname, $email, $contact) {
        
        try {
            $stmt = $this->db->prepare("INSERT INTO users(first_name,last_name,email_id,contact_no) VALUES(:fname, :lname, :email, :contact)");
            $stmt->bindparam(":fname", $fname);
            $stmt->bindparam(":lname", $lname);
            $stmt->bindparam(":email", $email);
            $stmt->bindparam(":contact", $contact);
            $stmt->execute();
            
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function getUserByID($id) {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE id=:id");
        $stmt->execute(array(":id" => $id));
        $editRow = $stmt->fetch(PDO::FETCH_ASSOC);
        return $editRow;
    }

    public function update($id, $fname, $lname, $email, $contact) {
        try {
            $stmt = $this->db->prepare("UPDATE users SET first_name=:fname, 
		                                         last_name=:lname, 
							 email_id=:email, 
							 contact_no=:contact
							 WHERE id=:id ");
            $stmt->bindparam(":fname", $fname);
            $stmt->bindparam(":lname", $lname);
            $stmt->bindparam(":email", $email);
            $stmt->bindparam(":contact", $contact);
            $stmt->bindparam(":id", $id);
            $stmt->execute();

            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function dataview($query) {
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                ?>
                <tr>
                    <td><?php echo($row['id']); ?></td>
                    <td><?php echo($row['first_name']); ?></td>
                    <td><?php echo($row['last_name']); ?></td>
                    <td><?php echo($row['email_id']); ?></td>
                    <td><?php echo($row['contact_no']); ?></td>
                    <td align="center">
                        <a href="edit-data.php?edit_id=<?php echo($row['id']); ?>"><i class="glyphicon glyphicon-pencil"></i></a>
                    </td>
                    <td align="center">
                        <a href="delete.php?delete_id=<?php echo($row['id']); ?>"><i class="glyphicon glyphicon-remove-circle"></i></a>
                    </td>
                </tr>
                <?php
            }
        } else {
            ?>
            <tr>
                <td>bla</td>
            </tr>
            <?php
        }
    }

    public function delete($id) {

        try {

            $stmt = $this->db->prepare("DELETE FROM users WHERE id=:id");
            $stmt->bindparam(":id", $id);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
}
