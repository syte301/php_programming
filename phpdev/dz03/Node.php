<?php
include './NodeInterface.php';

class Node implements NodeInterface
{
  private string name;

  public function __construct(string $name) {
    this->name = $name;
  }

  public function getName(): string {
    return $this->name;
  }


}
