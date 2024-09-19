<?php
namespace Xnhd\Core\Image;

class ImageService {

    public function __construct($project) {
        $this->image = new ImageModel();
        $this->image->setConnection($project.'_gm');
    }

    public function getTotal() {
        return $this->image->get();
    }

    public function getById($id) {
        return $this->image->find($id);
    }

    public function updateOne($id, $params) {
        $image = $this->image->find($id);
        foreach($params as $key => $value) {
            $image->$key = $value;
        }
        return $image->save();
    }

    public function createOne($params) {
        foreach ($params as $key => $value) {
            $this->image->$key = $value;
        }
        return $this->image->save() ? $this->image->id : false;
    }

    public function delete($id){
        return $this->image->find($id)->delete();
    }

}