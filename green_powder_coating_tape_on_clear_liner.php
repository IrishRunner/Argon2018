       
  <?php include 'header-product.php'; ?>

           <!--    Right Main -->
            <div class="col-lg-8 liam">
                <img src="img/green_powder_coating_tape_on_clear_liner_large.jpg" class="img-fluid table-photo">
                <div class="table-bar">
                                PC400 GREEN POWDER COATING TAPE ON CLEAR LINER(400 &deg;F 204 &deg;C) 
                </div>

                <div class="table-product-details"> 
                    <ul> 
                        <li>Argon's in-house die cutting produces die cuts within 48 hours.</li>
                        <li>PC400 2 mil polyster tape (silicone adhesive) on 3 mil clear liner.</li>
                        <li>Powder coating, anodizing.</li>
                        <li>Hand-cut custom shapes for prototyping or small jobs.</li>
                        <li>Ultra thick 3 mil liner makes cutting tape easier.</li>              
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

                                $query = "SELECT * FROM  green_powder_coating_tape_on_clear_liner";

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