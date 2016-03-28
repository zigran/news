<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
	<script src="js/jquery-1.12.2.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
</head>
<body>

<div class="row">

<ul id="slide-out" class="col m2 side-nav fixed">
      <li class="news"><a href="#!">News</a></li>
      <li class="menu"><a href="#!">Menu</a></li>
      <li class="pages"><a href="#!">Pages</a></li>
    </ul>
    <a href="#" data-activates="slide-out" class="button-collapse"><i class="mdi-navigation-menu"></i></a>

                 
<div class="pageContent offset-m2 col m10">
</div>
	
</div>

</body>
</html>

<script>
$( document ).ready(function() {
  
	$('.news').click(function(){
	        $.ajax({
              url: 'include.php',
              success: function(html) {
                $(".pageContent").html(html);
              }
            });

})	

});

	// switch(recipient) {

 //      case "Haqqında":

 //            $.ajax({
 //              url: 'view/about.php',
 //              success: function(html) {
 //                $(".modalContents").html(html);
 //              }
 //            });

 //          break;

 //      case "Niyə Mingəçevir?":

 //          $.ajax({
 //            url: 'view/why.php',
 //            success: function(html) {
 //              $(".modalContents").html(html);
 //            }
 //          });

 //          break;

 //      case "Rezidentlər":

 //          $.ajax({
 //            url: 'view/team.php',
 //            success: function(html) {
 //              $(".modalContents").html(html);
 //            }
 //          });

 //          break;


 //        case "Mingəçevir Şəhəri":

 //            $.ajax({
 //              url: 'view/city.php',
 //              success: function(html) {
 //                $(".modalContents").html(html);
 //              }
 //            });

 //            break;

 //          }

 //  });



</script>