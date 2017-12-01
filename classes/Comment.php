<?php
class Comment{

   private $comment;
   private $news_id;
   private $user_id;
   private $dateComment;

   public function __construct($comment, $news_id, $user_id, $dateComment){
     $this->comment = $comment;
     $this->news_id = $news_id;
     $this->user_id = $user_id;
     $this->dateComment = $dateComment;
   }

   public function insert(){
     global $conn;
     $q = $conn->prepare('INSERT INTO comments VALUES (null, :user_id, :news_id, :comment, :dateComment)');
     $user_id = $q->bindParam('user_id', $this->user_id);
     $news_id = $q->bindParam('news_id', $this->news_id);
     $comment = $q->bindParam('comment', $this->comment);
     $dateTime = $q->bindParam('dateComment', $this->dateComment);
     $q->execute();
     return true;
   }

   public static function deleteComment($id){
     global $conn;
     $q = $conn->prepare('DELETE FROM comments WHERE comment_id = :idc');
     $comment_id = $q->bindParam('idc', $id);
     $q->execute();
     return true;
   }

   public static function checkUser($id){
    global $conn;
    $q = $conn->prepare('SELECT user_id FROM comments WHERE comment_id = :id');
    $commentId = $q->bindParam('id', $id);
    $q->execute();
    $res = $q->fetch(PDO::FETCH_ASSOC);
    return $res;
  }

   public static function getAllComments($id){
     global $conn;
     $q = $conn->prepare("SELECT users.user_id, users.name, users.lastName,comments.comment_id, comments.comment, comments.dateComment FROM comments JOIN users ON comments.user_id = users.user_id  JOIN news ON comments.news_id = news.news_id WHERE news.news_id = :news_id ORDER BY comments.comment_id DESC");
     $newsId = $q->bindParam(':news_id',$id);
     $q->execute();
     $res = $q->fetchAll(PDO::FETCH_ASSOC);
     return $res;
   }
}
?>
