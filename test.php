<html>

<head>
<style>
#navMenu{
    margin:0;
    padding:0;
}
#navMenu ul{
    margin:0;
    padding:0;

}
#navMenu li{
    margin-right:2px;
    padding:0;
    list-style:none;
    float:left;
    position:relative;
    background:#CCC;
}
#navMenu ul li a{
    text-align:center;
    font-family:sans-serif, cursive;
    text-decoration:none;
    height:30px;
    width:150px;
    display:block;
    color:#000;
    border:10px;
  -webkit-transition: background-color 0.1s;
  -moz-transition: background-color 0.1s;
  -o-transition: background-color 0.1s;
  transition: background-color 0.1s;
}
#navMenu ul ul{
        position:absolute;
        visibility:hidden;
  -webkit-transition: background-color 0.1s;
  -moz-transition: background-color 0.1s;
  -o-transition: background-color 0.1s;
  transition: background-color 0.1s;
}

#navMenu ul li:hover ul{
    visibility:visible; 
  -webkit-transition: background-color 0.1s;
  -moz-transition: background-color 0.1s;
  -o-transition: background-color 0.1s;
  transition: background-color 0.1s;
}


</style>
</head>

<body>
<div id="wrapper"><!--beginning of wrapper div-->
<div id="navMenu"><!--Beginning of Nav Menu-->
    <ul><!--Beginning of main UL-->
      <li><a href="#">About Us</a>
            <ul><!--Begining of Internal UL-->
                <li><a href="#">Link item </a></li>
                <li><a href="#">Link item </a></li>
                <li><a href="#">Link item </a></li>
                <li><a href="#">Link item </a></li>
            </ul>
     </li>
     <li><a href="#">Contact Us</a></li>
  </ul><!--End of Main UL --></div>
</div>
<p>&nbsp;</p>

</body>

</html>