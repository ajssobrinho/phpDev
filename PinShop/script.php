<script language="javascript" type="text/javascript">
function showHidePin(shID) {
   if (document.getElementById(shID)) {
      if (document.getElementById(shID+'-show').style.display != 'none') {
         document.getElementById(shID+'-show').style.display = 'none';
  		 document.getElementById('block').style.display = 'inline';
         document.getElementById(shID).style.display = 'block';
			$("body").addClass("lock_scroll");
		  $("body").removeClass("unlock_scroll");	
		 
		 $(document).keyup(function(e) {     
    if(e.keyCode== 27) {
 $("body").addClass("unlock_scroll");	
		  $("body").removeClass("lock_scroll");	
			document.getElementById(shID+'-show').style.display = 'inline';  		 
			document.getElementById('block').style.display = 'none';
	        document.getElementById(shID).style.display = 'none';} 
   
});
		 }
      else {
		  $("body").addClass("unlock_scroll");	
		  $("body").removeClass("lock_scroll");	
			document.getElementById(shID+'-show').style.display = 'inline';  		 
			document.getElementById('block').style.display = 'none';
	        document.getElementById(shID).style.display = 'none';
    	  }
   		}
}
</script>

<script language="javascript" type="text/javascript">
function showHideUser(shID) {
   if (document.getElementById(shID)) {
      if (document.getElementById(shID+'-show').style.display != 'none') {
         document.getElementById(shID+'-show').style.display = 'none';
         document.getElementById(shID).style.display = 'block';
         document.getElementById('foto_user_img').style.display = 'block';

	}
      else {
		 
			document.getElementById(shID+'-show').style.display = 'inline';  		 
	        document.getElementById(shID).style.display = 'none';
    	  }
   		}
}
</script>


<div id="block" class="blockbackground"></div>
