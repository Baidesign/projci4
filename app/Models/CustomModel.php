<?php
namespace App\Models;



//we have to specify which database connection that we are using
use CodeIgniter\Database\ConnectionInterface;


/**
 * Summary of CustomModel
 */
class CustomModel{
    //this a model to create query
    //we co
    /**
     * Summary of db
     * @var 
     */
    protected $db;
    //we use the $db to get the reference of the db instant

    /**
     * Summary of __construct
     * @param \CodeIgniter\Database\ConnectionInterface $db
     */
    public function __construct( ConnectionInterface &$db){
        $this->db =& $db;
    }
    /**
     * Undocumented function
     * 
     *
     * @return void
     */
 

     function kuja() {
       // return $this->db->table('posts')->get()->getResult()
       return $this->db->table('posts')
                       ->select('*')
                       ->get()
                       ->getResult();
    }
    
    /**
     * Summary of where
     * @return \stdClass|array|object|null
     */
    function where()
    {
        // to remove the array from our page we will
        //change the getResult to getRow
        
        return $this->db->table('posts')
                        ->where(['post_id' =>  67])
                        ->get()
                        ->getRow();
    }
    /**
     * Summary of range
     * @return \stdClass|array|object|null
     */
    function range()
    {
        //if we want a certain  range of object we can specify like this
        return $this->db->table('posts')
                        ->where(['post_id >' => 79])
                        ->get()
                        ->getRow();
    }

    /**
     * Summary of rnagebtwn
     * @return array
     */
    function rnagebtwn()
    //here we can use either the > and < or the >= and <=
    //to give values from 11-24 or 10-25 respectively
    {
        return $this->db->table('users')
                        ->where(['user_id >=' => 10])
                        ->where(['user_id <=' => 25])
                        ->get()
                        ->getResult();
    }

    /**
     * Summary of asordis
     * @return array
     */
    function asordis()
    //this is to give as an ascending or descending order
    // we use the code DESC and ASC
    //we also use the orderBy method
    {
        return $this->db->table('posts')
                        ->where(['post_id <' => 45])
                        ->orderBy('post_id', 'ASC')
                        ->get()
                        ->getResult();
    }
    /**
     * Summary of getPosts
     * @return array
     */
    function getPosts(){
        //
        $builder = $this->db->table('posts');

        //to join to table we can use the join command
        /**
         * this line of codejoin the users table from our database to
         * our posts by join and showing the relationship btwn them
         */
        $builder->join('users', 'posts.post_author = users.user_id');

        //to return everthing from our post join from the users and posts table in our database
        $posts =$builder->get()->getResult();
        return $posts;

    }
}