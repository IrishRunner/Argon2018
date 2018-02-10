       
  <?php include 'header-product.php'; ?>

           <!--    Right Main -->
            <div class="col-lg-8 liam">
                <img src="img/claw_hooks_large.jpg" class="img-fluid table-photo">
                <div class="table-bar">
                                CLAW HOOKS 
                </div>

                <div class="table-product-details"> 
                    <ul> 
                        <li>Approximate Holding Capacity:
                            <br>0.080" diameter : 5 lbs.
                            <br>0.120" diameter : 10 lbs.
                            <br>0.160" diameter : 25 lbs.
                        </li>
                        <li>Claws clamp together to form a tight hold.</li>                            
                    </ul>
                </div>
                <div>
                    <table>
                        <thead >
                            <th> Part Number</th>
                            <th> Wire Diam.</th>
                            <th> Length</th>
                            <th> Qty /<br> Bag</th>
                            <th> Price / Bag <br> (1 Bag)</th>
                            <th> Price / Bag <br> (10 Bags)</th>
                        </thead>   
                        <tbody>
                           <tr>
                            <?php
                               $link = mysqli_connect("sql5c25c.carrierzone.com", "argonusaco889229", "argon2018", "argon2018_argonusaco889229");

                                if(mysqli_connect_error()){
                                    die ("Connection failed!");
                                } 

                                $query = "SELECT * FROM  claw_hooks";

                                if ($result = mysqli_query($link, $query)) {
                                    while($row =  mysqli_fetch_array($result)) {
                                        echo "<tr>";
                                        echo "<td>".$row[1]."</td>";
                                        echo "<td>".$row[2]."</td>";
                                        echo "<td>".$row[3]."</td>";
                                        echo "<td>".$row[4]."</td>";
                                        echo "<td>$".$row[7]."</td>";
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