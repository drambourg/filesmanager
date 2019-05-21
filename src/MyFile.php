<?php

class MyFile
{
    private $size;
    private $path;

    public function __construct(string $path)
    {
        $this->setPath($path);
    }


    /**
     * @return mixed
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param mixed $path
     */
    public function setPath($path): void
    {
        $this->path = $path;
    }


    /**
     * @return mixed
     */
    public function getSize()
    {
        return filesize($this->path);
    }


    public function delete()
    {
        unlink($this->getPath());
    }

    function getHumanReadableSize($decimals = 2)
    {
        $sz = 'BKMGTP';
        $factor = floor((strlen($this->getSize()) - 1) / 3);

        return sprintf("%.{$decimals}f",  $this->getSize()/ pow(1024, $factor)) . @$sz[$factor];
    }


}
