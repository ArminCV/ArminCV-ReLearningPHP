<?php
    interface IUsersRepository
    {
        public function add(User $user);
    }
/**Data storage and retrieval */
    class UserRepository implements IUsersRepository
    {
        private static $connection_string;
        private $connection;

        public function __construct()
        {
            $connection = new mysqli();
        }

        public static function set_connection_string($value)
        {
            UserRepository::$connection_string = $value;
        }

        public function add(User $user)
        {
            $statement = $this->connection->prepare('INSERT INTO "users" ("id", "username", "email", "password") VALUES (?, ?, ?, ?)');
            $statement->bind_param("id", NULL);
            $statement->bind_param("username", $user->get_username());
            $statement->bind_param("email", $user->get_email());
            $statement->bind_param("username", $user->get_password());

            if(!$statement->execute())
            {
                throw new Exception("Execute failed: ({$statement->errno}) {$statement->error}");
            }
        }
    }
?>