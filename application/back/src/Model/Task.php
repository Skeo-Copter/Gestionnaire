<?php
namespace Model;

class Task
{
    private $id;
    private $title;
    private $description;
    private $deadline;
    private $estimatedTime;
    private $statusId;
    
    
    function __construct($id, $title, $description, $deadLine, $estimatedTime, $statusId) {
        $this->setId($id);
        $this->setTitle($title);
        $this->setDescription($description);
        $this->setDeadline($deadline);
        $this->setEstimatedTime($estimatedTime);
        $this->setStatusId($statusId);
    }

    public function getId() {
        return $this->id;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getDeadline() {
        return $this->deadline;
    }

    public function getEstimatedTime() {
        return $this->estimatedTime;
    }

    public function getStatusId() {
        return $this->statusId;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }

    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    public function setDeadline($deadline) {
        $this->deadline = $deadline;
        return $this;
    }

    public function setEstimatedTime($estimatedTime) {
        $this->estimatedTime = $estimatedTime;
        return $this;
    }

    public function setStatusId($statusId) {
        $this->statusId = $statusId;
        return $this;
    }



    
}