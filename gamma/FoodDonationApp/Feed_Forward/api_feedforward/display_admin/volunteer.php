<?php
include "../connection.php";

$donor_data = array();
        $qry = "SELECT vol_id, vname, vphnos,vaddr,lic,veh,vemail from volunteer";
        $result = $conn->query($qry);

       

        
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $donor_data[] = $row;
            }
            // Send back the complete records as a json
            //header('Content-Type: application/json');
            echo json_encode($donor_data);
        }else{
            echo json_encode(array("success"=>false));
        }