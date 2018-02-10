       
  <?php include 'header-product.php'; ?>

           <!--    Right Main -->
            <div class="col-lg-8 liam">
                <img src="img/pull_tab_vinyl_caps_large.jpg" class="img-fluid table-photo">
                <div class="table-bar">
                                PULL TAB VINYL CAPS (350 &deg;F / 177 &deg;C) 
                </div>

                <div class="table-product-details"> 
                    <ul> 
                        <li>Painting, plating, anodizing, general purpose protection.</li> 
                        <li>Long pull tab eases the removal of the cap.</li> 
                        <li>Caps are color coded for easy identification.</li>                    
                    </ul>
                </div>
                <div class="product-diagram">
                 <img src="img/pull_tab_vinyl_caps_pic.jpg">
                </div>
                <div>
                    <table>
                        <thead >
                            <th> Part Number</th>
                            <th> ID <br> "A"</th>
                            <th> Length <br> "B" </th>
                            <th> Wall <br>Thickness <br> "C"</th>
                            <th> Tab <br> Diam. <br> "D"</th>
                            <th> Tab <br> Length <br> "E"</th>
                            <th> Color </th>
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

                                $query = "SELECT * FROM  pull_tab_vinyl_caps";

                                if ($result = mysqli_query($link, $query)) {
                                    while($row =  mysqli_fetch_array($result)) {
                                        echo "<tr>";
                                        echo "<td>".$row[1]."</td>";
                                        echo "<td>".$row[2]."</td>";
                                        echo "<td>".$row[3]."</td>";
                                        echo "<td>".$row[4]."</td>";
                                        echo "<td>".$row[5]."</td>";
                                        echo "<td>".$row[6]."</td>";
                                        echo "<td>".$row[7]."</td>";
                                        echo "<td>".$row[8]."</td>";
                                        echo "<td>$".$row[11]."</td>";
                                        echo "<td>$".$row[12]."</td>";
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