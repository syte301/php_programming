<?php

interface iPost {
  public function printTitle(): string;
  public function printText(): string;
}


class Post implements iPost{
    private $title;
    private $text;
    public function __construct(string $title, string $text) {
        $this->title = $title;
        $this->text = $text;
    }
    public function printTitle(): string {
        return $this->title;
    }
    public function printText(): string {
        return $this->text;
    }
}


class Lesson implements iPost {
    private $post;
    private $homework;
    public function __construct(Post $post, string $homework) {
        $this->post = $post;
        $this->homework = $homework;
    }
    public function printHomeWork(): string {
        return $this->homework;
    }
    public function printTitle(): string {
      return $this->post->printTitle();
    }
    public function printText(): string {
      return $this->post->printText();
    }
}


class PaidLesson implements iPost {
    private $lesson;
    private $price;
    public function __construct(Lesson $lesson, float $price) {
      $this->lesson = $lesson;
      $this->price = $price;
    }
    public function printPrice(): float {
       return $this->price;
    }
    public function printTitle(): string {
      return $this->lesson->printTitle();
    }
    public function printText(): string {
      return $this->lesson->printText();
    }
    public function printHomeWork(): string {
      return $this->lesson->printHomeWork();
    }
}


$paidlesson = new PaidLesson(
                new Lesson(
                  new Post ("Lesson about inheritance", "Composition is preferred over inheritance"),
                  "Try changing inheritance to Composition"
                ),
                99.90
              );

// var_dump($paidlesson);
var_dump($paidlesson->printTitle());
var_dump($paidlesson->printText());
var_dump($paidlesson->printHomeWork());
var_dump($paidlesson->printPrice());
