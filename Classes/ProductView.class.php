<?php

class ProductView extends ProductCntr{
    public function DisplayProducts(){
        $data = $this->GetProducts();
        foreach($data as $line){
            echo "
            <tr>
                <th scope='row'>{$line["idProduct"]}</th>
                <td>{$line["label"]}</td>
                <td>{$line["prix"]}</td>
                <td>{$line["qte"]}</td>
                <td>{$line["Category"]}</td>
                <td>{$line["Stock"]}</td>
            </tr>";
        }
    }
}
?>

    