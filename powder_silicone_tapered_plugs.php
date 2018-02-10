       
  <?php include 'header-product.php'; ?>

           <!--    Right Main -->
            <div class="col-lg-8 liam">
                <img src="img/powder_silicone_tapered_plugs_large.jpg" class="img-fluid table-photo">
                <div class="table-bar">
                                POWDER SILICONE TAPERED PLUGS (500 &deg;F / 260 &deg;C) 
                </div>

                <div class="table-product-details"> 
                    <ul> 
                        <li>Powder Coating, plating, anodizing, e-coating.</li> 
                        <li>Plugs threaded and non-threaded holes.</li>                       
                    </ul>
                </div>
                <div>
                    <table>
                        <thead >
                            <th> Part Number</th>
                            <th> Color</th>
                            <th> Bottom <br> Diam.</th>
                            <th> Top <br> Diam.</th>
                            <th> Length</th>
                            <th> Qty / <br> Bag</th>
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

                                $query = "SELECT * FROM  powder_silicone_tapered_plugsa";

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
                <div>
                    <table>
                        <thead >
                            <th> Part Number</th>
                            <th> Color</th>
                            <th> Bottom <br> Diam.</th>
                            <th> Top <br> Diam.</th>
                            <th> Length</th>
                            <th> Qty / <br> Bag</th>
                            <th> Price / <br> Bag</th>
                            <th> Price / Bag <br> (10 Bags)</th>
                        </thead>   
                        <tbody>
                           <tr>
                            <?php
                               $link = mysqli_connect("sql5c25c.carrierzone.com", "argonusaco889229", "argon2018", "argon2018_argonusaco889229");

                                if(mysqli_connect_error()){
                                    die ("Connection failed!");
                                } 

                                $query = "SELECT * FROM  powder_silicone_tapered_plugsb";

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
                <div>
                    <table>
                        <thead >
                            <th> Part Number</th>
                            <th> Color</th>
                            <th> Bottom <br> Diam.</th>
                            <th> Top <br> Diam.</th>
                            <th> Length</th>
                            <th> Qty / <br> Bag</th>
                            <th> Price / <br> Each</th>
                            <th> Price / Each <br> (100 pcs.)</th>
                        </thead>   
                        <tbody>
                           <tr>
                            <?php
                               $link = mysqli_connect("sql5c25c.carrierzone.com", "argonusaco889229", "argon2018", "argon2018_argonusaco889229");

                                if(mysqli_connect_error()){
                                    die ("Connection failed!");
                                } 

                                $query = "SELECT * FROM  powder_silicone_tapered_plugsc";

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
                <div>
                    <table>
                        <thead >
                            <th> Part Number</th>
                            <th> Color</th>
                            <th> Bottom <br> Diam.</th>
                            <th> Top <br> Diam.</th>
                            <th> Length</th>
                            <th> Qty / <br> Bag</th>
                            <th> Price / <br> Each</th>
                            <th> Price / Each <br> (10 pcs.)</th>
                        </thead>   
                        <tbody>
                           <tr>
                            <?php
                               $link = mysqli_connect("sql5c25c.carrierzone.com", "argonusaco889229", "argon2018", "argon2018_argonusaco889229");

                                if(mysqli_connect_error()){
                                    die ("Connection failed!");
                                } 

                                $query = "SELECT * FROM  powder_silicone_tapered_plugsd";

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
                <div>
                    <table>
                        <thead >
                            <th> Part Number</th>
                            <th> Bottom <br> Diam.</th>
                            <th> Top <br> Diam.</th>
                            <th> Length</th>
                            <th> Qty</th>
                            <th> Price / <br> Each</th>
                            <th> Price / Each <br> (100 pcs.)</th>
                        </thead>   
                        <tbody>
                           <tr>
                            <?php
                               $link = mysqli_connect("sql5c25c.carrierzone.com", "argonusaco889229", "argon2018", "argon2018_argonusaco889229");

                                if(mysqli_connect_error()){
                                    die ("Connection failed!");
                                } 

                                $query = "SELECT * FROM  green_neoprene_plugsb";

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
                            <th> Part Number</th>
                            <th> Bottom <br> Diam.</th>
                            <th> Top <br> Diam.</th>
                            <th> Length</th>
                            <th> Qty</th>
                            <th> Price / <br> Each</th>
                            <th> Price / Each <br> (25 pcs.)</th>
                        </thead>   
                        <tbody>
                           <tr>
                            <?php
                               $link = mysqli_connect("sql5c25c.carrierzone.com", "argonusaco889229", "argon2018", "argon2018_argonusaco889229");

                                if(mysqli_connect_error()){
                                    die ("Connection failed!");
                                } 

                                $query = "SELECT * FROM  green_neoprene_plugsc";

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
                
                                
            </div> <!--    End Right Main -->
    </div>
</div>
<!-- End Main Section / Wrapper -->


<?php include 'footer.php'; ?>