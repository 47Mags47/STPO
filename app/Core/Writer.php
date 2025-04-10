<?php

namespace App\Core;

class Writer
{
    public $fileName;
    public $filePath;

    public $rows;
    protected $writerRow;

    public function __construct()
    {
        $this->writerRow = 1;
    }

    public function setFileName(string $name){
        $this->fileName = $name;
        return $this;
    }

    public function setFilePath(string $path){
        $this->filePath = $path;
        return $this;
    }
}
