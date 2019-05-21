<?php

class MyFile
{
    const MIMETYPEALLOWED= [
        'text/csv',
        'text/html',
        'text/css',
        'text/plain'
        ];

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

    /**
     * @return mixed
     */
    public function getContent()
    {
        return file_get_contents($this->path);
    }

    public function setContent( $text)
    {
        $file= fopen($this->path,"w");
        fwrite($file,$text);
        fclose($file);
        return file_get_contents($this->path);
    }

    public function  isEditable() : bool
    {
      return in_array(mime_content_type($this->path), self::MIMETYPEALLOWED);
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
