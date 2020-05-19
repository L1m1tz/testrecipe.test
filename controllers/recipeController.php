<?php

class RecipeController
{

    public function show(){
        require_once('./views/recipeShowView.php');    
    }
    
    public function list(){
        require_once('./views/recipeListView.php');    
    }
}
