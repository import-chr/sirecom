<?php

namespace Router;

class RouterHandler {

    protected $method;
    protected $data;

    public function set_method($method) {
        $this->method = $method;
    }

    public function set_data($data) {
        $this->data = $data;
    }

    public function route($controller, $id, $res) {
        $resource = new $controller();

        // echo "<pre>";
        // echo var_dump($this->method);
        // echo "</pre>";

        switch($this->method) {
            case "get":
                if($id && $id == 'create') {
                    $resource->create();
                }
                else if($id && $id == 'delete') {
                    $resource->destroy($res);
                }
                else if($id && $id == 'show') {
                    $resource->show($res);
                }
                else if($id && $id == 'edit') {
                    $resource->edit($res);
                }
                else {
                    $resource->index();
                }
                break;
            
            case "post":
                $resource->store($this->data);
                break;
        }
    }

}