       
  <?php include 'header-product.php'; ?>

           <!--    Right Main -->
            <div class="col-lg-8 liam">
                <img src="img/pg21_masking_tape_large.jpg" class="img-fluid table-photo">
                <div class="table-bar">
                                PG21 MASKING TAPE (300 &deg;F 150 &deg;C) 
                </div>

                <div class="table-product-details"> 
                    <ul> 
                        <li>7.3 mil total thickness, rubber adhesive.</li>
                        <li>Painting, wet spray.</li>
                        <li>Clean removal.</li>
                        <li>Other sizes available - please enquire!</li>
                        <li>Also available on a liner - please enquire!</li>                  
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

                                $query = "SELECT * FROM  pg21_masking_tapea";

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
                            HT11 MASKING TAPE (300 &deg;F 150 &deg;C) 
                </div>
                <div class="table-product-details"> 
                <ul>
                    <li>Exact imperial widths, not metric equivalents.</li> 
                    <li>7.3 mil total thickness, rubber adhesive.</li>
                    <li>Painting, wet spray.</li>
                    <li>Clean removal.</li>                    
                </ul>
                </div>
                <div>
                    <table>
                        <thead >
                            <th> Part Number</th>
                            <th> Size</th>
                            <th> Rolls / Case</th>
                            <th> Price / Roll (Roll)</th>
                            <th> Price / Roll (Case</th>
                        </thead>   
                        <tbody>
                           <tr>
                            <?php
                               $link = mysqli_connect("sql5c25c.carrierzone.com", "argonusaco889229", "argon2018", "argon2018_argonusaco889229");

                                if(mysqli_connect_error()){
                                    die ("Connection failed!");
                                } 

                                $query = "SELECT * FROM  pg21_masking_tapeb";

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
            </div> <!--    End Right Main -->
    </div>
</div>
<!-- End Main Section / Wrapper -->


<?php include 'footer.php'; ?>