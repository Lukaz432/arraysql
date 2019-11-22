<?php
class Tables
{
    public function table($array)
    {
        print '<table>' . '<thead>';
            foreach ($array as $objectarray) {
                print '<tr>';
                    foreach ($objectarray as $key => $value) {
                        print '<td>' . $key . '</th>';
                    }
                    print '</tr>';
                break;
            }
            print '<thead>';
            foreach ($array as $objectarray) {
                print '<tr>';
                    foreach ($objectarray as $value) {
                        print '<td>' . $value . '</td>';
                    }
                    print '</tr>';
            }
            print '</table>';
    }
}
?>