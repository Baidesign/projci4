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
    // we use the code DESC and ACS
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
    function join(){
        //this joins the post from user and post table
        /**
         * left join return all rows from the right table even if there are no matches in the right table
         * right join will return all rows from the right table even if there are no matches in the left table
         * inner(default) will return rows when thre is a match in both tables
         */
        return $this->db->table('posts')
                        ->where('post_id >', 67)
                        ->where('post_id <', 77)
                        ->join('users','posts.post_author = users.user_id',/*'right' or 'left' or 'inner'*/)
                        ->get()
                        ->getResult();
    }

    function like()
    {
        //to return similar data we can use like
        //this will such any instant that the word new appears in the post_content column
        // we can use before, after and both
        return $this->db->table('posts')
                        ->like('post_content','new', 'both') 
                        ->join('users', 'posts.post_author = users.user_id')
                        ->get()
                        ->getResult();
    }

    function grouping()
    {
        //SELECT * FROM posts where (post_id = 25 AND post_created_at <  '1990-01-01 00:00:00') OR post_author = 10
        //groupStart is same as using paranthesis {}
        //orWhere instead of the default AND  brought about by (->) it put OR infront  
        //this is the will bring post that have a post_created_at value that are greater than 2020-01-01 00:00:00 or post that have a post_author = 25 as second parameter

        return $this->db->table('posts')
                        ->groupStart()
                            ->where(['post_id >' => '25', 'post_created_at >' => '2020-01-01 00:00:00'])
                        ->groupEnd()
                        ->orWhere('post_author', 25)
                        ->join('users', 'posts.post_author = users.user_id')
                        ->get()
                        ->getResult();
        
    }

    function wherein()
    {
        //whereIn is used to check specifics in one column of a table in our database
        //we create a variable emails that gives as list or value to search from
        $emails = ['ricardo54@example.org', 'vmarquardt@example.org', 'glang@example.com'];

        return $this->db->table('posts')
                        ->groupStart()
                            ->where(['post_id >' => '25', 'post_created_at >' => '2020-01-01 00:00:00'])
                        ->groupEnd()
                        //ths code will search through the list we have provided above
                        ->orWhereIn('email', $emails)
                        ->join('users', 'posts.post_author = users.user_id')
                        ->get()
                        ->getResult();
    }

    function continueWherein()
    {
        //try to sue wherein to allocate one two email
        $emails = ['cassie16@example.com', 'ferry.may@example.com'];
        return $this->db->table('posts')
                        ->where('post_id >', 25)
                        ->whereIn('email', $emails)
                        ->join('users', 'posts.post_author = users.user_id')
                        ->get()
                        ->getResult();
    }

    function limits()
    {
        //limit eg limit(10) gives as the first five value found from our search result
        /**
         * Undocumented function
         *limit offset eg limit(5, 3)gives the next five values
         *after the first three value of our result
         *1234567891234567 it will return 456789henceforth
         * @return void
         */
        $emails = ['cassie16@example.com', 'ystreich@example.net','ybrekke@example.com', 'ferry.may@example.com', 'jamal.eichmann@example.org', 'susana.wilkinson@example.com'];
        return $this->db->table('posts')
                        ->whereIn('email', $emails)
                        ->join('users', 'posts.post_author = users.user_id')
                        ->limit(7, 3)
                        ->get()
                        ->getResult();

    }


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