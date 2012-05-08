<?php
class DatabaseHandler {
    /**
     * return PDO instance
     *
     * @param string $dsn
     * @param string $user
     * @param string $password
     * @throws PDOException
     * @return PDO
     */
    public static function &dbConnect($dsn = null, $user = null, $password = null) {
        if (is_null($dsn) || is_null($user) || is_null($password)) {
            throw new PDOException('Cannot find data connection');
        }

        try {
            $dbh = new PDO($dsn, $user, $password);
        } catch (PDOException $e) {
            throw $e;
        }

        return $dbh;
    }
}

/* end of file DatabaseHandler.php */