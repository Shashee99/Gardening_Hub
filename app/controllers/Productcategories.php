<?php
class Productcategories extends Controller {
    public function __construct(){
        $this->catModel = $this->model('Productcategory');
    }
    public function viewAll(){
        $tabledata = $this->catModel->getAllCategories();
        $tabledata =json_encode($tabledata);
        echo $tabledata;
        exit();
    }
    public function insert(){
        $cat = $_POST['category'];
        $subcat = $_POST['subcategory'];

        $result = $this->catModel->insertcat($cat,$subcat);
        if ($result){

        }else{
            die("something went wrong");
        }

    }
    public function update(){
        $id=$_POST['id'];
        $cat = $_POST['cat'];
        $subcat = $_POST['subcat'];

        $result = $this->catModel->updatecat($id,$cat,$subcat);
        if ($result){
            echo "Updated Succefully!";
        }else{
            die("something went wrong");
        }
    }

    public function delete(){
        $id = $_POST['id'];
        $result = $this->catModel->delete($id);
        if ($result){
            echo "Deleted Succefully";
        }else{
            die("something went wrong");
        }

    }

}