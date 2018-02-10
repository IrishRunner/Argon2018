       
  <?php include 'header-product.php'; ?>

           <!--    Right Main -->
            <div class="col-lg-8 liam">
                <img src="img/cv_hanging_hooks_large.jpg" class="img-fluid table-photo">
                <div class="table-bar">
                                "CV" HOOKS 
                </div>

                <div class="table-product-details"> 
                    <ul> 
                        <li>Hooks are bundled, twist tied, and sold in resealable bags for easy use.</li> 
                        <li>Thicker wire diameters and additional legnths available.</li> 
                        <li>-180 indicates a 180&deg; twist on one end.</li>
                        <li>See table below for hooks' approximate holding capacity.</li>       
                    </ul>
                </div>
                <div>
                    <table>
                        <thead >
                            <th> Part Number</th>
                            <th> Wire Diam.</th>
                            <th> Length</th>
                            <th> Arch Diam.</th>
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

                                $query = "SELECT * FROM  cv_hanging_hooks";

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
                <div>
                    <table>
                        <thead >
                            <th> Approximate Holding Capacity</th>
                            <th> </th>
                        </thead>   
                        <tbody>
                           <tr>
                            <?php
                               $link = mysqli_connect("sql5c25c.carrierzone.com", "argonusaco889229", "argon2018", "argon2018_argonusaco889229");

                                if(mysqli_connect_error()){
                                    die ("Connection failed!");
                                } 

                                $query = "SELECT * FROM  approx_carry_hooks";

                                if ($result = mysqli_query($link, $query)) {
                                    while($row =  mysqli_fetch_array($result)) {
                                        echo "<tr>";
                                        echo "<td>".$row[1]."</td>";
                                        echo "<td>".$row[2]."</td>";
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