<?php

class MyDirectory
{
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

    public function getFiles() : array
    {
        $rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($this->path));
        $files = array();
        foreach ($rii as $file) {
            if ($file->isDir()){
                continue;
            }
            $files[] = $file->getPathname();
        }

        return $files;
    }

}
