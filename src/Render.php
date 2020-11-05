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
        $html = '<hr>[ <a href="./?action=Create">+ ADD new person</a> ]<hr>';
        $html .= '<table>
                <th>
                    <td>ID</td>
                    <td>Vardas</td>
                    <td>Pavarde</td>
                    <td>El-pastas</td>
                    <td>Veiksmai</td>
                </th>
        ';
        foreach ($items as $item) {
            $img = "<img src='{$item['img']}'>";
            $title = $item['title'];
            $description = $item['descrition'];;
            $price = $item['price'];;
            $row = "<td>{$item['id']}</td><td>$vardas</td><td>$pavarde</td><td>$elpastas</td><td>$veiskmai</td>";
            $html .= '<tr>'.$row.'</tr>';
        }
        $html .= '</table>';

        return $html;
    }
}