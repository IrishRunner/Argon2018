       
  <?php include 'header-product.php'; ?>

           <!--    Right Main -->
            <div class="col-lg-8 liam">
                <img src="img/swivel_wheels_large.jpg" class="img-fluid table-photo">
                <div class="table-bar">
                                SWIVEL WHEELS 
                </div>

                <div class="table-product-details"> 
                    <ul> 
                        <li>Holding Capacity: 200 lbs.</li>
                        <li>Do not exceed 200 lbs. weight limit under any circumstances.</li>
                        <li>Roatates 360&deg;</li>
                        <li>Double ball bearing construction.</li>                            
                    </ul>
                </div>
                <div>
                    <table>
                        <thead >
                            <th> Part Number</th>
                            <th> 10-24 pcs.</th>
                            <th> 25-99 pcs.</th>
                            <th> 100-499 pcs.</th>
                            <th> 500-1000 pcs.</th>
                        </thead>   
                        <tbody>
                           <tr>
                            <?php
                               $link = mysqli_connect("sql5c25c.carrierzone.com", "argonusaco889229", "argon2018", "argon2018_argonusaco889229");

                                if(mysqli_connect_error()){
                                    die ("Connection failed!");
                                } 

                                $query = "SELECT * FROM  swivel_wheels";

                                if ($result = mysqli_query($link, $query)) {
                                    while($row =  mysqli_fetch_array($result)) {
                                        echo "<tr>";
                                        echo "<td>".$row[1]."</td>";
                                        echo "<td>$".$row[6]."</td>";
                                        echo "<td>$".$row[7]."</td>";
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