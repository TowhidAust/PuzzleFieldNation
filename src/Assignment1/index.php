<?php
class InheritArrayObject extends ArrayObject
{

    // inherits from arrayObject
    public function __set($name, $val)
    {
        $this[$name] = $val;
    }

    public function displayAsTable()
    {
        $table =  '<table>';
        $table .= '<tbody>';
        $all_data = (array) $this;
        foreach ($all_data as $key => $value) {
            $table .= '<tr>';
            $table .= '<td>' . $key . '</td>';
            $table .= '<th>' . $value . '</th>';
            $table .= '</tr>';
        }
        $table .= '</tbody>';
        $table .=  '</table>';
        return $table;
    }
}

$obj = new InheritArrayObject();
$obj->Name = 'John Doe';
$obj->Email = 'john@gmail.com';
$obj->Phone = '01737010194';
$obj->Address = 'Dhaka, Bangladesh';

echo $obj->displayAsTable();
