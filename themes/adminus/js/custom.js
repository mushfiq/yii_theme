$(function () {
   
   // Preload images
   $.preloadCssImages();
   
   
   
   // CSS tweaks
   $('#header #nav li:last').addClass('nobg');
   $('.block_head ul').each(function() { $('li:first', this).addClass('nobg'); });
   $('.block form input[type=file]').addClass('file');
         
         
   
   // Web stats
   $('table.stats').each(function() {
      
      if($(this).attr('rel')) {
         var statsType = $(this).attr('rel');
      } else {
         var statsType = 'area';
      }
      
      var chart_width = ($(this).parent('div').width()) - 60;
      
            
      if(statsType == 'line' || statsType == 'pie') {      
         $(this).hide().visualize({
            type: statsType,   // 'bar', 'area', 'pie', 'line'
            width: chart_width,
            height: '240px',
            colors: ['#6fb9e8', '#ec8526', '#9dc453', '#ddd74c'],
            
            lineDots: 'double',
            interaction: true,
            multiHover: 5,
            tooltip: true,
            tooltiphtml: function(data) {
               var html ='';
               for(var i=0; i<data.point.length; i++){
                  html += '<p class="chart_tooltip"><strong>'+data.point[i].value+'</strong> '+data.point[i].yLabels[0]+'</p>';
               }   
               return html;
            }
         });
      } else {
         $(this).hide().visualize({
            type: statsType,   // 'bar', 'area', 'pie', 'line'
            width: chart_width,
            height: '240px',
            colors: ['#6fb9e8', '#ec8526', '#9dc453', '#ddd74c']
         });
      }
   });
   
   
   
   // Sort table
   $("table.sortable").tablesorter({
      headers: { 0: { sorter: false}, 5: {sorter: false} },      // Disabled on the 1st and 6th columns
      widgets: ['zebra']
   });
   
   $('.block table tr th.header').css('cursor', 'pointer');
      
   
   
   // Check / uncheck all checkboxes
   $('.check_all').click(function() {
      $(this).parents('form').find('input:checkbox').attr('checked', $(this).is(':checked'));   
   });
      
   
   
   // Set WYSIWYG editor
   $('.wysiwyg').wysiwyg({css: "css/wysiwyg.css", brIE: false });
   
   
   
   // Modal boxes - to all links with rel="facebox"
   $('a[rel*=facebox]').facebox();
   
   
   
   // Messages
   $('.block .message').hide().append('<span class="close" title="Dismiss"></span>').fadeIn('slow');
   $('.block .message .close').hover(
      function() { $(this).addClass('hover'); },
      function() { $(this).removeClass('hover'); }
   );
      
   $('.block .message .close').click(function() {
      $(this).parent().fadeOut('slow', function() { $(this).remove(); });
   });
   
   
   
   // Form select styling
   $("form select.styled").select_skin();
   
   
   
   // Tabs
   $(".tab_content").hide();
   $("ul.tabs li:first-child").addClass("active").show();
   $(".block").find(".tab_content:first").show();

   $("ul.tabs li").click(function() {
      $(this).parent().find('li').removeClass("active");
      $(this).addClass("active");
      $(this).parents('.block').find(".tab_content").hide();
         
      var activeTab = $(this).find("a").attr("href");
      $(activeTab).show();
      
      // refresh visualize for IE
      $(activeTab).find('.visualize').trigger('visualizeRefresh');
      
      return false;
   });
   
   
   
   // Sidebar Tabs
   $(".sidebar_content").hide();
   
   if(window.location.hash && window.location.hash.match('sb')) {
   
      $("ul.sidemenu li a[href="+window.location.hash+"]").parent().addClass("active").show();
      $(".block .sidebar_content#"+window.location.hash).show();
   } else {
   
      $("ul.sidemenu li:first-child").addClass("active").show();
      $(".block .sidebar_content:first").show();
   }

   $("ul.sidemenu li").click(function() {
   
      var activeTab = $(this).find("a").attr("href");
      window.location.hash = activeTab;
   
      $(this).parent().find('li').removeClass("active");
      $(this).addClass("active");
      $(this).parents('.block').find(".sidebar_content").hide();         
      $(activeTab).show();
      return false;
   });   
   
   
   
   // Block search
   $('.block .block_head form .text').bind('click', function() { $(this).attr('value', ''); });
   
   
   
   // Image actions menu
   $('ul.imglist li').hover(
      function() { $(this).find('ul').css('display', 'none').fadeIn('fast').css('display', 'block'); },
      function() { $(this).find('ul').fadeOut(100); }
   );
   
   
      
   // Image delete confirmation
   $('ul.imglist .delete a').click(function() {
      if (confirm("Are you sure you want to delete this image?")) {
         return true;
      } else {
         return false;
      }
   });
   
   
   
   // Style file input
   $("input[type=file]").filestyle({ 
       image: "../../themes/adminus/images/upload.gif",
       imageheight : 30,
       imagewidth : 80,
       width : 250
   });
   
   
   
   // File upload
   if ($('#fileupload').length) {
      new AjaxUpload('fileupload', {
         action: '',
         autoSubmit: true,
         name: 'userfile',
         responseType: 'text/html',
         onSubmit : function(file , ext) {
               $('.fileupload #uploadmsg').addClass('loading').text('Uploading...');
               this.disable();   
            },
         onComplete : function(file, response) {
               $('.fileupload #uploadmsg').removeClass('loading').text("file has been successfully uploaded");
               this.enable();
            }   
      });
   }
      
      
   
   // Date picker
   $('input.date_picker').date_input();
   


   // Navigation dropdown fix for IE6
   if(jQuery.browser.version.substr(0,1) < 7) {
      $('#header #nav li').hover(
         function() { $(this).addClass('iehover'); },
         function() { $(this).removeClass('iehover'); }
      );
   }
   
   
   // IE6 PNG fix
   $(document).pngFix();
   
   
   
   // evoknow fix and functionalities
   if($(".errormsg li").html()=="dummy")
   {
      $(".errormsg").css("display", "none");  
   }
   $("#allShowError").css("display", "block");
   
   //registration form assistance
   
   //scroll the assistance block
   $(window).scroll(function() {
       $("#assistanceBlock").stop().animate({
           "marginTop": ($(window).scrollTop()) + "px"
       }, "slow");
   });
   //hide the assistance text initially
   $("#formAssistance").hide();
   //hide the assistance text once a control looses focuses
   $("#registration-form-register-form input").blur(function(){
      $("#formAssistance").fadeOut("fast");   
   });
   //name
   $("#RegistrationForm_name").click(function(){
      $("#formAssistance").fadeIn("fast").html("Please enter your full name in the textbox<p>eg. John Smith, Laura Jane</p>");
   });
   //dob
   $("#RegistrationForm_dob").click(function(){
      $("#formAssistance").html("Choose your date of birth form the calendar. Navigate through the months, and years using the contorls of the widget").fadeIn("fast");
   });
   //gender
   $("#RegistrationForm_gender").click(function(){
      $("#formAssistance").html("Choose your gender from the drop down list").fadeIn("fast");
   });
   //username
   $("#RegistrationForm_username").click(function(){
      $("#formAssistance").html("Provide a username that you desire.<p><i>the username must be atleast 6 char long and no more than 12 char in length</i></p><p>eg. johns01, laura201</p>").fadeIn("fast");
   });
   //password
   $("#RegistrationForm_password").click(function(){
      $("#formAssistance").html("Provide a password for your accound<p><i>the password must be atleast 6 char long</i></p>").fadeIn("fast");
   });
   //password
   $("#RegistrationForm_passwordConfirm").click(function(){
      $("#formAssistance").html("Please make sure that the password you just entered is exactly the same one that you enter in this Confirm Password field<p>eg. Password: p@$$w0rd -- Confirm Password: p@$$w0rd</p>").fadeIn("fast");
   });
   //email
   $("#RegistrationForm_email").click(function(){
      $("#formAssistance").html("Enter a valid email address, that will be the address where you would recieve any further correspondance.<p>eg. johnsmith_mycom@domain.com</p>").fadeIn("fast");
   });
   //country
   $("#RegistrationForm_country").click(function(){
      $("#formAssistance").html("Choose your country of residence from the list. i.e. the country you are currently in.").fadeIn("fast");
   });
   //zip
   $("#RegistrationForm_zip").click(function(){
      $("#formAssistance").html("Provide a valid zip code, which a numeric code of length 5").fadeIn("fast");
   });
   //phone
   $("#RegistrationForm_phone").click(function(){
      $("#formAssistance").html("Provide a phone number where we can reach you.<p>eg. +10 2412313546</p>").fadeIn("fast");
   });
   //mobile
   $("#RegistrationForm_mobile").click(function(){
      $("#formAssistance").html("Provide a mobile phone number that belongs personally to you<p>eg. +10 9092313546</p>").fadeIn("fast");
   });
   //mobile
   $("#RegistrationForm_address").click(function(){
      $("#formAssistance").html("Type in your complete postal address<p>eg. House:2, Lane:5</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CA, USA</p>").fadeIn("fast");
   });
   
   
   
   
});