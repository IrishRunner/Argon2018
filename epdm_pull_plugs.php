       
  <?php include 'header-product.php'; ?>

           <!--    Right Main -->
            <div class="col-lg-8 liam">
                <img src="img/epdm_pull_plugs_large.jpg" class="img-fluid table-photo">
                <div class="table-bar">
                                EPP EPDM PULL PLUGS (315 &deg;F / 157 &deg;C) 
                </div>

                <div class="table-product-details"> 
                    <ul> 
                        <li>Plating, anodizing, painting.</li> 
                        <li>Ideal for thru holes.</li>         
                    </ul>
                </div>
                <div class="product-diagram">
                 <img src="img/plugs21_pic.jpg">
                </div>
                <div>
                    <table>
                        <thead >
                            <th> Part Number</th>
                            <th> Top <br>"A"</th>
                            <th> Top <br>"B" </th>
                            <th> Length <br> "C"</th>
                            <th> Length <br> "D"</th>
                            <th> Hole Fit</th>
                            <th> Qty /<br> Bag</th>
                            <th> Price / <br> Bag</th>
                        </thead>   
                        <tbody>
                           <tr>
                            <?php
                               $link = mysqli_connect("sql5c25c.carrierzone.com", "argonusaco889229", "argon2018", "argon2018_argonusaco889229");

                                if(mysqli_connect_error()){
                                    die ("Connection failed!");
                                } 

                                $query = "SELECT * FROM  epdm_pull_plugs";

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
                                        echo "<td>$".$row[9]."</td>";
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