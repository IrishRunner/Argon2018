       
  <?php include 'header-product.php'; ?>

           <!--    Right Main -->
            <div class="col-lg-8 liam">
                <img src="img/top_thread_silicone_masking_plugs_large.jpg" class="img-fluid table-photo">
                <div class="table-bar">
                                ASTM SILICONE "TOP THREAD" PLUGS (600 &deg;F / 315 &deg;C) 
                </div>

                <div class="table-product-details"> 
                    <ul> 
                        <li>Powder coating, plating, anodizing, e-coating.</li> 
                        <li>Designed to mask initial threads of threaded holes.</li>                     
                    </ul>
                </div>
                <div class="product-diagram">
                 <img src="img/plug_top_thread.jpg">
                </div>
                <div>
                    <table>
                        <thead >
                            <th> Part Number</th>
                            <th> Color</th>
                            <th> A</th>
                            <th> B </th>
                            <th> C</th>
                            <th> D</th>
                            <th> Qty /<br> Bag</th>
                            <th> Price / <br> Bag</th>
                            <th> Price / Bag <br> (10 Bags)</th>
                        </thead>   
                        <tbody>
                           <tr>
                            <?php
                               $link = mysqli_connect("sql5c25c.carrierzone.com", "argonusaco889229", "argon2018", "argon2018_argonusaco889229");

                                if(mysqli_connect_error()){
                                    die ("Connection failed!");
                                } 

                                $query = "SELECT * FROM  top_thread_silicone_masking_plug";

                                if ($result = mysqli_query($link, $query)) {
                                    while($row =  mysqli_fetch_array($result)) {
                                        echo "<tr>";
                                        echo "<td>".$row[1]."</td>";
                                        echo "<td>".$row[2]."</td>";
                                        echo "<td>".$row[3]."</td>";
                                        echo "<td>".$row[4]."</td>";
                                        echo "<td>".$row[5]."</td>";
                                        echo "<td>".$row[6]."</td>";
                                        echo "<td>".$row[7]."</td>";
                                        echo "<td>$".$row[10]."</td>";
                                        echo "<td>$".$row[11]."</td>";
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