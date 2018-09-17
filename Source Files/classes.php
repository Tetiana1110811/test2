<?php
/**
 * Created by PhpStorm.
 * User: Nfyz
 * Date: 27.03.2018
 * Time: 16:53
 */
abstract class Publication
{
    public $id;
    public $title;
    public $date;
    public $short_content;
    public $content;
    public $preview;
    public $author_name;
    public $type;

    abstract public function printItem();


    function __construct($row)
    {
        $this->id = $row['id'];
        $this ->title = $row['title'];
        $this ->date = $row['date'];
        $this->short_content = $row['short_content'];
        $this -> content = $row['content'];
        $this->preview = $row ['preview'];
        $this->author_name = $row['author_name'];
        $this->type = $row['type'];

    }

}


class NewsPublication extends Publication
{

    public function printItem()
    {
       echo '<br> Новость:' .$this->title;
       echo '<br> Дата:' .$this->date;
       echo '<br>';

    }
}

class ArticlePublication extends Publication
{
    public function printItem()
    {
        echo '<br> Статья: ' . $this->title;
        echo '<br> Автор' . $this->author_name;
        echo '<br>'; 

    }
}

class PhotoReportPublication extends Publication
{
    public function printItem()
    {

        echo '<br> Фотоотчет: ' . $this->title;

        //echo '<br> <img src="http://localhost/test2/' .$this->preview. '">;



    
    }
    
}   
