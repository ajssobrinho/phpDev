<script language="javascript" type="text/javascript">
function showHideFeature_1(shID) {
   if (document.getElementById('feature_1')) {
      if (document.getElementById('feature_1-show').style.display != 'none') {

 $( "#feature_3" ).fadeOut( "slow", function() { });
 $( "#feature_2" ).fadeOut( "slow", function() { });
 $( "#feature_1" ).fadeIn( "slow", function() { });
   				
				  document.getElementById('feature_1_btn').style.visibility = 'hidden';
		          document.getElementById('feature_1_btn_active').style.visibility = 'visible';
		
				          document.getElementById('feature_3_btn').style.visibility = 'visible';
		          document.getElementById('feature_3_btn_active').style.visibility = 'hidden';

         document.getElementById('feature_2_btn').style.visibility = 'visible';
         document.getElementById('feature_2_btn_active').style.visibility = 'hidden';
		
		 }
   }
}

function showHideFeature_2(shID) {
   if (document.getElementById('feature_2')) {
      if (document.getElementById('feature_2-show').style.display != 'none') {
 $( "#feature_3" ).fadeOut( "slow", function() { });
 $( "#feature_1" ).fadeOut( "slow", function() { });
 $( "#feature_2" ).fadeIn( "slow", function() { });
         document.getElementById('feature_2_btn').style.visibility = 'hidden';
         document.getElementById('feature_2_btn_active').style.visibility = 'visible';
		 
		  document.getElementById('feature_1_btn').style.visibility = 'visible';
		  
		          document.getElementById('feature_1_btn_active').style.visibility = 'hidden';
				  document.getElementById('feature_3_btn').style.visibility = 'visible';
		          document.getElementById('feature_3_btn_active').style.visibility = 'hidden';
		 }
   }
}

function showHideFeature_3(shID) {
   if (document.getElementById('feature_3')) {
      if (document.getElementById('feature_3-show').style.display != 'none') {
 $( "#feature_1" ).fadeOut( "slow", function() { });
 $( "#feature_2" ).fadeOut( "slow", function() { });
 $( "#feature_3" ).fadeIn( "slow", function() { });
		          document.getElementById('feature_3_btn').style.visibility = 'hidden';
		          document.getElementById('feature_3_btn_active').style.visibility = 'visible';

         document.getElementById('feature_2_btn').style.visibility = 'visible';
         document.getElementById('feature_2_btn_active').style.visibility = 'hidden';
		 
		  document.getElementById('feature_1_btn').style.visibility = 'visible';
		          document.getElementById('feature_1_btn_active').style.visibility = 'hidden';

		 }
   }
}
</script>

<script language="javascript" type="text/javascript">
$(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});q
</script>
