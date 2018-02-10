       
  <?php include 'header-product.php'; ?>

           <!--    Right Main -->
            <div class="col-lg-8 liam">
                <img src="img/multi_purpose_plugs_large.jpg" class="img-fluid table-photo">
                <div class="table-bar">
                                MULTI-PURPOSE (LONG LENGTH) PLUGS (600 &deg;F / 315 &deg;C) 
                </div>

                <div class="table-product-details"> 
                    <ul> 
                        <li>RRS = Rubber</li>
                        <li>BS = EPDM</li>
                        <li>CSP = Silicone</li>
                        <li>Temperature Resistance: <br>
                            Rubber 150&deg;F / 65&deg;C<br>
                            EPDM 300&deg;F / 150&deg;C<br>
                            Silicone 600&deg;F / 315&deg;C<br>        
                        </li>                  
                    </ul>
                </div>
                <div>
                    <table>
                        <thead >
                            <th> Part Number</th>
                            <th> Bottom</th>
                            <th> Top </th>
                            <th> Length</th>
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

                                $query = "SELECT * FROM  multi_purpose_plugs";

                                if ($result = mysqli_query($link, $query)) {
                                    while($row =  mysqli_fetch_array($result)) {
                                        echo "<tr>";
                                        echo "<td>".$row[1]."</td>";
                                        echo "<td>".$row[2]."</td>";
                                        echo "<td>".$row[3]."</td>";
                                        echo "<td>".$row[4]."</td>";
                                        echo "<td>".$row[5]."</td>";
                                        echo "<td>$".$row[8]."</td>";
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