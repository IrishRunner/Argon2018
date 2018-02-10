       
  <?php include 'header-product.php'; ?>

           <!--    Right Main -->
            <div class="col-lg-8 liam">
                <img src="img/green_powder_coating_tape_large.jpg" class="img-fluid table-photo">
                <div class="table-bar">
                                PC400 Green Powder Coating Tape (400 &deg;F 204 &deg;C) 
                </div>

                <div class="table-product-details"> 
                    <ul> 
                        <li> 2 mil polyester &amp; 1.5 mil silicone adhesive</li>
                        <li>Powder coating, anodizing</li>
                        <li>Clean removal, no residue</li>
                        <li>Custom widths and metric sizes available</li>
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
                            <th> Price / Roll <br>(5 Cases)</th>
                        </thead>   
                        <tbody>
                           <tr>
                            <?php
                               $link = mysqli_connect("sql5c25c.carrierzone.com", "argonusaco889229", "argon2018", "argon2018_argonusaco889229");

                                if(mysqli_connect_error()){
                                    die ("Connection failed!");
                                } 

                                $query = "SELECT * FROM  green_powder_coating_tapea";

                                if ($result = mysqli_query($link, $query)) {
                                    while($row =  mysqli_fetch_array($result)) {
                                        echo "<tr>";
                                        echo "<td>".$row[1]."</td>";
                                        echo "<td>".$row[2]."</td>";
                                        echo "<td>".$row[3]."</td>";
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
                    
                       
                             
                </div>
                <div class="table-bar">
                                PC400 Green Powder Coating Tape - Metric Sizes (400 &deg;F 204 &deg;C) 
                </div>
                <div class="table-product-details"> 
                    <ul> 
                        <li> 2 mil polyester &amp; 1.5 mil silicone adhesive</li>
                        <li>Powder coating, anodizing</li>
                        <li>Clean removal, no residue</li>
                        <li>Custom widths and metric sizes available</li>
                    </ul>
                </div>
                <div>
                    <table >
                        <thead >
                            <th> Part Number</th>
                            <th> Size</th>
                            <th> Rolls / <br> Case</th>
                            <th> Price / Roll <br>(Roll)</th>
                            <th> Price / Roll <br> (Case)</th>
                            <th> Price / Roll <br> (5 Cases)</th>
                        </thead>   
                        <tbody>
                           <tr>
                            <?php
                               $link = mysqli_connect("sql5c25c.carrierzone.com", "argonusaco889229", "argon2018", "argon2018_argonusaco889229");

                                if(mysqli_connect_error()){
                                    die ("Connection failed!");
                                } 

                                $query = "SELECT * FROM  green_powder_coating_tapeb";

                                if ($result = mysqli_query($link, $query)) {
                                    while($row =  mysqli_fetch_array($result)) {
                                        echo "<tr>";
                                        echo "<td>".$row[1]."</td>";
                                        echo "<td>".$row[2]."</td>";
                                        echo "<td>".$row[3]."</td>";
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