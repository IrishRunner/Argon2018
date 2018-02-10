       
  <?php include 'header-product.php'; ?>

           <!--    Right Main -->
            <div class="col-lg-8 liam">
                <img src="img/ut_self_threading_plugs_large.jpg" class="img-fluid table-photo">
                <div class="table-bar">
                                UT SELF THREADING PLUGS (180 &deg;F / 82 &deg;C) 
                </div>

                <div class="table-product-details"> 
                    <ul> 
                        <li>Plating, anodizing, e-coating.</li> 
                        <li>Designed for threaded holes.</li>
                        <li>Plugs conform to threads creating a leak proof seal.</li>
                        <li>Made from high density polythylene</li>                         
                    </ul>
                </div>
                <div class="product-diagram">
                 <img src="img/ut_self_threading_diag3.jpg">
                </div>
                <div>
                    <table>
                        <thead >
                            <th> Part Number</th>
                            <th> Thread <br> Size</th>
                            <th> A</th>
                            <th> B </th>
                            <th> C</th>
                            <th> Qty / Bag</th>
                            <th> Price / Bag</th>
                        </thead>   
                        <tbody>
                           <tr>
                            <?php
                               $link = mysqli_connect("sql5c25c.carrierzone.com", "argonusaco889229", "argon2018", "argon2018_argonusaco889229");

                                if(mysqli_connect_error()){
                                    die ("Connection failed!");
                                } 

                                $query = "SELECT * FROM  ut_self_threading_plugs";

                                if ($result = mysqli_query($link, $query)) {
                                    while($row =  mysqli_fetch_array($result)) {
                                        echo "<tr>";
                                        echo "<td>".$row[1]."</td>";
                                        echo "<td>".$row[2]."</td>";
                                        echo "<td>".$row[3]."</td>";
                                        echo "<td>".$row[4]."</td>";
                                        echo "<td>".$row[5]."</td>";
                                        echo "<td>".$row[6]."</td>";
                                        echo "<td>$".$row[8]."</td>";
                                        echo "</tr>";
                                    }
                                }
                            ?>     
                           </tr>
                        </tbody>
                    </table> 
                       
                </div> <!-- End Table div -->
                                
            </div> <!--    End Right Main -->
    </div>
</div>
<!-- End Main Section / Wrapper -->


<?php include 'footer.php'; ?>