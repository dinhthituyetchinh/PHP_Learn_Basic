<?php

class Article
{
    public $id, $title, $content, $date, $image;

    // public function __construct($id, $title, $content, $date, $image)
    // {
    //    $this->id = $id;
    //    $this->title = $title;
    //    $this->content = $content;
    //    $this->date = $date;
    //    $this->image = $image; 
    // }

        public function getAll(string $fileName)
        {

            $lines = explode("\n", file_get_contents($fileName));
            $headers = str_getcsv(array_shift($lines));
            $data = array();
            foreach ($lines as $line) {
            $article = new Article();
            foreach (str_getcsv($line) as $key => $field) {
                $article->{$headers[$key]} = $field;
            }
            $data[] = $article;
        }

        return $data;

    }      
}
