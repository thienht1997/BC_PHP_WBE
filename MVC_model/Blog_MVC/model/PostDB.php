<?php
namespace Model;

class PostDB
{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function create($post){
        $sql = "INSERT INTO `posts`(`title`, `teaser`, `content`, `created`) VALUES (?, ?, ?, ?)";
        $statement = $this->connection->prepare($sql);
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $post->title);
        $statement->bindParam(2, $post->teaser);
        $statement->bindParam(3, $post->content);
        $statement->bindParam(4, $post->created);
        return $statement->execute();
    }

    public function update($id, $post){
        $sql = "UPDATE `posts` SET `title` = ?, `teaser` = ?, `content` = ?, `created` = ? WHERE `id` = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $post->title);
        $statement->bindParam(2, $post->teaser);
        $statement->bindParam(3, $post->content);
        $statement->bindParam(4, $post->created);
        $statement->bindParam(5, $id);
        return $statement->execute();
    }

    public function delete($id){
        $sql = "DELETE FROM `posts` WHERE `id` = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        return $statement->execute();
    }

    public function get($id){
        $sql = "SELECT * FROM `posts` WHERE `id` = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        $statement->execute();
        $row = $statement->fetch();
        $post = new Post($row['title'], $row['teaser'], $row['content'], $row['created']);
        $post->id = $row['id'];
        return $post;
    }

    public function getAll()
    {
        $sql = "SELECT * FROM `posts`";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        $posts = [];
        foreach ($result as $row) {
            $post = new Post($row['title'], $row['teaser'], $row['content'], $row['created']);
            $post->id = $row['id'];
            $posts[] = $post;
        }
        return $posts;
    }
}