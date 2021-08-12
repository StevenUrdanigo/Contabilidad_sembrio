<?php
    class Home extends Controllers{
        public function __construct()
        {
            parent::__construct();
        }

        public function home()
        {
            $data['page_id'] = 1;
            $data['tag_tag'] = "Home";
            $data['page_title'] = "Pagina principal";
            $data['page_name'] = "home";
            $data['page_content'] = "hola mi nombre es Steevennn";
            $this->views->getView($this,"home",$data);
        }
        public function insertar()
        {
            $data = $this->model->setUser("Mario",20);
            $data = $this->model->setUser("Andres",18);
            print_r($data);
        }
        public function verusuario($id)
        {
            $data = $this->model->getUser($id);
            print_r($data);
        }
        public function actualizar()
        {
            $data = $this->model->updateUser(1,"Yarrel",10);
            print_r($data);
        }
        public function verusuarios()
        {
            $data = $this->model->getUsers();
            print_r($data);
        }
        public function eliminar($id)
        {
            $data = $this->model->delUser($id);
            print_r($data);
        }
    }
?>