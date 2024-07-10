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
                <td>
                    <a href='' class='btn btn-primary' id='modifyProduct{$line["idProduct"]}'>modify</a>
                    <a href='' class='btn btn-primary' id='deleteProduct{$line["idProduct"]}'>del</a>
                </td>
            </tr>";
        }
    }
    public function DisplayCategories(){
        $data = $this->GetCategories();
        foreach($data as $line){
            echo "
            <tr>
                <th scope='row'>{$line["idCategory"]}</th>
                <td>{$line["label"]}</td>
                <td>
                    <a href='' class='btn btn-primary' id='modifyCategory{$line["idCategory"]}'>modify</a>
                    <a href='' class='btn btn-primary' id='deleteCategory{$line["idCategory"]}'>del</a>
                </td>
            </tr>";
        }
    }
}
