<?php


class News
{
    /**
     * Return single news item with specified id
     * @param integer $id
     * @return array
     */
    public static function getNewsItemById($id)
    {
        $host = 'localhost';
        $dbname = 'mvc_site';
        $user = 'root';
        $pass = '';
        $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

        $newsList = array();

        $result = $db->query('SELECT id, title, date, short_content '
                            . 'FROM news '
                            . 'ORDER BY date DESC '
                            . 'LIMIT 10');

        $i =0;
        while ($row = $result->fetch()){
            $newsList[$i]['id'] = $row['id'];
            $newsList[$i]['title'] = $row['title'];
            $newsList[$i]['date'] = $row['date'];
            $newsList[$i]['short_content'] = $row['short_content'];
        }

        return $newsList;
    }

    /**
     * Returns an array of news item
     */
    public static function getNewsList()
    {

    }
}