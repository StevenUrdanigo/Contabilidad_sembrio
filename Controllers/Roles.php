<?php
    class Roles extends Controllers{
        public function __construct()
        {
            parent::__construct();
        }

        public function Roles()
        {
            $data['page_id'] = 3;
            $data['tag_tag'] = "Roles Usuario";
            $data['page_name'] = "rol usuario";
            $data['page_title'] = "Roles Usuario <Small> Contabilidad</small>";
            
            $this->views->getView($this,"roles",$data);
        }

    }
?>