<?php

class memberModel extends Model
{
    public function create($post)
    {
        if (!in_array(false, $post)) {

            $create = $this->db->prepare("INSERT INTO `member` (`first_name`, `last_name`) VALUES(:first_name, :last_name)");

            $create->execute(array(
                ':first_name' => $post['first_name'],
                ':last_name' => $post['last_name']
            ));
        }

    }

    public function update($post)
    {
        if (!in_array(false, $post)) {

            $update = $this->db->prepare("UPDATE `member` SET first_name = :first_name, last_name = :last_name WHERE id = :id");

            $update->execute(
                array(
                    ':id' => $post['update_id'],
                    ':first_name' => $post['first_name'],
                    ':last_name' => $post['last_name'],
                )
            );
        }
    }

    public function read()
    {
        $read = $this->db->prepare('SELECT * FROM `member`');

        $read->execute();

        return $read->fetchAll();

    }

    public function delete($id)
    {
        $delete = $this->db->prepare("DELETE FROM `member` WHERE `id` = :id");

        $delete->bindParam(':id', $id, PDO::PARAM_INT);

        $delete->execute();

    }

    public function edit($id)
    {
        $edit = $this->db->prepare('SELECT * FROM `member` WHERE id = :id');

        $edit->execute(array(
            ':id' => $id
        ));

        return $edit->fetchAll();

    }

}