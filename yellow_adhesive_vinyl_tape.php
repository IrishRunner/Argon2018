       
  <?php include 'header-product.php'; ?>

           <!--    Right Main -->
            <div class="col-lg-8 liam">
                <img src="img/yellow_adhesive_vinyl_tape_large.jpg" class="img-fluid table-photo">
                <div class="table-bar">
                                SC1 YELLOW ADHESIVE VINYL TAPE FOR PLATING (210 &deg;F 99 &deg;C) 
                </div>

                <div class="table-product-details"> 
                    <ul> 
                        <li>7 mil yellow vinyl film &amp; 1 mil rubber adhesive.</li>
                        <li>Plating, anodizing.</li>
                        <li>Clean removal, no residue.</li>                                
                    </ul>
                </div>
                <div>
                    <table>
                        <thead >
                            <th> Part Number</th>
                            <th> Size</th>
                            <th> Rolls / <br> Case</th>
                            <th> Price / Roll <br>(Roll)</th>
                            <th> Price / Roll <br>(Case)</th>
                        </thead>   
                        <tbody>
                           <tr>
                            <?php
                               $link = mysqli_connect("sql5c25c.carrierzone.com", "argonusaco889229", "argon2018", "argon2018_argonusaco889229");

                                if(mysqli_connect_error()){
                                    die ("Connection failed!");
                                } 

                                $query = "SELECT * FROM  yellow_adhesive_vinyl_tapea";

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
                </div>
                    
                <div class="table-bar">
                            NAY66 YELLOW NON-ADHESIVE VINYL TAPE FOR PLATING (210 &deg;F 99 &deg;C) 
                </div>
                <div class="table-product-details"> 
                <ul> 
                    <li>4.5 mil non-adhesive yellow vinyl.</li>
                    <li>Plating, anodizing.</li>
                    <li>Vinyl adheres to itself, creating a tight waterproof seal.</li>
                </ul>
                </div>
                <div>
                    <table>
                        <thead >
                            <th> Part Number</th>
                            <th> Size</th>
                            <th> Price / Roll</th>
                        </thead>   
                        <tbody>
                           <tr>
                            <?php
                               $link = mysqli_connect("sql5c25c.carrierzone.com", "argonusaco889229", "argon2018", "argon2018_argonusaco889229");

                                if(mysqli_connect_error()){
                                    die ("Connection failed!");
                                } 

                                $query = "SELECT * FROM  yellow_adhesive_vinyl_tapeb";

                                if ($result = mysqli_query($link, $query)) {
                                    while($row =  mysqli_fetch_array($result)) {
                                        echo "<tr>";
                                        echo "<td>".$row[1]."</td>";
                                        echo "<td>".$row[2]."</td>";
                                        echo "<td>$".$row[4]."</td>";
                                        echo "</tr>";
                                    }
                                }
                            ?>     
                           </tr>
                        </tbody>
                    </table>                 
                </div> 
            </div> <!--    End Right Main -->
    </div>
</div>
<!-- End Main Section / Wrapper -->


<?php include 'footer.php'; ?>