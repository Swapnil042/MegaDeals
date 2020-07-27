<?php 
    define('server','localhost');
    define('user','root');
    define('pass','');
    define('db','megadeals');
    $this->con = mysqli_connect(server,user,pass,db);
            if($this->con==false)
            {
                die("connect failed ").mysqli_connect_error($con);
                
            }
            else
            {
                echo"connected";
            }

    

    class DB
    {
        public $con;
        public function __construct()
        {
            $this->con = mysqli_connect(server,user,pass,db);
            if($this->con===false)
            {
                die("connect failed ").mysqli_connect_error($con);
                
            }
            else
            {
                echo"connected";
            }
        }
        public function FetchUser($user_id)
        {
            $res = mysqli_query($this->con,"select * from user where name='$user_id'");
            return $res;
        }
        public function DeleteWish($table,$id)
        {
            $res = mysqli_query($this->con,"delete from $table where id=$id");
            return $res;
        }
        public function FetchCategoryBySearch($table,$key)
        {
            //echo $key;
            $res = mysqli_query($this->con,"select * from $table where p_name like '%$key%' ");
            return $res;
        }
        public function FetchWistList($user_id)
        {
            $res = mysqli_query($this->con,"select * from product,wishlist where product.p_id=wishlist.p_id and user_id='$user_id'");
            return $res;
        }
        
        public function DeleteUser($user_id)
        {
            $res = mysqli_query($this->con,"delete from user where name='$user_id'");
            return $res;
        }
        public function FetchUserBuys($user_id)
        {
            $res = mysqli_query($this->con,"select * from product,sale where product.product_id=sale.product_id and user_id='$user_id'");
            return $res;
        }
        
        public function InsertWistList($table,$product_id,$user_id)
        {
            $res = mysqli_query($this->con,"insert into $table (product_id,user_id) values ($product_id,'$user_id')");
            return $res;
        }
        public function UpdateSaleProduct($table,$product_id,$sale_qty)
        {
            $res = mysqli_query($this->con,"update $table set qty =(qty-$sale_qty),sales = (sales+1) where product_id=$product_id");
            return $res;
        }
        public function InsetSale($table,$product_id,$product_qty,$user_id)
        {
            $res = mysqli_query($this->con,"insert into $table (product_id,sale_qty,user_id) values ($product_id,$product_qty,'$user_id')");
            return $res;
        }
        
        public function UpdateRating($product_id,$rate)
        {
            $res = mysqli_query($this->con,"update product set rate = $rate where product_id=$product_id");
            return $res;
        }
        
        public function FetchImageAndPrice($table)
        {
            $res = mysqli_query($this->con,"select * from $table");
            return $res;
        }
        public function TopRated($table)
        {
            $res = mysqli_query($this->con,"select * from $table order by rate desc limit 10");
            return $res;
        }
        public function TopSale($table)
        {
            $res = mysqli_query($this->con,"select * from $table where sales>0 order by sales desc limit 10");
            return $res;
        }
        public function FetchCategory($table,$c_id)
        {
            $res = mysqli_query($this->con,"select * from $table where category_id = $c_id");
            return $res;
        }
        public function FetchProduct($table,$c_id)
        {
            $res = mysqli_query($this->con,"select * from $table where product_id = $c_id");
            return $res;
        }
        public function FetchImageAndPriceForNewProduct($table)
        {
            $res = mysqli_query($this->con,"select * from $table  order by arival_date desc limit 10");
            return $res;
        }
        public function InsertCustomer($table,$fn,$ln,$email)
        {
            $res = mysqli_query($this->con,"insert into $table (first_name,last_name,email) values ('$fn','$ln','$email')");
            return $res;
        }
        public function SelectCustomer($table)
        {
            $res = mysqli_query($this->con,"select * from $table");
            return $res;
        }
        public function DeleteCustomer($table,$id)
        {
            $res = mysqli_query($this->con,"delete from $table where id = $id");
            return $res;
        }
        public function FetchCloth($table)
        {
           
            $res = mysqli_query($this->con,"select * from $table where category_id = 1 or category_id = 2 or category_id = 3 or category_id = 4
            or category_id = 5 or category_id = 6 or category_id = 7 or category_id = 8 or category_id = 9");
            return $res;
        }
        public function FetchElectronics($table)
        {
           
            $res = mysqli_query($this->con,"select * from $table where category_id = 10 or category_id = 11 or category_id = 12 or category_id = 13
            or category_id = 14 or category_id = 15 or category_id = 16 or category_id = 17 or category_id = 18 or category_id = 19");
            return $res;
        }
        public function FetchFood($table)
        {
           
            $res = mysqli_query($this->con,"select * from $table where category_id = 20 or category_id = 21 or category_id = 22 or category_id = 23
            or category_id = 24 or category_id = 25 or category_id = 26");
            return $res;
        }
    }
?>