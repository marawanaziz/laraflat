<?php

namespace App\Application\Controllers\Website;

use App\Application\Controllers\AbstractController;
use Alert;
use App\Application\Model\Categorie;
use App\Application\Requests\Website\Categorie\AddRequestCategorie;
use App\Application\Requests\Website\Categorie\UpdateRequestCategorie;

class CategorieController extends AbstractController
{

     public function __construct(Categorie $model)
        {
            parent::__construct($model);
        }

        public function index(){
            $items = $this->model->paginate(env('PAGINATE'));
            return view('website.categorie.index' , compact('items'));
        }

        public function show($id = null){
            return $this->createOrEdit('website.categorie.edit' , $id);
        }


     public function store(AddRequestCategorie $request){
          $item =  $this->storeOrUpdate($request , null , true);
          return redirect('categorie');
     }

     public function update($id , UpdateRequestCategorie $request){
          $item =  $this->storeOrUpdate($request , $id , true);
          return redirect()->back();
     }


        public function getById($id){
            $fields = $this->model->getConnection()->getSchemaBuilder()->getColumnListing($this->model->getTable());
            return $this->createOrEdit('website.categorie.show' , $id , ['fields' =>  $fields]);
        }

        public function destroy($id){
            return $this->deleteItem($id , 'categorie')->with('sucess' , 'Done Delete Categorie From system');
        }


}
