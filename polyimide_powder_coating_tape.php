
           
  <?php include 'header-product.php'; ?>

           <!--    Right Main -->
            <div class="col-lg-8 liam">
                <img src="img/polyimide_powder_coating_tape_large.jpg" class="img-fluid table-photo">
                <div class="table-bar">
                                PC500 POLYIMIDE Powder Coating Tape (500 &deg;F 260 &deg;C) 
                </div>

                
                <div class="table-product-details"> 
                    <ul> 
                        <li>1 mil polyimide film &amp; 1.5 mil silicone adhesive.</li>
                        <li>High temperature powder coating, wave soldering, circuit board production.</li>
                        <li>Clean removal, no residue.</li>
                        <li>UL approved.</li>
                        <li>Other sizes available - please ask!</li>
                    </ul>
                </div>
                <div>
                    <table >
                        <thead >
                            <th> Part Number</th>
                            <th> Size</th>
                            <th> Rolls / Case</th>
                            <th> Price / Roll <br> (Roll)</th>
                            <th> Price / Roll <br> (Case)</th>
                        </thead>   
                        <tbody>
                           <tr>
                            <?php
                               $link = mysqli_connect("sql5c25c.carrierzone.com", "argonusaco889229", "argon2018", "argon2018_argonusaco889229");

                                if(mysqli_connect_error()){
                                    die ("Connection failed!");
                                } 

                                $query = "SELECT * FROM  polyimide_powder_coating_tapea";

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
                PC522 ULTRA THICK POLYIMIDE POWDER COATING TAPE (500 &deg;F 260 &deg;C) 
                </div>

                
                <div class="table-product-details"> 
                    <ul> 
                        <li>2 mil polyimide film &amp; 1.5 mil silicone adhesive</li>
                        <li>High temperature powder coating, wave soldering, circuit board production.</li>
                        <li>Clean removal, no residue.</li>
                        <li>Other sizes available - please ask!</li>
                    </ul>
                </div>
                <div>
                    <table >
                        <thead >
                            <th> Part Number</th>
                            <th> Size</th>
                            <th> Rolls / Case</th>
                            <th> Price / Roll <br> (Roll)</th>
                            <th> Price / Roll <br> (Case)</th>
                        </thead>   
                        <tbody>
                           <tr>
                            <?php
                               $link = mysqli_connect("sql5c25c.carrierzone.com", "argonusaco889229", "argon2018", "argon2018_argonusaco889229");

                                if(mysqli_connect_error()){
                                    die ("Connection failed!");
                                } 

                                $query = "SELECT * FROM  polyimide_powder_coating_tapeb";

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
                PC533 ULTRA THICK POLYIMIDE POWDER COATING TAPE (500 &deg;F 260 &deg;C) 
                </div>

                
                <div class="table-product-details"> 
                    <ul> 
                        <li>3 mil polyimide film &amp; 1.5 mil silicone adhesive</li>
                        <li>High temperature powder coating, wave soldering, circuit board production.</li>
                        <li>Clean removal, no residue.</li>
                        <li>Other sizes available - please ask!</li>
                    </ul>
                </div>
                <div>
                    <table >
                        <thead >
                            <th> Part Number</th>
                            <th> Size</th>
                            <th> Rolls / Case</th>
                            <th> Price / Roll <br> (Roll)</th>
                            <th> Price / Roll <br> (Case)</th>
                        </thead>   
                        <tbody>
                           <tr>
                            <?php
                               $link = mysqli_connect("sql5c25c.carrierzone.com", "argonusaco889229", "argon2018", "argon2018_argonusaco889229");

                                if(mysqli_connect_error()){
                                    die ("Connection failed!");
                                } 

                                $query = "SELECT * FROM  polyimide_powder_coating_tapec";

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
                                PC555 ULTRA THICK POLYIMIDE POWDER COATING TAPE (500 &deg;F 260 &deg;C) 
                </div>

                
                <div class="table-product-details"> 
                    <ul> 
                        <li>5 mil polyimide film &amp; 1.5 mil silicone adhesive</li>
                        <li>High temperature powder coating, wave soldering, circuit board production.</li>
                        <li>Clean removal, no residue.</li>
                        <li>Other sizes available - please ask!</li>
                    </ul>
                </div>
                <div>
                    <table >
                        <thead >
                            <th> Part Number</th>
                            <th> Size</th>
                            <th> Rolls / Case</th>
                            <th> Price / Roll <br> (Roll)</th>
                            <th> Price / Roll <br> (Case)</th>
                        </thead>   
                        <tbody>
                           <tr>
                            <?php
                               $link = mysqli_connect("sql5c25c.carrierzone.com", "argonusaco889229", "argon2018", "argon2018_argonusaco889229");

                                if(mysqli_connect_error()){
                                    die ("Connection failed!");
                                } 

                                $query = "SELECT * FROM  polyimide_powder_coating_taped";

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