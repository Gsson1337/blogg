


<?php

function showpostsview ($results){

echo '<div class="container">';

//skriv ut alla inlägg
  foreach ($results as $row) {
    $postcomment = 'postcomment'.$row['id_pk'];
    $postname = 'postname'.$row['id_pk'];
    $id = $row['id_pk'];
    echo <<<POSTS

        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


      </div>
        <div class="item  col-xs-4 col-lg-4">
            <div class="thumbnail">
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">{$row['rubrik']}</h4>
                    <button id ="$postname" style = "width = 50px;">reply </button>
                    <input type="text" id="$postcomment" class="form-control input-sm chat-input" placeholder="comment" />
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('$postname').addEventListener("click", function(){
          $.get( "newpostcomment.php", { id: ($id), comment:$($postcomment).val()},
            function( data ) {
              console.log(data.newpostcomment);
            },"json");

        });
    </script>

POSTS;
      }

}
function showcommentsview ($results){

echo '<div class="container">';
//skriv ut alla inlägg
  for ($i = 0; $i< count($results); $i++) {
    $kommentar = $results[$i][0];
    $förälder =$results[$i][1];
    $margin = $förälder * 6;
    $förälder =( $results[$i][1]) -1;
    $reply = ''.$results[$i][2];
    $comment = 'comment' .$results[$i][2];
    echo <<<POSTS
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


      </div>

            <div class="thumbnail">
                <div class="caption" style="margin-left:{$margin}%;">
                    <button id ="$reply">reply </button>
                    <input type="text" id="$comment" class="form-control input-sm chat-input" placeholder="comment" />
                    <h4 class="group inner list-group-item-heading">$kommentar</h4><br>

                </div>
            </div>

    </div>

    <script>
        document.getElementById('$reply').addEventListener("click", function(){
          console.log($reply);
          console.log($($comment).val());
          $.get( "newcomment.php", { id:($reply), comment:$($comment).val()},
            function( data ) {
              console.log(data.newcomment);
            },"json");


        });
    </script>


POSTS;
      }

echo'</div>';
}

 ?>
