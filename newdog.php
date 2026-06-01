<?php
    include('include/init.php');
    echoHead('new dog');

    $mypostId = $_REQUEST["postId"];

    $posts= getPost($mypostId);
    debugOutput($posts);

    // $title = $post["title"];
    // $content = $post["content"];


    // var_dump($posts);

    // debugOutput($posts);

   echo "<style>

    
    div {
        width: 20%;
        display: inline-flexbox;
                              }
    </style>
<header>
   <h2> $title </h2> 
</header>

<nav>
    <a href='index.php'> Home Page</a> |
    <a href='newcat.php'> New cat</a> |
    <a href='newdog.php'> New dog </a>

</nav>
<body>
    <div style='background-color: lavender;'>
        <p> $content </p>
    </div>
    <div style='background-color: antiquewhite;'>
        <p> 2 </p>
    </div>

    <div style='background-color: lavender;'>
        <p>
            3
        </p>
    </div>
    <div style='background-color: antiquewhite;'>
            <p>
                4
            </p>
    </div>

</body>";

?>    
<!-- <style>

    
                    div {
                        width: 20%;
                        display: inline-flexbox;
                              }
                </style>
<header>
   <h2>Cute Stuff Pt.2</h2> 
</header>

<nav>
    <a href="index.php"> Home Page</a> |
    <a href="newcat.php"> New cat</a> |
    <a href="newdog.php"> New dog </a>

</nav>
<body>
    <div style="background-color: lavender;">
        <p> 1. Blah blah blah blah blah blah blah </p>
    </div>
    <div style="background-color: antiquewhite;">
        <p> 2 </p>
    </div>

    <div style="background-color: lavender;">
        <p>
            3
        </p>
    </div>
    <div style="background-color: antiquewhite;">
            <p>
                4
            </p>
    </div>

</body> -->

<?php
    echoFoot();
?>