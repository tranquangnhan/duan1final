<?php 
    session_start();
    function getallBlog($page_num, $page_size) { 
        $start_row = ($page_num - 1) * $page_size;
        $sql="SELECT * FROM baiviet ORDER BY date DESC LIMIT $start_row, $page_size";
        return result1(0,$sql); 
    }
    function countBlog() {
        $sql = "SELECT COUNT(*) AS numberRow FROM baiviet";
        $kq = query($sql);
        $row= $kq -> fetch();
        $rowcount = $row['numberRow'];
        return $rowcount;
    }
    function taolinks($baseurl, $page_num, $page_size, $total_rows) {
        if ($total_rows<=0) return "";
        $total_pages = ceil($total_rows/$page_size);
        // 5/6 = 0.83 => ceil làm tròn dương => = 1
        if ($total_pages<=1) return "";
        $links='';
        //Trang đầu Trang trước
        // if ($page_num>=2) {            
        //     $links.="<li class='page-item'><a href='{$baseurl}' class='page-link'><<</a></li>"; 
        //     $pr = $page_num-1;
        //     $links.="<li class='page-item'><a href='{$baseurl}&page_num={$pr}' class='page-link'>Previous</a></li>";
        // }
        // $links.="<li class='link-page active'>{$page_num}</li>";
        // //Trang kế , Trang cuối
        // if ($page_num<$total_pages) {
        //     $pn = $page_num + 1;
        //     $links.="<li class='page-item'><a href='{$baseurl}&page_num={$pn}' class='page-link'>Next</a></li>";
        //     $links.="<li class='page-item'><a class='page-link' href='{$baseurl}&page_num={$pn}'>Next</a></li>";        
        //     $links.="<li class='page-item'><a href='{$baseurl}&page_num={$total_pages}' class= 'page-link'>>></a></li>";
        // }  
        if ($page_num>=2) {            
            $pr = $page_num-1;            
            $links.="<li class='page-item'><a class='page-link' href='{$baseurl}&page_num={$pr}'>Previous</a></li>";
            $links.="<li class='page-item'><a class='page-link' href='{$baseurl}&page_num={$pr}'>$pr</a></li>";
        } if ($page_num<=1) {
            $links.="<li class='page-item disabled'><a class='page-link' href=''>Previous</a></li>";
            
        }
        $links.="<li class='page-item active'><span class='page-link'>{$page_num}<span class='sr-only'>(current)</span></span></li>";
        //Trang kế , Trang cuối
        if ($page_num<$total_pages) {
            $pn = $page_num + 1;
            if ($page_num == 1) {
                $links.="<li class='page-item'><a class='page-link' href='{$baseurl}&page_num={$pn}'>2</a></li>";
                $page=3;
            }           
            if ($page == 3) {
                $links.="<li class='page-item'><a class='page-link' href='{$baseurl}&page_num={$page}'>3</a></li>";
            } else {
                $links.="<li class='page-item'><a class='page-link' href='{$baseurl}&page_num={$pn}'>$pn</a></li>";
            }
            // $links.="<li class='page-item'><a href='{$baseurl}&page_num={$pn}' class='page-link'>Next</a></li>";
            $links.="<li class='page-item'><a class='page-link' href='{$baseurl}&page_num={$pn}'>Next</a></li>";        
            // $links.="<li class='page-item'><a href='{$baseurl}&page_num={$total_pages}' class= 'page-link'>>></a></li>";
        }  
        return $links;
    }
    function getBlogbyid($id) {
        $sql = "select * from baiviet where id = $id";
        return result1(1,$sql);
    }
    function getBestBlog() {
        $sql="SELECT * FROM baiviet ORDER BY luotxem DESC LIMIT 4";
        return result1(0,$sql); 
    }
    function getDmblog () {
        $sql = "SELECT * FROM dmbaiviet";
        return result1(0,$sql);
    }
    function getBlogByiddm($iddm) {
        $sql = "SELECT * FROM baiviet where iddm=$iddm limit 2";
        return result1(0,$sql);
    }
    function addCmt($content,$idUser,$id,$star) {
        $sql="INSERT INTO binhluan (idkh,idbaiviet,noidung,star) VALUES ('$idUser','$id','$content','$star')";
        return exec1($sql);
    }
    function getIdbyuser($user) {
        $sql = "SELECT * FROM `khachhang` WHERE user='$user'";
        return result1(0,$sql);
    }
    function showCmt($id){
        $sql = "SELECT idkh,idbaiviet,noidung,star FROM `binhluan` WHERE idbaiviet='$id'";
        return result1(0,$sql);
    }
    function rowcountCmt($id) {
        $sql = "SELECT COUNT(*) AS numberRow FROM binhluan where idbaiviet=$id";
        $kq = query($sql);
        $row= $kq -> fetch();
        $rowcount = $row['numberRow'];
        return $rowcount;
    }
    function getBlByid($id) {
        $sql = "SELECT idkh,idbaiviet,noidung,star FROM `binhluan` WHERE idbaiviet='$id'";
        return result1(0,$sql);
    }
    function getKhbyId($idkh) {
        $sql = "SELECT * FROM khachhang where id='$idkh'";
        return result1(0,$sql);
    }
    
?>