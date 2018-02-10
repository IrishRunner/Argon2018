       
  <?php include 'header-product.php'; ?>

           <!--    Right Main -->
            <div class="col-lg-8 liam">
                <img src="img/cork_spacers_large.jpg" class="img-fluid table-photo">
                <div class="table-bar">
                                CORK SPACERS (300 &deg;F / 149 &deg;C) 
                </div>

                <div class="table-product-details">    
                    <ul> 
                        <li>Used as a protective spacer between layers of newly coated parts to avoid surface damage.</li>    
                        <li>0.75" Squares, 0.187" thick cork.</li>
                        <li>Ideal during storage and shipping.</li>             
                    </ul>                                
                </div>
                <div>
                    <table>
                        <thead >
                            <th> Part Number</th>
                            <th> Qty / Roll</th>
                            <th> Price / Roll</th>
                        </thead>   
                        <tbody>
                           <tr>
                            <?php
                               $link = mysqli_connect("sql5c25c.carrierzone.com", "argonusaco889229", "argon2018", "argon2018_argonusaco889229");

                                if(mysqli_connect_error()){
                                    die ("Connection failed!");
                                } 

                                $query = "SELECT * FROM  cork_spacers";

                                if ($result = mysqli_query($link, $query)) {
                                    while($row =  mysqli_fetch_array($result)) {
                                        echo "<tr>";
                                        echo "<td>".$row[1]."</td>";
                                        echo "<td>".$row[2]."</td>";
                                        echo "<td>$".$row[5]."</td>";
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