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
            case 'csv':
                self::formatAsCsv($items);
                break;
            case 'html':
            default:
                echo self::formatAsHtml($items);
        }
    }

    private static function formatAsCsv($array, $filename = "export.csv", $delimiter=";"): void
    {
        $f = fopen('php://memory', 'w');
        foreach ($array as $line) {
            fputcsv($f, $line, $delimiter);
        }
        fseek($f, 0);
        header('Content-Type: application/csv');
        header('Content-Disposition: attachment; filename="'.$filename.'";');
        fpassthru($f);
    }

    private static function formatAsHtml(array $items): string
    {

        $html = '<table>
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