<?php

require_once 'db.php';

class Posts
{
  private $db;

  public function __construct()
  {
    $this->db = (new Database())->getPdo();
    $this->createTable();
  }

  public function find($id)
  {
    $stmt = $this->db->prepare("SELECT * FROM posts WHERE id = :id");
    $stmt->execute(['id' => $id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function create($title, $content, $userId)
  {
    $stmt = $this->db->prepare("INSERT INTO posts (title, content, user_id) VALUES (:title, :content, :user_id)");
    $stmt->execute([
      'title' => $title,
      'content' => $content,
      'user_id' => $userId,
    ]);
    return $this->db->lastInsertId();
  }

  public function getLatestPosts()
  {
    $stmt = $this->db->prepare("SELECT * FROM posts ORDER BY id DESC LIMIT 5");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function createTable()
  {
    $sql = "
        CREATE TABLE IF NOT EXISTS posts (
            id INT AUTO_INCREMENT PRIMARY KEY,
            title VARCHAR(255) NOT NULL,
            content TEXT NOT NULL,
            user_id INT NOT NULL,
            FOREIGN KEY (user_id) REFERENCES users(id)
        )
    ";

    $this->db->exec($sql);
  }
}