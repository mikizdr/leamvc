<?php

    class Pages
    {
    
        public function __construct()
        {
            // echo 'Pages loaded';
        }

        public function index()
        {
            echo 'This is index method';
        }
        
        public function create($id)
        {
            echo 'This is create method with parameter ' . $id;        
        }

        public function edit()
        {

        }

        public function update()
        {
        
        }

        public function show()
        {
        
        }

        public function store()
        {
        
        }

        public function delete()
        {
        
        }
    }