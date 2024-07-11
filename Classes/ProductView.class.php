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
                    <button class='btn btn-primary modifyProduct' id='modifyProduct{$line["idProduct"]}'>modify</button>
                    <button class='btn btn-primary deleteProduct' id='deleteProduct{$line["idProduct"]}'>del</button>
                </td>
            </tr>";
        }
        echo "<div class='display'></div>";
    }
    public function DisplayCategories(){
        $data = $this->GetCategories();
        foreach($data as $line){
            echo "
            <tr>
                <th scope='row'>{$line["idCategory"]}</th>
                <td>{$line["label"]}</td>
                <td>
                    <button class='btn btn-primary modifyCategory' id='modifyCategory{$line["idCategory"]}'>modify</button>
                    <button class='btn btn-primary deleteCategory' id='deleteCategory{$line["idCategory"]}'>del</button>
                </td>
            </tr>";
        }
        echo "<div class='display'></div>";
    }
}
