<?php
include_once('config.php');

            $k=$_GET["keys"];
            $terms=explode(" ",$k); 
            $i=0;
            $query = "SELECT * FROM members WHERE";
                foreach($terms as $each)
                {
                $i++;
                if($i==1)
                $query.=" keyword LIKE '%$each%' ";
            else
                $query.="OR keyword LIKE '%$each%' ";
                }
                    $qry=mysqli_query($con,$query);
                    $result = mysqli_num_rows($qry);
                    if($result>0)
                                {
                                    while($row= $qry->fetch_assoc() )
                                {
                                    $keyword= $row['keyword'];
                                    $description=$row['description'];
                                         $command=$row['command'];
                                    echo"<h1>$keyword</h1>";
                                    echo"<p>$description</p>";
                                         echo"<p>$command</p>";
                                }
                }
                    else
                        {
                            echo '<script>alert("OOPS! NO RESULT")</script>';
                       }
?>