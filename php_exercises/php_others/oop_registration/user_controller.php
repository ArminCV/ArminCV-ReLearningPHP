<?php
/**Handles Application flow */
    class UsersController
    {
        private $repository;

        public function __construct(IUsersRepository $repository)
        {
            $this->repository = $repository;
        }
        
        public function register($params)
        {
            if(isset($params['username'])) 
            {
                $user = new User($params['username'], $params['email'], $params['password']);
                $this->repository->add($user);

                return '/';
            }
        }
        
    }
?>