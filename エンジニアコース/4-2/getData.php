<?php
require_once("pdo.php");

class getData{

    public $pdo;
    public $data;

    //コンストラクタ
    function __construct()  {
        $this->pdo = connect();
    }

    /**
     * ユーザ情報の取得
     *
     * @param 
     * @return array $users_data ユーザ情報
     */
    public function getUserData(){
        $getusers_sql = "SELECT * FROM users limit 1";
        $users_data = $this->pdo->query($getusers_sql)->fetch(PDO::FETCH_ASSOC);
        //FETCH_ASSOCは、配列のキーは「カラム名」のみが準備されます。
        //queryメソッドは指定したSQL文をデータベースに対して発行してくれる役割を持っている。
        return $users_data;
    }
    
    /**
     * 記事情報の取得
     *
     * @param 
     * @return array $post_data 記事情報
     */
    public function getPostData(){
        $getposts_sql = "SELECT * FROM posts ORDER BY id desc";
        $post_data = $this->pdo->query($getposts_sql);
        //queryメソッドは指定したSQL文をデータベースに対して発行してくれる役割を持っている。
        return $post_data;
        //$post_dataはPDOStatementオブジェクトとして返される。
    }
}