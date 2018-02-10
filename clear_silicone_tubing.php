       
  <?php include 'header-product.php'; ?>

           <!--    Right Main -->
            <div class="col-lg-8 liam">
                <img src="img/clear_silicone_tubing_large.jpg" class="img-fluid table-photo">
                <div class="table-bar">
                                CST SILICONE TUBING - 100 FOOT COILS (500&deg;F / 260&deg;C) 
                </div>

                <div class="table-product-details"> 
                     
                    <p> Powder coating, plating, anodizing, e-coating.</p>
                    <p> Masks studs and pipe ends.</p>
                    <p> Cuts easily to desired lengths.</p>
                    <p> Wall thickness:
                         <br> &nbsp;&nbsp; Standard 1/16" (0.062")
                         <br> &nbsp;&nbsp; Thin Wall 1/32" (0.031") - designated by a "T" on part number
                    </p>                              
                    
                </div>
                <div>
                    <table>
                        <thead >
                            <th> Part Number</th>
                            <th> ID</th>
                            <th> OD</th>
                            <th> Price / Coil</th>
                            <th> Price / Coil <br> (5 Coils)</th>
                        </thead>   
                        <tbody>
                           <tr>
                            <?php
                               $link = mysqli_connect("sql5c25c.carrierzone.com", "argonusaco889229", "argon2018", "argon2018_argonusaco889229");

                                if(mysqli_connect_error()){
                                    die ("Connection failed!");
                                } 

                                $query = "SELECT * FROM  clear_silicone_tubinga";

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
                <div class="table-bar">
                                CST SILICONE TUBING - 50 FOOT COILS (500&deg;F / 260&deg;C) 
                </div>
                <div>
                    <table>
                        <thead >
                            <th> Part Number</th>
                            <th> ID</th>
                            <th> OD</th>
                            <th> Price / Coil</th>
                            <th> Price / Coil <br> (5 Coils)</th>
                        </thead>   
                        <tbody>
                           <tr>
                            <?php
                               $link = mysqli_connect("sql5c25c.carrierzone.com", "argonusaco889229", "argon2018", "argon2018_argonusaco889229");

                                if(mysqli_connect_error()){
                                    die ("Connection failed!");
                                } 

                                $query = "SELECT * FROM  clear_silicone_tubingb";

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