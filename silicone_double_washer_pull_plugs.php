       
  <?php include 'header-product.php'; ?>

           <!--    Right Main -->
            <div class="col-lg-8 liam">
                <img src="img/silicone_double_washer_pull_plugs_large.jpg" class="img-fluid table-photo">
                <div class="table-bar">
                                DWPP SILICONE DOUBLE WASHER PULL PLUGS (600 &deg;F / 315 &deg;C) 
                </div>

                <div class="table-product-details"> 
                    <ul> 
                        <li>Powder coating, plating, anodizing, e-coating.</li> 
                        <li>Masks first and last thread of a threaded thru hole.</li>                
                    </ul>
                </div>
                <div class="product-diagram">
                 <img src="img/plugs20_pic.jpg">
                </div>
                <div>
                    <table>
                        <thead >
                            <th> Part Number</th>
                            <th> Size</th>
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

                                $query = "SELECT * FROM  silicone_double_washer_pull_plugs";

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
                                        echo "<td>".$row[8]."</td>";
                                        echo "<td>$".$row[11]."</td>";
                                        echo "<td>$".$row[12]."</td>";
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