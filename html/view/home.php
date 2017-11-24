<ul class="fly-in-text hidden">
<li>B</li>
<li>I</li>
<li>E</li>
<li>N</li>
<li>V</li>
<li>E</li>
<li>N</li>
<li>U</li>
<li>E</li>
</ul>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script type="text/javascript">
            
            $(function() {
                
                setTimeout(function() {
                    $('.fly-in-text').removeClass('hidden');
                }, 1000);
                
            })();
            
        </script>

<div class="slideshow">
	<ul>
		<li><img src="../img/slide300.png" alt=""/></li>
		<li><img src="../img/slide100.jpg" alt=""/>/></li>
	    <li><img src="../img/slide200.jpg" alt=""/>/></li>
	</ul>
</div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
 
<script type="text/javascript">
   $(function(){
      setInterval(function(){
         $(".slideshow ul").animate({marginLeft:-1000},800,function(){
            $(this).css({marginLeft:0}).find("li:last").after($(this).find("li:first"));
         })
      }, 3500);
   });
</script>

