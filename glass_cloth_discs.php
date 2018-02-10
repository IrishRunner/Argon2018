       
  <?php include 'header-product.php'; ?>

           <!--    Right Main -->
            <div class="col-lg-8 liam">
                <img src="img/glass_cloth_discs_large.jpg" class="img-fluid table-photo">
                <div class="table-bar">
                                GCD GLASS CLOTH DISCS (500 &deg;F / 260 &deg;C) 
                </div>

                <div class="table-product-details"> 
                    <ul> 
                        <li>5 mil glass cloth &amp; 3 mil silicone adhesive.</li>
                        <li>Discs are on a clear, non-slit back liner.</li>
                        <li>Sandblasting, thermal spray, powder coating.</li>
                        <li>Other sizes available - please enquire!</li>                           
                    </ul>
                </div>
                <div>
                    <table>
                        <thead >
                            <th> Part Number</th>
                            <th> Diameter</th>
                            <th> Qty / Roll</th>
                            <th> Price / Roll <br> (1 Roll) </th>
                            <th> Price / Roll <br> (10 Rolls</th>
                        </thead>   
                        <tbody>
                           <tr>
                            <?php
                               $link = mysqli_connect("sql5c25c.carrierzone.com", "argonusaco889229", "argon2018", "argon2018_argonusaco889229");

                                if(mysqli_connect_error()){
                                    die ("Connection failed!");
                                } 

                                $query = "SELECT * FROM  glass_cloth_discs";

                                if ($result = mysqli_query($link, $query)) {
                                    while($row =  mysqli_fetch_array($result)) {
                                        echo "<tr>";
                                        echo "<td>".$row[1]."</td>";
                                        echo "<td>".$row[2]."</td>";
                                        echo "<td>".$row[3]."</td>";
                                        echo "<td>$".$row[6]."</td>";
                                        echo "<td>$".$row[7]."</td>";
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