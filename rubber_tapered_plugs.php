       
  <?php include 'header-product.php'; ?>

           <!--    Right Main -->
            <div class="col-lg-8 liam">
                <img src="img/rubber_tapered_plugs_large.jpg" class="img-fluid table-photo">
                <div class="table-bar">
                                RUBBER TAPERED PLUGS (150 &deg;F / 66 &deg;C) 
                </div>

                <div class="table-product-details"> 
                    <ul> 
                        <li>Plating, painting.</li> 
                        <li>Natural rubber material.</li>     
                    </ul>
                </div>
                <div>
                    <table>
                        <thead >
                            <th> Part Number</th>
                            <th> Color</th>
                            <th> Bottom <br> Diam. </th>
                            <th> Top <br> Diam.</th>
                            <th> Length</th>
                            <th> Qty /<br> Bag</th>
                            <th> Price / <br> Bag</th>
                            <th> Price / Bag <br> (5 Bags)</th>
                        </thead>   
                        <tbody>
                           <tr>
                            <?php
                               $link = mysqli_connect("sql5c25c.carrierzone.com", "argonusaco889229", "argon2018", "argon2018_argonusaco889229");

                                if(mysqli_connect_error()){
                                    die ("Connection failed!");
                                } 

                                $query = "SELECT * FROM  rubber_tapered_plugs";

                                if ($result = mysqli_query($link, $query)) {
                                    while($row =  mysqli_fetch_array($result)) {
                                        echo "<tr>";
                                        echo "<td>".$row[1]."</td>";
                                        echo "<td>".$row[2]."</td>";
                                        echo "<td>".$row[3]."</td>";
                                        echo "<td>".$row[4]."</td>";
                                        echo "<td>".$row[5]."</td>";
                                        echo "<td>".$row[6]."</td>";
                                        echo "<td>$".$row[9]."</td>";
                                        echo "<td>$".$row[10]."</td>";
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