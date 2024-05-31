<div class="content">
    <div class="Left">
        <?php
            include('Module/Left/loc_sp.php');
        ?>
    </div>
    <div class="Right">
        <?php
            if(isset($_GET['xem'])){
                $tam=$_GET['xem'];
            } else
	        {
	            $tam='';
	        } 
            if($tam=='HomeOff'){
                include('Module/Right/Brand/HomeOff.php');
                }
            if ($tam=='Prohome-Moho'){
                include('Module/Right/Brand/Prohome-Moho.php');
                } 
            if ($tam=='Fence-Jazz'){
                include('Module/Right/Brand/Fence-Jazz.php');
                }
            if ($tam=='Penny-Ahura'){
                include('Module/Right/Brand/Penny-Ahura.php');
                }
            if ($tam=='AnotherBrand'){
                include('Module/Right/Brand/AnotherBrand.php');
                }
            if($tam=='White'){
                include('Module/Right/Color/White.php');
                }
            if ($tam=='Gray'){
                include('Module/Right/Color/Gray.php');
                }
            if ($tam=='Black'){
                    include('Module/Right/Color/Black.php');
                }  
            if ($tam=='Brown'){
                include('Module/Right/Color/Brown.php');
                }
            if ($tam=='Blue'){
                include('Module/Right/Color/Blue.php');
                }
            if ($tam=='AnotherColor'){
                include('Module/Right/Color/AnotherColor.php');
                }
            if($tam=='Sofa'){
                include('Module/Right/Type/Sofa.php');
                }
            if ($tam=='Bed'){
                include('Module/Right/Type/Bed.php');
                    } 
            if ($tam=='Chair'){
                include('Module/Right/Type/Chair.php');
                }
            if ($tam=='Table'){
                include('Module/Right/Type/Table.php');
                }
            if ($tam=='ArmChair'){
                include('Module/Right/Type/ArmChair.php');
                }  
            if ($tam=='AnotherType'){
                include('Module/Right/Type/AnotherType.php');
                }
            if ($tam=='dangnhap'){
                include('dangnhap.php');
                }
            if ($tam=='dangky'){
                include('dangky.php');
                }
            if ($tam==''){
                include('Module/Right/tatcasanpham.php');
                }
        ?>
    </div>
</div>