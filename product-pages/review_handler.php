<?php

$con=mysqli_connect('localhost','root',"",'sharod');
if(!$con) { die(); }

function putstar($rating)
{
    $temp=$rating;

    while($temp>0)
    {
        echo "<i class='star fas fa-star'></i>";
        $temp=$temp-1;
    }
    
    $temp=5-$rating;

    while($temp>0)
    {
        echo "<i class='star far fa-star'></i>";
        $temp=$temp-1;
    }
}

function getreviews($product_id)
{
    global $con;
        
    $select_query = "select * from feedback f, user_table u where f.product_id = $product_id and f.user_id = u.User_id order by f.rating desc";
    $result_query = mysqli_query($con, $select_query);

    while ($row = mysqli_fetch_assoc($result_query)) {
        $feedback_rating = $row['rating'];
        $feedback_description = $row['desc'];
        $feedback_user = $row['username'];

        echo "<div class='review'>
        <div class='reviewer'>$feedback_user</div>
        <div class='stars'>";

        putstar($feedback_rating);

        echo "</div>
        <div class='description'>$feedback_description</div>
        </div>";
    }
}

?>