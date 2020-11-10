<?php

namespace KCS;


class Render
{

    public static function spausdinti(array $items, string $format = null): void
    {
        switch ($format) {
            case 'json':
                echo json_encode($items);
                break;
            case 'html':
            default:
                echo self::formatAsHtml($items);
        }
    }


    private static function formatAsHtml(array $items): string
    {

        $html = '<table class="diz">
                <th>
                    <td>Pavadinimas</td>
                    <td>Aprasymas</td>
                    <td>Kaina</td>
                    <td>Grozis</td>
                </th>
        ';
        foreach ($items as $item) {
            $title = $item['title'];
            $description = $item['description'];
            $price = $item['price'];
            $img = "<img src='{$item['img']}'>";
            $row = "<td>$title</td><td>$description</td><td>$price</td><td>$img</td>";
            $html .= '<tr>'.$row.'</tr>';
        }
        $html .= '</table>';

        return $html;
    }
}